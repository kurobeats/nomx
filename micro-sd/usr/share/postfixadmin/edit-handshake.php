<?php
//shawn

require_once('common.php');

authentication_require_role('global-admin');
if ($_SERVER['REQUEST_METHOD'] == "GET")
{
    if (isset ($_GET['handshake']))
    {
        $handshake = escape_string($_GET['handshake']);
	$handshake_properties = get_handshake($handshake);
   
   if (isset ($handshake_properties))
	{
	$hHandshake = $handshake;
        $hDescription = $handshake_properties[0]['description'];
        $hTransport = substr($handshake_properties[0]['destination'], 1, -1);
	}
  }
  if (isset ($_GET['delete']))
  {
	if (($_GET['delete']) == "yes")
	{
		if (isset ($_GET['From']))
		{
			$delete = escape_string($_GET['From']);
			$result = db_query ("delete from alias where address='$delete'");
			$result = db_query ("DELETE from handshake where domain='$delete'");
        		header ("Location: main.php");
        		exit;
		}
	}
  }	
}

if ($_SERVER['REQUEST_METHOD'] == "POST")
{
    if (isset ($_POST['pHandshake'])) $sHandshake = escape_string($_POST['pHandshake']);
    if (isset ($_POST['pDescription'])) $sDescription = escape_string($_POST['pDescription']);
    if (isset ($_POST['pDestination']))
    {
	$sDestination = escape_string($_POST['pDestination']);
	$sDestination = "[$sDestination]"; 
    }
//	echo $sDescription; echo " "; echo $sDestination; echo " "; echo $sHandshake;

    $result = db_query ("UPDATE handshake SET description='$sDescription', destination='$sDestination' WHERE domain='$sHandshake'");
    if ($result['rows'] == 1)
    {

        header ("Location: main.php");
        exit;
    }

    else
    {
        $tMessage = $PALANG['pAdminEdit_domain_result_error'];
    }


}

include ("templates/header.php");
include ("templates/menu.php");
include ("templates/admin_edit-handshake.php");
include ("templates/footer.php");

/* vim: set expandtab softtabstop=4 tabstop=4 shiftwidth=4: */
?>
