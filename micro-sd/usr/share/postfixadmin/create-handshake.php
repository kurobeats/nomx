<?php
//shawn

require_once('common.php');

authentication_require_role('global-admin');
/* if ($_SERVER['REQUEST_METHOD'] == "GET")
{
    if (isset ($_GET['new']))
    {
	if(($_GET['new']) == "Y3s")
	
   }
}
*/

if ($_SERVER['REQUEST_METHOD'] == "POST")
{

    if (isset ($_POST['pEmail'])) $sHandshake = escape_string($_POST['pEmail']);
    if (isset ($_POST['pDescription'])) $sDescription = escape_string($_POST['pDescription']);
    if (isset ($_POST['pDestination'])) 
    {
	$sDestination = escape_string($_POST['pDestination']);
	$sDestination = "[$sDestination]"; 
    }
//	echo $sDescription; echo " "; echo $sDestination; echo " "; echo $sHandshake;

    $result = db_query ("select 1 from handshake WHERE domain='$sHandshake'");
    if ($result['rows'] == 1)
    {
	$tMessage = $PALANG['pAdminEdit_domain_result_error'];
    }

    else
    {
	$result = db_query ("insert into handshake (domain,destination, description) values ('$sHandshake','$sDestination','$sDescription')");
	if ($result['rows'] == 1)
	{
		$result = db_query ("insert into alias (address,goto,domain) values ('$sHandshake','$sHandshake','HANDSHAKE')");
		if ($result['rows'] == 1)
		{
		header ("Location: main.php");
        	exit;
		}

	}
	else
	{
        	$tMessage = $PALANG['pAdminEdit_domain_result_error'];
	}
    }


}

include ("templates/header.php");
include ("templates/menu.php");
include ("templates/admin_create-handshake.php");
include ("templates/footer.php");


/* vim: set expandtab softtabstop=4 tabstop=4 shiftwidth=4: */
?>
