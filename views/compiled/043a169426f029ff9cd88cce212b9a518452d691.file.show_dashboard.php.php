<?php /* Smarty version Smarty-3.1.18, created on 2017-01-27 14:04:53
         compiled from "views\show_dashboard.php" */ ?>
<?php /*%%SmartyHeaderCode:7059588b43925670a2-99754858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '043a169426f029ff9cd88cce212b9a518452d691' => 
    array (
      0 => 'views\\show_dashboard.php',
      1 => 1485522289,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7059588b43925670a2-99754858',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_588b43925a27f9_50405906',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588b43925a27f9_50405906')) {function content_588b43925a27f9_50405906($_smarty_tpl) {?>
<<?php ?>?php
  if (isset($_SESSION['user_id'])){
    echo '<br><br><br><br><h1>Dashboard Items</h1>
    <div id="verenigingpagina">
      <h2>CRUD Verenigingpagina</h2>
      <br>
      <a href="?action=maak_pagina"><img src="images/media/dashboard_icons/add.png" alt="" style="width: 25px;"/></a>
      <a href="?action=bewerk_pagina"><img src="images/media/dashboard_icons/edit.png" alt="" style="width: 25px;"/></a>
      <a href="?action=verwijder_pagina"><img src="images/media/dashboard_icons/delete.png" alt="" style="width: 25px;"/></a>
    </div><br>';};?<?php ?>>
<?php }} ?>
