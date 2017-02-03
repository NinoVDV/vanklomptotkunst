<?php
session_start();
include 'includes/config.php';
require 'libs/Smarty.class.php';
include 'includes/bootstrap.php';
include 'includes/database.php';


$templateParser->display('views/head.tpl');
$templateParser->display('views/search-bar.tpl');

$action = isset($_GET['action'])?$_GET['action']:'home';
$location = isset($_GET['location'])?$_GET['location']:'';
$templateParser->assign('action', $action);
$templateParser->display('views/nav.tpl');

//$templateParser->display('views/tooltip.tpl');
switch($action){
  case 'home':
  if(!empty($_POST['subscribe'])){
    include ('model/insert_organisatie.php');
    $templateParser->assign('result', $result);
  }

  $page_nr = isset($_GET['pagenr'])?$_GET['pagenr']:1;
  $templateParser->display('main.tpl');
  break;

  case 'agenda':
    $templateParser->display('agenda.tpl');
    break;

  case 'contact':
    $templateParser->display('contact.tpl');
    break;

  case 'admin':
      include ('admin/login.php');
    break;

  case 'logout':
    include ('admin/logout.php');
    break;

  case 'locations':
    include ('model/select_locatie.php');
    $templateParser->assign('result', $result);
    include ('model/select_vereniging.php');
    $templateParser->assign('result2', $result2);
    $templateParser->display('locations.tpl');
    break;


  case 'dashboard':

    include('admin/check_login.php');
    if (empty($_SESSION['phpro_user_id'])){
      echo '<br>';
      echo '<br>';
      echo '<br>';
      echo '<h2>Geen toegang, niet ingelogd als admin!</h2>';
      echo '<br>';
      echo '<a href="http://19941.hosts.ma-cloud.nl/klomp/vanklomptotkunst/index.php?action=admin">Admin login</a>';
    }
    else {
      $templateParser->display('show_dashboard.tpl');
    }
    break;

  case 'maak_pagina':
    $templateParser->display('maak_pagina.tpl');
    if(!empty($_POST['subscribe'])){
    include ('model/maak_pagina.php');
    $templateParser->assign('result', $result);
  }
  break;

  case 'bewerk_pagina':
    include ('model/select_alles_pagina.php');
    $templateParser->assign('result', $result);
    break;

  case 'bewerk_1_pagina':
    $id = $_GET['id'];
    include ('model/update_1_pagina.php');
    include ('model/select_1_pagina.php');
    $templateParser->assign('result', $result);
    break;

  case 'verwijder_pagina':
    $id = isset($_GET['id'])?$_GET['id']: 0;
    include ('model/delete_pagina.php');
    include ('model/select_alles_verwijder.php');
    $templateParser->assign('result', $result);
    break;



  case 'vereniging_user':
    $templateParser->display('vereniging_login.tpl');
    break;
};


$templateParser->display('footer.tpl');
 ?>
