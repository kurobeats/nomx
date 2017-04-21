#!/usr/bin/env python

import sys, getopt
import os
import logging
import pif
import MySQLdb
import logging
logging.basicConfig()
sys.path.append("/opt/godaddy/pygodaddy-master/pygodaddy-master")
import pygodaddy
import netifaces
import subprocess
from subprocess import call
from subprocess import check_output
import json
from jinja2 import Template
import time
import datetime

def getserial():
  cpuserial = "0000000000000000"
  try:
    f = open('/proc/cpuinfo','r')
    for line in f:
      if line[0:6]=='Serial':
        cpuserial = line[10:26]
    f.close()
  except:
    cpuserial = "ERROR000000000"
  return cpuserial
  
interface = netifaces.ifaddresses("eth0")[2][0]
db = MySQLdb.connect(host="localhost", user="postfixadmin", passwd="death", db="postfixadmin")
localIp = interface["addr"]
localCidr = str(sum([bin(int(octet)).count('1') for octet in interface['netmask'].split('.')]))
ip = pif.get_public_ip()
cur = db.cursor()
cur.execute("SELECT `domain`, `gduser`, `gdpass` FROM `domain` WHERE `domain` != \"ALL\"")
domains = reduce(lambda x, y: x + y[0] + y[1] + y[2] + "\n", cur.fetchall(), "")
oldHostname = check_output(["/bin/hostname"])
hostname = "nomx" + getserial() + ".local"

with open("/tmp/ufw", "w+") as file:
	file.write(check_output(["/usr/sbin/ufw", "status"]))

if hostname != oldHostname:
	print("[%s] Hostname has changed. Updating..." % datetime.datetime.now().isoformat())
	call(["/bin/hostname", hostname])
	with open("/etc/hostname", "w+") as file:
		file.write(hostname)

relay = "{\"host\":\"\",\"username\":\"\",\"password\":\"\",\"port\":\"\"}"
oldRelay = ""
relayChanged = 0
if os.path.exists("/var/nomx/relay"):
	with open("/var/nomx/relay", "r") as file:
		oldRelay = file.read()
if os.path.exists("/etc/relay.json"):
	with open("/etc/relay.json", "r") as file:
		relay = file.read()

if relay != oldRelay:
	print("[%s] Relay has changed. Updating..." % datetime.datetime.now().isoformat())
	with open("/etc/postfix/template.jinja2", "r") as templateFile:
		template = Template(templateFile.read())
		with open("/etc/postfix/main.cf", "w") as conf:
			relayVars = json.loads(relay)
			relayVars["serial"] = getserial()
			conf.write(template.render(relayVars))
			call(["/usr/sbin/service", "postfix", "reload"])
			with open("/var/nomx/relay", "w") as file:
				file.write(relay)

changed = 0

oldIp = ""
if os.path.exists("/var/nomx/ip"):
	with open("/var/nomx/ip", 'r') as file:
		oldIp = file.read()
if ip != oldIp:
	changed = 1
	
oldLocalIp = ""
if os.path.exists("/var/nomx/localIp"):
	with open("/var/nomx/localIp", 'r') as file:
		oldLocalIp = file.read()
if localIp != oldLocalIp:
	changed = 1

oldLocalCidr = ""
if os.path.exists("/var/nomx/localCidr"):
	with open("/var/nomx/localCidr", 'r') as file:
		oldLocalCidr = file.read()
if localCidr != oldLocalCidr:
	changed = 1

oldDomains = ""
if os.path.exists("/var/nomx/domains"):
	with open("/var/nomx/domains", 'r') as file:
		oldDomains = file.read()
if domains != oldDomains:
	changed = 1
	
if not changed == 1:
	print("[%s] Nothing has changed. Exiting." % datetime.datetime.now().isoformat())
	sys.exit(0)

if not localIp == oldLocalIp or not ip == oldIp:
	print("[%s] Updating firewall." % datetime.datetime.now().isoformat())
	FNULL = open(os.devnull, 'w')
	call(("/usr/sbin/ufw --force reset").split(), stdout=FNULL, stderr=subprocess.STDOUT)
