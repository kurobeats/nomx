��    �      t  �   �
      `     a  "   c  b  �     �  (     #   0     T     j  &   �     �     �     �  *   �          6     >  )   E     o  "   �     �     �  /   �               !     /  #   B  #   f  %   �     �     �     �     �            W   2     �  "   �     �  &   �  "        2     N     f          �  !   �     �  '   �  "        A  !   X     z  !   �  %   �     �     �  !        )  &   D  5   k  *   �  .   �  =   �     9  (   K  %   t  %   �  0   �  &   �       /   *     Z  >   l  @   �     �     �     
  3     ,   S     �     �     �     �     �     �  '        +     @     Y     p     �  +   �     �     �     �          (     8     M     `     q  	   �     �  %   �  /   �     �          2     @  &   _     �  !   �     �     �     �  1   �  /   !     Q  !   ^     �  ,   �  T   �        
   �       �      �      �      �      �       !     !     2!  4   M!  $   �!     �!     �!     �!     "     "  *   5"  :   `"     �"      �"  )   �"     #  #   !#  0   E#     v#     �#  
   �#     �#     �#     �#     �#     �#     $  %    $     F$     `$     }$     �$  &   �$     �$     �$     �$  4   �$     3%     ;%     =%  �  A%     �&  '   �&  �  �&  %   �*      �*  1   �*  $   ++  $   P+  '   u+  %   �+     �+     �+  .   �+  -   ,  
   M,     X,  4   ^,     �,  ?   �,     �,     -  ;   -     X-     m-     }-     �-  '   �-  '   �-  +   �-     !.     8.     N.     j.     �.     �.  p   �.     (/  )   E/  *   o/  &   �/  -   �/     �/     0     %0     @0  !   [0  *   }0     �0  &   �0     �0     1  %    1     F1  #   [1  ,   1     �1  #   �1  "   �1      2  -   42  :   b2  -   �2  0   �2  <   �2     93  3   L3  *   �3  *   �3  D   �3  1   4     M4  F   _4     �4  E   �4  L   	5     V5  $   Z5     5  ?   �5  *   �5     6     6     36     M6     h6     �6  %   �6     �6     �6     �6     7     "7  -   27  !   `7  !   �7     �7     �7     �7     �7     �7     8     8     28     ;8  '   T8  5   |8  !   �8     �8     �8  %   9  *   ,9      W9  $   x9      �9     �9     �9  0   �9  *   �9     *:     7:     Q:  !   m:  N   �:  �   �:     �;     �;     �;     �;     �;     �;     �;  #   <  $   1<  6   V<  *   �<  &   �<     �<  "   �<      =     @=  3   ]=  S   �=  '   �=  &   >  0   4>     e>  /   �>  0   �>     �>     �>  
   ?     ?     ?     +?      H?     i?     �?  *   �?     �?  2   �?  5   #@     Y@  ,   t@     �@     �@     �@  0   �@     A     A     A     <   3               2   `   h   �      �   �       �   �   
   �              o   �   G   7   Y              T   �       C   t      ;   y   6       �   x           �          �       c   :       ,   d       O       5   @   q   V   _      �   �       m   �   r   p   1   �   !   	   l           Z              �   �   '   8   �              *                 a      �      u      �   K   �   \   �       �   +           ]   "           )           z   �      �          �   N   %   $   v      F   i   n                �   �   �   9   e   f       M   0                  Q   ~       �       |   H   g   J   �   �       �   D   �   U           >       L          B       �       �   S      =   ?   k   -           A   {          }   �             I                 �   [      &   j   ^       #   �   �   �   (   E   �   P   �   s   /       �       R   w   4          W   b   X       .    
 
Error applying application rules. 
Usage: %(progname)s %(command)s

%(commands)s:
 %(enable)-31s enables the firewall
 %(disable)-31s disables the firewall
 %(default)-31s set default policy
 %(logging)-31s set logging to %(level)s
 %(allow)-31s add allow %(rule)s
 %(deny)-31s add deny %(rule)s
 %(reject)-31s add reject %(rule)s
 %(limit)-31s add limit %(rule)s
 %(delete)-31s delete %(urule)s
 %(insert)-31s insert %(urule)s at %(number)s
 %(reset)-31s reset firewall
 %(status)-31s show firewall status
 %(statusnum)-31s show firewall status as numbered list of %(rules)s
 %(statusverbose)-31s show verbose firewall status
 %(show)-31s show firewall report
 %(version)-31s display version information

