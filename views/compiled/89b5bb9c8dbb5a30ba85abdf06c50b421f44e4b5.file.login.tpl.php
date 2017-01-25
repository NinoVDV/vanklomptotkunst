<?php /* Smarty version Smarty-3.1.18, created on 2017-01-23 14:44:09
         compiled from "views\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18334588608a931f805-41250445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89b5bb9c8dbb5a30ba85abdf06c50b421f44e4b5' => 
    array (
      0 => 'views\\login.tpl',
      1 => 1485178974,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18334588608a931f805-41250445',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_588608a9345e02_20613065',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588608a9345e02_20613065')) {function content_588608a9345e02_20613065($_smarty_tpl) {?><form method="post">
<table>
<tr>
<td><input type="text" name="email_vereniging" placeholder="Email" required="required" /></td>
</tr>
<tr>
<td><input type="password" name="wachtwoord" placeholder="Wachtwoord" required="required" /></td>
</tr>
<tr>
<td><input type="submit" name="submitlogin" value="Login"></td>
</tr>
<tr>

</tr>
</table>
</form>
<?php }} ?>
