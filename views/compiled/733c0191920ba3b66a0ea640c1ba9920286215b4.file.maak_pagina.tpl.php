<?php /* Smarty version Smarty-3.1.18, created on 2017-01-23 13:11:15
         compiled from "views\maak_pagina.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174405885ee2012a437-62613992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '733c0191920ba3b66a0ea640c1ba9920286215b4' => 
    array (
      0 => 'views\\maak_pagina.tpl',
      1 => 1485173244,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174405885ee2012a437-62613992',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5885ee2014e727_75848298',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5885ee2014e727_75848298')) {function content_5885ee2014e727_75848298($_smarty_tpl) {?><br>
<br>
<br>
<h1>Maak verenigingpagina</h1>
<form method="post">
    <input type="text" placeholder="Naam pagina" name="naam_vp" required>
    <input type="text" placeholder="Adres" name="adres_vp" required>
    <input type="text" placeholder="Postcode" name="postcode_vp" required>
    <input type="text" placeholder="Plaats" name="plaats_vp" required>
    <input type="text" placeholder="Telefoon" name="telefoon_vp" required>
    <input type="text" placeholder="Email" name="email_vp" required>
    <br>
    <br>
    <input type="text" placeholder="Website" name="website_vp" required>
    <input type="text" placeholder="Informatie" name="informatie_vp" required>
    <input type="text" placeholder="Link naar afbeelding" name="afbeelding_vp" required>

    <br>
    <br>
    <input type="submit" value="Verstuur" name="subscribe" class="btn">
    <br>
</form>


<a href="?action=dashboard">Terug naar dashboard</a>
<?php }} ?>