%(appcommands)s:
 %(applist)-31s list application profiles
 %(appinfo)-31s show information on %(profile)s
 %(appupdate)-31s update %(profile)s
 %(appdefault)-31s set default application policy
  (skipped reloading firewall)  Attempted rules successfully unapplied.  Some rules could not be unapplied. %s is group writable! %s is world writable! '%(f)s' file '%(name)s' does not exist '%s' already exists. Aborting '%s' does not exist '%s' is not writable (be sure to update your rules accordingly) : Need at least python 2.5)
 Aborted Action Adding IPv6 rule failed: IPv6 not enabled Available applications: Backing up '%(old)s' to '%(new)s'
 Bad destination address Bad interface name Bad interface name: can't use interface aliases Bad interface type Bad port Bad port '%s' Bad source address Cannot insert rule at position '%d' Cannot insert rule at position '%s' Cannot specify 'all' with '--add-new' Checking ip6tables
 Checking iptables
 Checking raw ip6tables
 Checking raw iptables
 Checks disabled Command '%s' already exists Command may disrupt existing ssh connections. Proceed with operation (%(yes)s|%(no)s)?  Could not back out rule '%s' Could not delete non-existent rule Could not find '%s'. Aborting Could not find a profile matching '%s' Could not find executable for '%s' Could not find profile '%s' Could not find protocol Could not find rule '%d' Could not find rule '%s' Could not get listening status Could not get statistics for '%s' Could not load logging rules Could not normalize destination address Could not normalize source address Could not perform '%s' Could not update running firewall Couldn't find '%s' Couldn't find parent pid for '%s' Couldn't find pid (is /proc mounted?) Couldn't open '%s' for reading Couldn't stat '%s' Couldn't update application rules Couldn't update rules file Couldn't update rules file for logging Default %(direction)s policy changed to '%(policy)s'
 Default application policy changed to '%s' Default: %(in)s (incoming), %(out)s (outgoing) Deleting:
 %(rule)s
Proceed with operation (%(yes)s|%(no)s)?  Description: %s

 Duplicate profile '%s', using last found ERROR: this script should not be SGID ERROR: this script should not be SUID Firewall is active and enabled on system startup Firewall not enabled (skipping reload) Firewall reloaded Firewall stopped and disabled on system startup Found exact match Found multiple matches for '%s'. Please use exact profile name Found non-action/non-logtype match (%(xa)s/%(ya)s %(xl)s/%(yl)s) From IPv6 support not enabled Improper rule syntax Improper rule syntax ('%s' specified with app rule) Insert position '%s' is not a valid position Invalid '%s' clause Invalid 'from' clause Invalid 'port' clause Invalid 'proto' clause Invalid 'to' clause Invalid IP version '%s' Invalid IPv6 address with protocol '%s' Invalid command '%s' Invalid interface clause Invalid log level '%s' Invalid log type '%s' Invalid option Invalid policy '%(policy)s' for '%(chain)s' Invalid port with protocol '%s' Invalid ports in profile '%s' Invalid position ' Invalid position '%d' Invalid profile Invalid profile name Invalid token '%s' Logging disabled Logging enabled Logging:  Missing policy for '%s' Mixed IP versions for 'from' and 'to' Must specify 'tcp' or 'udp' with multiple ports Need 'from' or 'to' with '%s' Need 'to' or 'from' clause New profiles: No ports found in profile '%s' No rules found for application profile Option 'log' not allowed here Option 'log-all' not allowed here Port ranges must be numeric Port: Ports: Profile '%(fn)s' has empty required field '%(f)s' Profile '%(fn)s' missing required field '%(f)s' Profile: %s
 Profiles directory does not exist Protocol mismatch (from/to) Protocol mismatch with specified protocol %s Resetting all rules to installed defaults. Proceed with operation (%(yes)s|%(no)s)?  Resetting all rules to installed defaults. This may disrupt existing ssh connections. Proceed with operation (%(yes)s|%(no)s)?  Rule added Rule changed after normalization Rule deleted Rule inserted Rule updated Rules updated Rules updated (v6) Rules updated for profile '%s' Skipped reloading firewall Skipping '%(value)s': value too long for '%(field)s' Skipping '%s': also in /etc/services Skipping '%s': couldn't process Skipping '%s': field too long Skipping '%s': invalid name Skipping '%s': name too long Skipping '%s': too big Skipping '%s': too many files read already Skipping IPv6 application rule. Need at least iptables 1.4 Skipping adding existing rule Skipping inserting existing rule Skipping malformed tuple (bad length): %s Skipping malformed tuple: %s Skipping unsupported IPv6 '%s' rule Status: active
%(log)s
%(pol)s
%(app)s%(status)s Status: active%s Status: inactive Title: %s
 To Unknown policy '%s' Unsupported action '%s' Unsupported default policy Unsupported direction '%s' Unsupported policy '%s' Unsupported policy for direction '%s' Unsupported protocol '%s' WARN: '%s' is world readable WARN: '%s' is world writable Wrong number of arguments You need to be root to run this script n problem running running ufw-init uid is %(uid)s but '%(path)s' is owned by %(st_uid)s unknown y yes Project-Id-Version: ufw
