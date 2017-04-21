<?php
/** 
 * Postfix Admin 
 * 
 * LICENSE 
 * This source file is subject to the GPL license that is bundled with  
 * this package in the file LICENSE.TXT. 
 * 
 * Further details on the project are available at : 
 *     http://www.postfixadmin.com or http://postfixadmin.sf.net 
 * 
 * @version $Id: list-virtual.php 1199 2011-10-07 22:58:38Z christian_boltz $ 
 * @license GNU GPL v2 or later. 
 * 
 * File: list-virtual.php
 * List virtual users for a domain.
 *
 * Template File: list-virtual.php
 *
 * Template Variables:
 *
 * tMessage
 * tAlias
 * tMailbox
 *
 * Form POST \ GET Variables:
 *
 * fDomain
 * fDisplay
 */
require_once('common.php');

authentication_require_role('admin');

if ($_SERVER['REQUEST_METHOD'] == "POST")
{
	$host = $_POST['host'];
	$port = $_POST['port'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$file = fopen('/etc/relay.json', 'w');
	fwrite($file, json_encode(array('host' => $host, 'username' => $username, 'password' => $password, 'port' => $port)));
	fclose($file);
}

include ("templates/header.php");
include ("templates/menu.php");


extract(json_decode(file_get_contents('/etc/relay.json'), TRUE))

?>
<div id="edit_form">
<form name="relay" method="post">
<table>
   <tr>
      <td colspan="3"><h3>Relay Settings (Legacy SMTP Reverse Compatibility)</h3></td>
   </tr>
   <tr>
      <td>Host:</td>
      <td>
		  <input type="text" name="host" value="<?php echo $host ?>" />
      <td>
   </tr>
   <tr>
      <td>Username:</td>
      <td>
		  <input type="text" name="username" value="<?php echo $username ?>" />
      <td>
   </tr>
   <tr>
      <td>Password:</td>
      <td>
		  <input type="text" name="password" value="<?php echo $password ?>" />
      <td>
   </tr>
   <tr>
      <td>Port:</td>
      <td>
		  <input type="text" name="port" value="<?php echo $port ?>" />
      <td>
   </tr>
   <tr>
      <td colspan="3" class="hlp_center"><input type="submit" class="button" /></td>
   </tr>
</table>
</form>
</div>

<?php

include ("templates/footer.php");

