<?php /* Smarty version Smarty-3.1.18, created on 2017-02-03 12:30:43
         compiled from "views\show_dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59645885e844914365-24432271%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd319365b80088c138a7da016d99d2b37347b3389' => 
    array (
      0 => 'views\\show_dashboard.tpl',
      1 => 1486121442,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59645885e844914365-24432271',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5885e84493ebe4_57943603',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5885e84493ebe4_57943603')) {function content_5885e84493ebe4_57943603($_smarty_tpl) {?>

<?php if (isset($_SESSION['phpro_user_id'])) {?>
<h1>Dashboard Items</h1>
<div id="verenigingpagina">
  <h2>CRUD Verenigingpagina</h2>
  <br>
  <a href="?action=maak_pagina"><img src="images/media/dashboard_icons/add.png" alt="" style="width: 25px;"/></a>
  <a href="?action=bewerk_pagina"><img src="images/media/dashboard_icons/edit.png" alt="" style="width: 25px;"/></a>
  <a href="?action=verwijder_pagina"><img src="images/media/dashboard_icons/delete.png" alt="" style="width: 25px;"/></a>
  
  <br>
  <a href="?action=logout">Log uit</a>
</div>
<?php }?>
<?php }} ?>
