<?php

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

  case 'locations':
    include ('model/select_locatie.php');
    $templateParser->assign('result', $result);
    include ('model/select_vereniging.php');
    $templateParser->assign('result2', $result2);

    $templateParser->display('locations.tpl');
    break;

  case 'dashboard':
      $templateParser->display('show_dashboard.tpl');
      break;

  case 'maak_pagina':
  if(!empty($_POST['subscribe'])){
    include ('model/maak_pagina.php');
    $templateParser->assign('result', $result);
  }

    $templateParser->display('maak_pagina.tpl');

};


$templateParser->display('footer.tpl');
 ?>
