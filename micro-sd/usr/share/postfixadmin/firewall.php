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

include ("templates/header.php");
include ("templates/menu.php");

?>

<pre>
	<?php echo file_get_contents('/tmp/ufw') ?>
</pre>

<?php

include ("templates/footer.php");