Report-Msgid-Bugs-To: FULL NAME <EMAIL@ADDRESS>
POT-Creation-Date: 2011-03-22 10:34-0500
PO-Revision-Date: 2011-08-11 12:02+0000
Last-Translator: rob <linuxned@gmail.com>
Language-Team: Dutch <nl@li.org>
MIME-Version: 1.0
Content-Type: text/plain; charset=UTF-8
Content-Transfer-Encoding: 8bit
X-Launchpad-Export-Date: 2012-02-13 23:52+0000
X-Generator: Launchpad (build 14781)
 
 
Fout bij toepassen van programmaregels 
Gebruik: %(progname)s %(command)s

%(commands)s:
 %(enable)-31s Firewall inschakelen
 %(disable)-31s Firewall uitschakelen
 %(default)-31s Standaard beleid instellen
 %(logging)-31s Logniveau instellen op %(level)s
 %(allow)-31s Toestaan toevoegen %(rule)s
 %(deny)-31s Blokkeren (stil) toevoegen %(rule)s
 %(reject)-31s Blokkeren toevoegen %(rule)s
 %(limit)-31s Limiet toevoegen %(rule)s
 %(delete)-31s Verwijderen %(urule)s
 %(insert)-31s %(urule)s invoeren op %(number)s
 %(reset)-31s Firewall herstellen
 %(status)-31s Firewallstatus tonen
 %(statusnum)-31s Firewallstatus tonen als genummerde lijst van %(rules)s
 %(statusverbose)-31s Verbose firewallstatus tonen
 %(show)-31s Firewallrapport tonen
 %(version)-31s Versie-informatie tonen

%(appcommands)s:
 %(applist)-31s Programmaprofielen tonen
 %(appinfo)-31s Informatie tonen over %(profile)s
 %(appupdate)-31s Update %(profile)s
 %(appdefault)-31s Standaard programmabeleid instellen
  (herladen van firewall overgeslagen)  Regels succesvol uitgeschakeld.  Sommige regels konden niet uitgeschakeld worden. %s kan door de groep bewerkt worden! %s kan door iedereen bewerkt worden! '%(f)s' bestand '%(name)s' bestaat niet '%s' bestaat al. Wordt nu afgebroken. '%s' bestaat niet '%s' is niet beschrijfbaar (zorg dat u uw regels overeenkomstig bijwerkt) : Ten minste versie 2.5 van Python benodigd)
 Afgebroken Actie IPv6-regel toevoegen mislukt: IPv6 niet ingeschakeld Beschikbare programma's: Er wordt een reservekopie gemaakt van '%(old)s' naar '%(new)s'
 Ongeldig bestemmingsadres Slechte interfacenaam Slechte interfacenaam: kan interface-aliases niet gebruiken Slecht interfacetype Ongeldige poort Ongeldige poort '%s' Ongeldig bronadres Kan regel niet invoeren op positie '%d' Kan geen regel invoeren op positie '%s' Kan 'all' niet met '--add-new' specificeren Ip6tables controleren
 iptables controleren
 Ruwe ip6tables controleren
 Ruwe iptables controleren
 Controles geannuleerd Opdracht '%s' bestaat reeds Deze opdracht kan mogelijk bestaande bestaande ssh-verbindingen verstoren. Opdracht uitvoeren (%(yes)s|%(no)s)?  Kon regel '%s' niet weigeren Kon niet-bestaande regel niet verwijderen Kon '%s' niet vinden. Wordt nu afgebroken. Geen zoekresultaten gevonden voor '%s' Kon uitvoerbaar bestand voor '%s' niet vinden Kon profiel '%s' niet vinden Kon protocol niet vinden Kon regel '%d' niet vinden Kon regel '%s' niet vinden Kon geen luisterstatus verkrijgen Kon geen statistieken verkrijgen voor '%s' Kon logregels niet laden Kon bestemmingsadres niet normaliseren Kon bronadres niet normaliseren Kon '%s' niet uitvoeren Kon draaiende firewall niet bijwerken Kan '%s' niet vinden Kon ouder-pid voor '%s' niet vinden Kon pid niet vinden (is /proc aangekoppeld?) Kon '%s' niet voor lezen openen Kon '%s' niet in statistiek brengen Kon programmaregels niet bijwerken Kon regelsbestand niet bijwerken Kon regelsbestand niet bijwerken voor logboek Standaardbeleid %(direction)s gewijzigd naar '%(policy)s'
 Standaard programmabeleid gewijzigd naar '%s' Standaard: %(in)s (inkomend), %(out)s (uitgaand) Verwijderen:
 %(rule)s
