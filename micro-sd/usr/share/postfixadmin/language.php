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
 * @version $Id: login.php 857 2010-08-22 12:18:43Z christian_boltz $ 
 * @license GNU GPL v2 or later. 
 * 
 * File: login.php
 * Authenticates a user, and populates their $_SESSION as appropriate.
 * Template File: login.php
 *
 * Template Variables:
 *
 *  tMessage
 *
 * Form POST \ GET Variables:
 *
 *  fUsername
 *  fPassword
 *  lang
 */

require_once('common.php');

if($CONF['configured'] !== true) {
  print "Installation not yet configured; please edit config.inc.php";
  exit;
}

if ($_SERVER['REQUEST_METHOD'] == "GET")
{
    include ("./templates/header.php");
    include ("./templates/language.php");
    include ("./templates/footer.php");
}

if ($_SERVER['REQUEST_METHOD'] == "POST")
{

    $lang = safepost('lang');

    if ( $lang != check_language(0) ) { # only set cookie if language selection was changed
        setcookie('lang', $lang, time() + 60*60*24*30); # language cookie, lifetime 30 days
        # (language preference cookie is processed even if username and/or password are invalid)
    }

    include ("./templates/header.php");
    include ("./templates/language.php");
    include ("./templates/footer.php");
}

/* vim: set expandtab softtabstop=4 tabstop=4 shiftwidth=4: */
?>
