<?php if( !defined('POSTFIXADMIN') ) die( "This file cannot be used standalone." ); ?>
<div class="container-fluid">
<?php
function _menulink ($href, $title, $submenu = "") {
    if ($submenu != "") $submenu = "<ul><li><a target='_top' href='$href'>$title</a>$submenu</li></ul>";
    return "<a target='_top' class='btn-lg menu' href='$href'>$title</a>$submenu";
} 

authentication_has_role('global-admin');

if (boolconf('alias_domain')) {
    $url = "create-alias-domain.php"; if (isset ($_GET['domain'])) $url .= "?target_domain=" . urlencode($_GET['domain']);
    $submenu_virtual .=  _menulink($url, $PALANG['pMenu_create_alias_domain']);
}

$submenu_admin = _menulink("create-admin.php", $PALANG['pAdminMenu_create_admin']);

$submenu_fetchmail = _menulink("fetchmail.php?new=1", $PALANG['pFetchmail_new_entry']);


if (authentication_has_role('global-admin')) {
    $submenu_sendmail = _menulink("broadcast-message.php", $PALANG['pAdminMenu_broadcast_message']);
} else {
    $submenu_domain = "";
    $submenu_sendmail = "";
}

print _menulink("main.php", 'Mailboxes');

if ($CONF['fetchmail'] == 'YES') {
    print _menulink("fetchmail.php", $PALANG['pMenu_fetchmail'], $submenu_fetchmail);
}

if ($CONF['sendmail'] == 'YES') {
    print _menulink("sendmail.php", $PALANG['pMenu_sendmail'], $submenu_sendmail);
} 

# not really useful in the admin menu
#if ($CONF['vacation'] == 'YES') {
#   print _menulink("edit-vacation.php", $PALANG['pUsersMenu_vacation']);
#}

print _menulink("password.php", $PALANG['pMenu_password']);

if (authentication_has_role('global-admin') && 'pgsql'!=$CONF['database_type'] && $CONF['backup'] == 'YES') {
    print _menulink("backup.php", $PALANG['pAdminMenu_backup']);
}

print _menulink("viewlog.php", $PALANG['pMenu_viewlog']);

print _menulink("relay.php", "Relay Settings");

print _menulink("logout.php", $PALANG['pMenu_logout']);

echo "</div>\n";

print "<br clear='all' /><br>"; # TODO

if (authentication_has_role('global-admin')) {
    $motd_file = "motd-admin.txt";
} else {
    $motd_file = "motd.txt";
}

if (file_exists (realpath ($motd_file)))
{
    print "<div id=\"motd\">\n";
    include ($motd_file);
    print "</div>";
}



# IE can't handle :hover dropdowns correctly. It needs some JS instead.
?>
<script type='text/javascript'>
sfHover = function() {
    var sfEls = document.getElementById("menu").getElementsByTagName("LI");
    for (var i=0; i<sfEls.length; i++) {
        sfEls[i].onmouseover=function() {
            this.className+=" sfhover";
        }
        sfEls[i].onmouseout=function() {
            this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
        }
    }
}
if (window.attachEvent) window.attachEvent("onload", sfHover);
</script>

<?php
/* vim: set ft=php expandtab softtabstop=3 tabstop=3 shiftwidth=3: */
?>
</div>
