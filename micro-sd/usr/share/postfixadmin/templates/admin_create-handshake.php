<?php 
//shawn

if( !defined('POSTFIXADMIN') ) die( "This file cannot be used standalone." ); ?>
<div id="edit_form">
<form name="edit_handshake" method="post">
<div class="container-fluid"><table id="alias_domain_table" class="table table-striped table-hover Usertable table-bordered">
   <tr>
   <td colspan="3"><h3><?php print $PALANG['pAdminNew_handshake_welcome']; ?></h3></td>
   </tr>
   <tr>
      <td><?php print $PALANG['pAdminEdit_handshake_domain'] . ":"; ?></td>
      <td><input class="flat" type="text" name="pEmail" value="<?php print htmlspecialchars($hEmail, ENT_QUOTES); ?>" /></td>
      <td>&nbsp;</td>
 </tr>
   <tr>
      <td><?php print $PALANG['pAdminEdit_handshake_destination']; ?></td>
      <td><input class="flat" type="text" name="pDestination" value="<?php print htmlspecialchars($hTransport, ENT_QUOTES); ?>" /></td>
      <td>&nbsp;</td>
   </tr>
   <tr>
      <td><?php print $PALANG['pAdminEdit_handshake_description']; ?></td>
      <td><input class="flat" type="text" name="pDescription" value="<?php print htmlspecialchars($hDescription, ENT_QUOTES); ?>" /></td>
      <td>&nbsp;</td>
   </tr>

   <tr>
      <td colspan="3" class="hlp_center"><input type="submit" class="button" name="submit" value="<?php print $PALANG['pAdminEdit_handshake_button']; ?>" /></td>
   </tr>
   <tr>
      <td colspan="3" class="standout"><?php print $tMessage; ?></td>
   </tr>
</table></div>
</form>
</div>
