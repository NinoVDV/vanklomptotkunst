<?php /* Smarty version Smarty-3.1.18, created on 2017-01-27 12:43:44
         compiled from "views\vereniging_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:508588b321d0bba73-54659141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4b0fcf179986696bc756c4f479facf3fba91456' => 
    array (
      0 => 'views\\vereniging_login.tpl',
      1 => 1485517423,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '508588b321d0bba73-54659141',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_588b321d0bdec8_61436898',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588b321d0bdec8_61436898')) {function content_588b321d0bdec8_61436898($_smarty_tpl) {?><br>
<br>
<br>
<br>
<br>
<form method="post">
<table>
<tr>
<td><input type="text" name="email_vereniging" placeholder="Email" required="required" /></td>
</tr>
<tr>
<td><input type="password" name="wachtwoord" placeholder="Wachtwoord" required="required" style="font-size: 14px;"/></td>
</tr>
<tr>
<td><input type="submit" name="submitlogin" value="Login"></td>
</tr>
<tr>

</tr>
</table>
</form>
<br>
<?php }} ?>
