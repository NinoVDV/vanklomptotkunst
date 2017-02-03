<?php

if(isset($_SESSION['user_id']))
{
  $_SESSION['phpro_user_id'] = $user_id;
  /*** tell the user we are logged in ***/
  header('Location: ../?action=dashboard');
  die();
}


/*** if we do have a result, all is well ***/
?>
