<?php if( !defined('POSTFIXADMIN') ) die( "This file cannot be used standalone." ); ?>
<div id="edit_form">
<form name="create_domain" method="post">
<input type="hidden" name="fDescription" value="" />
<input type="hidden" name="fAliases" value="0" />
<input type="hidden" name="fMailboxes" value="0" />


<div class="container-fluid"><table class="table table-striped table-hover Usertable table-bordered">
   <tr>
      <td colspan="3"><h3><?php print $PALANG['pAdminCreate_domain_welcome']; ?></h3></td>
   </tr>
   <tr>
      <td><?php print $PALANG['pAdminCreate_domain_domain'] . ":"; ?></td>
      <td><input class="flat" type="text" name="fDomain" value="<?php print htmlentities($tDomain); ?>" /></td>
      <td><?php print $pAdminCreate_domain_domain_text; ?></td>
   </tr>
   <?php if ($CONF['quota'] == 'YES') { ?>
   <tr>
      <td><?php print $PALANG['pAdminCreate_domain_maxquota'] . ":"; ?></td>
      <td><input class="flat" type="text" name="fMaxquota" value="<?php print $tMaxquota; ?>" /></td>
      <td><?php print $PALANG['pAdminCreate_domain_maxquota_text']; ?></td>
   </tr>
   <?php } if ($CONF['transport'] == 'YES') { ?>
   <tr>
      <td><?php print $PALANG['pAdminCreate_domain_transport'] . ":"; ?></td>
      <td><select class="flat" name="fTransport">
      <?php
      for ($i = 0; $i < sizeof ($CONF['transport_options']); $i++)
      {
         if ($CONF['transport_options'][$i] == $tTransport)
         {
            print "<option value=\"" . $CONF['transport_options'][$i] . "\" selected>" . $CONF['transport_options'][$i] . "</option>\n";
         }
         else
         {
            print "<option value=\"" . $CONF['transport_options'][$i] . "\">" . $CONF['transport_options'][$i] . "</option>\n";
         }
      }
      ?>
      </select>
      </td>
      <td><?php print $PALANG['pAdminCreate_domain_transport_text']; ?></td>
   </tr>
   <?php } ?>
   <tr>
      <td>GoDaddy API Key (Production only)</td>
      <td><input class="flat" type="text" name="fGdUser" value="<?php print htmlspecialchars($tGdUser, ENT_QUOTES); ?>" /></td>
      <td>&nbsp;</td>
   </tr>
   <tr>
      <td>GoDaddy API Secret (Production only)</td>
      <td><input class="flat" type="text" name="fGdPass" value="<?php print htmlspecialchars($tGdPass, ENT_QUOTES); ?>" /></td>
      <td>&nbsp;</td>
   </tr>
   <tr>
      <td colspan="3" class="hlp_center"><input class="button" type="submit" name="submit" value="<?php print $PALANG['pAdminCreate_domain_button']; ?>" /></td>
   </tr>
   <tr>
      <td colspan="3" class="standout"><?php print $tMessage; ?></td>
   </tr>
</table></div>
</form>
</div>
