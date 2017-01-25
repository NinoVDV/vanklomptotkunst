<?php /* Smarty version Smarty-3.1.18, created on 2017-01-23 12:14:39
         compiled from "views\search-bar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:66745885e59fc15b06-00681535%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e16cd94df52f9dcbb98c7b75e7b77f1c627bf8e3' => 
    array (
      0 => 'views\\search-bar.tpl',
      1 => 1433405002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66745885e59fc15b06-00681535',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5885e59fc220c0_14509504',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5885e59fc220c0_14509504')) {function content_5885e59fc220c0_14509504($_smarty_tpl) {?><div class="search-container">
    <div class="container">
        
        <form action="#" method="post" class="centerform">
            <input type="text" name="search" id="searchfield" placeholder="Keywords...">
            <input type="submit" id="postsearch" value="Zoeken">
        </form>

    </div>
</div><?php }} ?>
