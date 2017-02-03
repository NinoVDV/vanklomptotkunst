<?php /* Smarty version Smarty-3.1.18, created on 2017-01-25 13:29:07
         compiled from "views\contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1808558889a13042dd6-47717045%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '556cdfb01037f6bc8d5f25a63cac5c53d72c71f1' => 
    array (
      0 => 'views\\contact.tpl',
      1 => 1484572446,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1808558889a13042dd6-47717045',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58889a1306ffd5_31669616',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58889a1306ffd5_31669616')) {function content_58889a1306ffd5_31669616($_smarty_tpl) {?><header>
    <div class="container">
        <div class="image">
            <div class="overlay">
                <h1>Kunst en Cultuur in de gemeente Edam-Volendam</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed turpis sem. Sed sodales venenatis. Nulla lobortis tristique hendrerit. Class  litora torquent per.</p>
                <a href="#" class="btn">Meer informatie</a>
            </div>
        </div>
    </div>
</header>
<!-- End Header -->

<!-- Contact -->

<section id="contact">
      <div class="container">
          <article>
            <div class="col-50">
                <h2>Over ons</h2>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque urna vel orci interdum rhoncus. Curabitur id lorem risus. Phasellus sed elit ac nisl iaculis aliquam. Donec aliquet rutrum lobortis.
                </p>

                <p>
                    Pellentesque imperdiet maximus risus, id ultricies tortor blandit in. Suspendisse vel molestie purus, at lobortis nisi. Nulla quis facilisis sapien. Ut ut ipsum nisi. Curabitur id lorem risus. Phasellus sed elit ac nisl iaculis aliquam. Donec aliquet rutrum lobortis.
                </p>
            </div>

            <div class="col-50">
                <h2>Neem contact op!</h2>
                <form>
                    <input class="first" type="text" placeholder="Voornaam" name="voornaam">
                    <input type="text" placeholder="Achternaam" name="achternaam">
                    <input class="first" type="text" placeholder="Telefoon" name="telefoon">
                    <input type="text" placeholder="E-mail" name="e-mail">
                    <textarea id="txtarea-grow"  type="text" placeholder="Vraag of opmerking" name="vraag"></textarea>
                    <input type="submit" value="Verstuur" name="subscribe" class="btn">
                </form>
            </div>
          </article>
      </div>
</section>
<!-- End Contact -->
<?php }} ?>