Opdracht uitvoeren (%(yes)s|%(no)s)?  Omschrijving: %s

 Dubbel profiel '%s', laatst gevonden wordt gebruikt FOUT: dit script zou geen SGID moeten zijn FOUT: dit script zou geen SUID moeten zijn Firewall is actief en ingeschakeld bij het opstarten van het systeem Firewall niet ingeschakeld (herstarten overslaan) Firewall herstart Firewall is gestopt en uitgeschakeld bij het opstarten van het systeem Exacte overeenkomst gevonden Meerdere resultaten gevonden voor '%s'. Geef de exacte profielnaam op Niet-actie/niet-logtype-overeenkomst gevonden: (%(xa)s/%(ya)s %(xl)s/%(yl)s) Van IPv6-ondersteuning niet ingeschakeld Onjuiste regelsyntaxis Onjuiste regelsyntaxis ('%s' gespecificeerd met programmaregel) Invoerpositie '%s' is geen geldige positie Ongeldige '%s'-clausule Ongeldige 'from'-clausule Ongeldige 'port'-clausule Ongeldige 'proto'-clausule Ongeldige 'to'-clausule Ongeldige IP-versie '%s' Ongeldig IPv6-adres met protocol '%s' Ongeldige opdracht '%s' Ongeldige interface-clausule Ongeldig logniveau '%s' Ongeldig logtype '%s' Ongeldige optie Ongeldig beleid '%(policy)s' voor '%(chain)s' Ongeldige poort met protocol '%s' Ongeldige poorten in profiel '%s' Ongeldige positie ' Ongeldige positie '%d' Ongeldig profiel Ongeldige profielnaam Ongeldige token '%s' Loggen uitschakeld Loggen ingeschakeld Loggen:  Missend beleid voor '%s' Gemengde IP-versies voor 'from' en 'to' Moet 'tcp' of 'udp' met meerdere poorten specificeren 'from' of 'to' benodigd voor '%s' 'to' of 'from'-clausule vereist Nieuwe profielen: Geen poorten gevonden in profiel '%s' Geen regels gevonden voor programmaprofiel Optie 'log' niet toegestaan hier Optie 'log-all' niet toegestaan hier Poortbereik moeten numeriek zijn Poort: Poorten: Profiel '%(fn)s' heeft leeg vereist veld '%(f)s' Profiel '%(fn)s' mist vereist veld '%(f)s' Profiel: %s
 Profielenmap bestaat niet Protocol-mismatch (from/to) Protocol-mismatch met protocol %s Alle regels terugzetten naar de standaardwaarden. Uitvoeren (%(yes)s|%(no)s)?  Alle regels terugzetten naar de standaardwaarden. Deze opdracht kan mogelijk bestaande bestaande ssh-verbindingen verstoren. Opdracht uitvoeren (%(yes)s|%(no)s)?  Regel toegevoegd Regel gewijzigd na normalisatie Regel verwijderd Regel ingevoerd Regel bijgewerkt Regels bijgewerkt Regels bijgewerkt (v6) Regels bijgewerkt voor profiel '%s' Herstarten van firewall overgeslagen '%(value)s' overslaan: waarde te lang voor '%(field)s' Overslaan van '%s': reeds in /etc/services Overslaan van '%s': kon niet verwerken '%s' overslaan: veld te lang Overslaan van '%s': ongeldige naam Overslaan van '%s': naam te lang Overslaan van '%s': te groot Overslaan van '%s': reeds te veel bestanden gelezen IPv6-programmaregel wordt genegeerd. Ten minste versie 1.4 van iptables is vereist. Toevoegen van bestaande regel overslaan Invoeren van bestaande regel overslaan Misvormde tupel overslaan (ongeldige lengte): %s Misvormde tupel overslaan: %s Overslaan van niet-ondersteunde IPv6 '%s'-regel Status: actief
%(log)s
%(pol)s
%(app)s%(status)s Status: actief%s Status: inactief Titel: %s
 Naar Onbekend beleid '%s' Niet-ondersteunde actie '%s' Niet-ondersteund standaardbeleid Niet-ondersteunde richting '%s' Niet-ondersteund beleid '%s' Niet-ondersteund beleid voor richting '%s' Niet-ondersteund protocol '%s' WAARSCHUWING: iedereen heeft leesrechten voor '%s' WAARSCHUWING: iedereen heeft schrijfrechten voor '%s' Ongeldig aantal argumenten U moet root zijn om dit script uit te voeren n probleem met uitvoeren van ufw-init uitvoeren uid is %(uid)s maar '%(path)s' is van %(st_uid)s onbekend y ja 