<?php

 $con = mysqli_connect('localhost','root','','klomp');
 if (!$con) {
     die('Could not connect: ' . mysqli_error($con));
 }

 mysqli_select_db($con,"klomp");

$naam = $_POST['naam_vp'];
$adres =$_POST['adres_vp'];
$postcode = $_POST['postcode_vp'];
$plaats = $_POST['plaats_vp'];
$telefoon = $_POST['telefoon_vp'];
$email = $_POST['email_vp'];
$website = $_POST['website_vp'];
$informatie = $_POST['informatie_vp'];

$sql= "INSERT into verenigingpagina (naam_vp, adres_vp, postcode_vp, plaats_vp,
telefoon_vp, email_vp, website_vp, informatie_vp) VALUES ('$naam','$adres','$postcode','$plaats','$telefoon'
  ,'$email','$website','$informatie')";



 $result = mysqli_query($con,$sql);


 mysqli_close($con);
 ?>
