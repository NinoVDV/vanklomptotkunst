<?php /* Smarty version Smarty-3.1.18, created on 2017-01-23 15:11:41
         compiled from "views\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2387158860f1da01f34-13488970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b287001d33b6d164cff757a8f8faf7d21074dd9' => 
    array (
      0 => 'views\\nav.tpl',
      1 => 1484910382,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2387158860f1da01f34-13488970',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58860f1da47f16_91225737',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58860f1da47f16_91225737')) {function content_58860f1da47f16_91225737($_smarty_tpl) {?>
    <!-- Navigation -->
        <nav class="cbp-spmenu-push" id="nav">
            <div class="container">
                <div class="logo">
                    <a href="index.php">Van <strong>klomp</strong> tot <strong>kunst</strong></a>
                </div>

                <div class="search" id="search"></div>

                <div class="languageswitch">
                    <div class="ned"></div>
                    <div class="eng"></div>
                </div>

                <div class="hamburger" id="showRightPush"></div>

                <ul>
                    <li><a href="?action=home"<?php if ($_smarty_tpl->tpl_vars['action']->value=='home') {?>class="active"<?php }?>>Home</a></li>
                    <li>
                      <a href="#" class="locations"<?php if ($_smarty_tpl->tpl_vars['action']->value=='locations') {?>class="active"<?php }?>>Locations</a>

                      <div class="dropdown">
                        <div class="row"><a href="?action=locations&location=Edam">Edam</a></div>
                        <div class="row"><a href="?action=locations&location=Volendam">Volendam</a></div>
                        <div class="row"><a href="?action=locations&location=Warder">Warder</a></div>
                        <div class="row"><a href="?action=locations&location=Kwadijk">Kwadijk</a></div>
                        <div class="row"><a href="?action=locations&location=Oosthuizen">Oosthuizen</a></div>
                        <div class="row"><a href="?action=locations&location=Schardam">Schardam</a></div>
                        <div class="row"><a href="?action=locations&location=Beets">Beets</a></div>
                        <div class="row"><a href="?action=locations&location=Middelie">Middelie</a></div>
                        <div class="row"><a href="?action=locations&location=Hobrede">Hobrede</a></div>
                      </div>
                    </li>
                    <li><a href="?action=agenda" id="agenda" <?php if ($_smarty_tpl->tpl_vars['action']->value=='agenda') {?>class="active"<?php }?>>Agenda</a></li>
                    <li><a href="?action=contact"<?php if ($_smarty_tpl->tpl_vars['action']->value=='contact') {?>class="active"<?php }?>>Contact</a></li>
                </ul>
            </div>
        </nav>
    <!-- End Navigation -->

    <!-- Mobile Navigation -->
       <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
           <h1>Menu</h1>
           <a href="index.php">Home</a>
           <a href="#" id="locaties">Locaties <div class="arrow"></div></a>

          <!-- Mobile subnav -->
          <ul class="subnav">
            <li><a href="#">Edam</a></li>
            <li><a href="#">Volendam</a></li>
            <li><a href="#">Warder</a></li>
            <li><a href="#">Kwadijk</a></li>
            <li><a href="#">Oosthuizen</a></li>
            <li><a href="#">Schardam</a></li>
            <li><a href="#">Beets</a></li>
            <li><a href="#">Middelie</a></li>
            <li><a href="#">Hobrede</a></li>
          </ul>
           <!-- End Mobile subnav -->

           <a href="agenda.php" id="agenda">Agenda</a>
           <a href="contact.php">Contact</a>

           <form action="#" method="POST">
               <!-- <div class="search-btn"></div> -->
               <input type="text" placeholder="Zoeken...">
               <input type="submit" class="search-btn">
           </form>

           <div class="languages">
               <div class="ned"></div>
               <div class="eng"></div>
           </div>
       </div>
    <!-- End Mobile Navigation -->
<?php }} ?>
