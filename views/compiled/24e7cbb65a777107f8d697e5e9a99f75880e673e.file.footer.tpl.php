<?php /* Smarty version Smarty-3.1.18, created on 2017-01-23 12:17:09
         compiled from "views\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:264035885e63527f3b9-34048258%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24e7cbb65a777107f8d697e5e9a99f75880e673e' => 
    array (
      0 => 'views\\footer.tpl',
      1 => 1484573407,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '264035885e63527f3b9-34048258',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5885e6352ac3e1_14369997',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5885e6352ac3e1_14369997')) {function content_5885e6352ac3e1_14369997($_smarty_tpl) {?>    <!-- Footer -->
    <footer>
        <div class="container">

            <div class="col-25">
                <a href="http://www.edam-volendam.nl/" target="_blank">
                    <img src="images/logo.png" alt="Gemeente Edam Volendam">
                </a>
                <a href="http://www.euroart.eu/" target="_blank">
                    <img src="images/euroart-logo.png" alt="Euroart">
                </a>
            </div>

            <div class="col-25">
                <h2>Contact</h2>

                <ul>
                    <li><a href="http://maps.google.com/?q=52.50085,5.05433" target="_blank">W van der Knoopdreef 1<br> 1132 KN Volendam</a></li>
                    <li><a href="mailto:info@vanklomptotkunst.nl">info@vanklomptotkunst.nl</a></li>
                    <li><a href="tel:0203455988">020-3455998</a></li>
                </ul>
            </div>

        </div>
    </footer>

    <div class="bar">
        Copyright &copy; Gemeente Edam-Volendam 2015. Alle rechten voorbehouden
    </div>
    <!-- End Footer -->

		<!-- disable logging -->
		<script type="text/javascript">
			if(!window.console) window.console = {}; var methods = ["log", "debug", "warn", "info"]; for(var i=0;i<methods.length;i++){ console[methods[i]] = function(){};}
    	</script>

        <!-- JS -->
        <script src="js/libs/jquery.js"></script>
        <script src="js/libs/classie.js"></script>
        <script src="js/plugins/animateCSS.js"></script>
        <script src="js/plugins/jquery.tooltipster.min.js"></script>
        <script src="js/main.js"></script>



        <script>
               $(document).ready(function() {
                   $('.tooltip').tooltipster({
                      position: 'right'
                   });
               });
           </script>

    </body>
</html>
<?php }} ?>
