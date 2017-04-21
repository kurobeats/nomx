<?php if( !defined('POSTFIXADMIN') ) die( "This file cannot be used standalone." ); ?>
<?php
@header ("Expires: Sun, 16 Mar 2003 05:00:00 GMT");
@header ("Last-Modified: " . gmdate ("D, d M Y H:i:s") . " GMT");
@header ("Cache-Control: no-store, no-cache, must-revalidate");
@header ("Cache-Control: post-check=0, pre-check=0", false);
@header ("Pragma: no-cache");
@header ("Content-Type: text/html; charset=UTF-8");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link href="/css/alluser.css" type="text/css" rel="stylesheet">
	<link href="/css/adduser.css" type="text/css" rel="stylesheet">

		<link href="/css/update.css" type="text/css" rel="stylesheet">

		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="/Bootstrap/css/bootstrap.css">
	<!--<link rel="stylesheet" href="resize.css">  -->
	<link rel="stylesheet" href="/Bootstrap/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="/Bootstrap/css/bootstrap-theme.min.css">
	<script src="/Bootstrap/js/jquery-2.2.1.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="/Bootstrap/js/bootstrap.min.js"></script>
<title>nomx Admin - <?php print $_SERVER['HTTP_HOST']; ?></title>
</head>
<body>
        <img src="logo-default.png" />
   
    	<h1 class="headerr">nomx Administration</h1>
    </div>
<div id="login_header">
<a href="/main.php">
</a>
<?php
if (($CONF['show_header_text'] == "YES") and ($CONF['header_text']))
{
    print "<h2>" . $CONF['header_text'] . "</h2>\n";
}
?>
</div>

<?php
if(isset($_SESSION['flash'])) {
    if(isset($_SESSION['flash']['info'])) {
        echo '<ul class="flash-info">';
        foreach($_SESSION['flash']['info'] as $msg) {
            echo "<li>$msg</li>";
        }
        echo '</ul>';
    }
    if(isset($_SESSION['flash']['error'])) {
        echo '<ul class="flash-error">';
        foreach($_SESSION['flash']['error'] as $msg) {
            echo "<li>$msg</li>";
        }
        echo '</ul>';
    }
    /* nuke it from orbit. It's the only way to be sure. */
    $_SESSION['flash'] = array(); 
}

/* vim: set expandtab softtabstop=4 tabstop=4 shiftwidth=4: */
?>
