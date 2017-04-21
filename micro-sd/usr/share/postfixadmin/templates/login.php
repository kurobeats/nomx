<?php if( !defined('POSTFIXADMIN') ) die( "This file cannot be used standalone." ); ?>


<div class="modal-body">
<form name="login" method="post">
 <div class="back">
  <div class="user_login">
<div class="container-fluid"><table class="table table-striped table-hover Usertable table-bordered">

  
   <tr>
      <td><?php print $PALANG['pLogin_username'] . ":"; ?></td>
      <td><label for="Email"><input class="flat" type="text" name="fUsername" value="" /></td>
   </tr>
   <tr>
      <td><?php print $PALANG['pLogin_password'] . ":"; ?></td>
      <td><label for="Email"><input class="flat" type="password" name="fPassword" /></td>
   </tr>
   <tr>
      <td colspan="2" class="hlp_center"><input type="submit" value="Login" class="btn" style="color: white; margin:0 auto; font-size:large" /></td>
   </tr>
   <tr>
      <td colspan="2" class="standout"><?php print $tMessage; ?></td>
   </tr>
</table>


</div>
<?php /* vim: set ft=php expandtab softtabstop=3 tabstop=3 shiftwidth=3: */ ?>
