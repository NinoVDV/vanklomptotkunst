<?php /* Smarty version Smarty-3.1.18, created on 2017-01-24 10:24:16
         compiled from "views\locations.tpl" */ ?>
<?php /*%%SmartyHeaderCode:304675887195acd4e33-55527789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7317707063d9f8b3ddf9a060fe98d2da90856fe1' => 
    array (
      0 => 'views\\locations.tpl',
      1 => 1485249852,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '304675887195acd4e33-55527789',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5887195b01db38_01882351',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
    'result2' => 0,
    'oneItem2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5887195b01db38_01882351')) {function content_5887195b01db38_01882351($_smarty_tpl) {?>  <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
<header>
    <div class="container">
        <div class="image" style="background: url('<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['afbeelding_locatie'];?>
') center;">
            <div class="overlay">
                <h1><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['naam_locatie'];?>
</h1>
                <p><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['informatie_locatie'];?>
</p>
                <a href="#" class="btn">Evenementen</a>
            </div>
        </div>
    </div>
</header>
<!-- End Header -->

<?php } ?>

<!-- Locaties -->
<section id="locations">
<div class="container">

<aside>
<div class="btn active" id="btn-all">Alles</div>
<div class="btn" id="btn-cultuur">Cultuur</div>
<div class="btn" id="btn-kunst">Kunst</div>
</aside>

<div class="thumbs">
<?php  $_smarty_tpl->tpl_vars['oneItem2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem2']->key => $_smarty_tpl->tpl_vars['oneItem2']->value) {
$_smarty_tpl->tpl_vars['oneItem2']->_loop = true;
?>
<div class="col-25 filter-kunst" style="background: url('<?php echo $_smarty_tpl->tpl_vars['oneItem2']->value['thumbnail'];?>
') no-repeat center top; background-size: cover;">
<a href="?action=pagina&vereniging=<?php echo $_smarty_tpl->tpl_vars['oneItem2']->value['id'];?>
">
  <div class="overlay">
      <h3><?php echo $_smarty_tpl->tpl_vars['oneItem2']->value['naam_vereniging'];?>
</h3>
      <p>
        <?php echo $_smarty_tpl->tpl_vars['oneItem2']->value['beschrijving'];?>

      </p>
  </div>
</a>
</div>
<?php } ?>
</div>
</section>
<!-- End Locaties -->
<?php }} ?>