#		call(("/usr/sbin/ufw delete allow from " + oldLocalIp + "/" + oldLocalCidr + " proto tcp to any port 22").split())
#		call(("/usr/sbin/ufw delete allow from " + oldLocalIp + "/" + oldLocalCidr + " proto tcp to any port 80").split())
	call(("/usr/sbin/ufw allow 587/tcp").split(), stdout=FNULL, stderr=subprocess.STDOUT)
	call(("/usr/sbin/ufw allow 143/tcp").split(), stdout=FNULL, stderr=subprocess.STDOUT)
	call(("/usr/sbin/ufw allow 110/tcp").split(), stdout=FNULL, stderr=subprocess.STDOUT)
	call(("/usr/sbin/ufw allow 993/tcp").split(), stdout=FNULL, stderr=subprocess.STDOUT)
	call(("/usr/sbin/ufw allow 995/tcp").split(), stdout=FNULL, stderr=subprocess.STDOUT)
	call(("/usr/sbin/ufw allow 465/tcp").split(), stdout=FNULL, stderr=subprocess.STDOUT)
	call(("/usr/sbin/ufw allow 25/tcp").split(), stdout=FNULL, stderr=subprocess.STDOUT)
	call(("/usr/sbin/ufw allow 26/tcp").split(), stdout=FNULL, stderr=subprocess.STDOUT)
	call(("/usr/sbin/ufw allow from " + localIp + "/" + localCidr + " proto tcp to any port 22").split(), stdout=FNULL, stderr=subprocess.STDOUT)
	call(("/usr/sbin/ufw allow from " + localIp + "/" + localCidr + " proto tcp to any port 80").split(), stdout=FNULL, stderr=subprocess.STDOUT)
	call(("/usr/sbin/ufw --force enable").split(), stdout=FNULL, stderr=subprocess.STDOUT)

with open("/tmp/ufw", "w+") as file:
	file.write(check_output(["/usr/sbin/ufw", "status"]))

if ip != oldIp:
	with open("/var/nomx/ip", "w") as file:
		file.write(ip)
	
if localIp != oldLocalIp:
	with open("/var/nomx/localIp", "w") as file:
		file.write(localIp)
	
if localCidr != oldLocalCidr:
	with open("/var/nomx/localCidr", "w") as file:
		file.write(localCidr)

if domains != oldDomains:
	with open("/var/nomx/domains", "w") as file:
		file.write(domains)

from godaddypy import Client, Account

cur = db.cursor()
cur.execute("SELECT `domain`, `gduser`, `gdpass` FROM `domain` WHERE `domain` != \"ALL\"")
for row in cur.fetchall():
	if row[1] == "":
		continue
	print("[%s] Checking domain %s..." % (datetime.datetime.now().isoformat(), row[0]))
	client = Client(Account(api_key = row[1], api_secret = row[2]))
	try:
		for domain in client.get_domains():
			if row[0].endswith(domain):
				client.delete_records(row[0], name = "mail")
				client.add_record(row[0], {'data': ip, 'name': 'mail', 'ttl': 3600, 'type': 'A'})
				print("[%s] DNS record for mail.%s has been updated with IP %s successfully." % (datetime.datetime.now().isoformat(), row[0], ip))
				time.sleep(10)
				client.delete_records(row[0], name = "localmail")
				client.add_record(row[0], {'data': localIp, 'name': 'localmail', 'ttl': 3600, 'type': 'A'})
				print("[%s] DNS record for localmail.%s has been updated with IP %s successfully." % (datetime.datetime.now().isoformat(), row[0], localIp))
				cur.execute("INSERT INTO `log` (`timestamp`, `username`, `domain`, `action`, `data`) VALUES (NOW(), \"system\", \"%s\", \"godaddy dns synchronization\", \"Successfully updated.\")" % row[0])
	except Exception as e:
		cur.execute("INSERT INTO `log` (`timestamp`, `username`, `domain`, `action`, `data`) VALUES (NOW(), \"system\", \"%s\", \"godaddy dns synchronization\", \"Error, please check logs.\")" % row[0])
		print("[%s] There was an error communicating with GoDaddy: %s" % (datetime.datetime.now().isoformat(), str(e)))
