<?php

 $con = mysqli_connect('localhost','root','','klomp');
 if (!$con) {
     die('Could not connect: ' . mysqli_error($con));
 }

 mysqli_select_db($con,"klomp");

$voornaam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];
$email_vereniging= $_POST['e-mail'];
$naam_vereniging = $_POST['naam-organisatie'];
$website_vereniging = $_POST['website'];
$plaats_vereniging = $_POST['plaats'];
$type_vereniging = $_POST['type'];
$telefoon_vereniging = $_POST['telefoon'];
$wachtwoord = $_POST['wachtwoord'];
$thumbnail = $_POST['thumbnail'];

$sql= "INSERT into vereniging (voornaam, achternaam, email_vereniging, naam_vereniging,
website_vereniging, plaats_vereniging, type_vereniging, telefoon_vereniging, wachtwoord, thumbnail) VALUES ('$voornaam','$achternaam','$email_vereniging','$naam_vereniging','$website_vereniging','$plaats_vereniging','$type_vereniging','$telefoon_vereniging', '$wachtwoord', '$thumbnail')";

if ($_POST['wachtwoord']!= $_POST['wachtwoord2'])
 {
     echo("Oops! Password did not match! Try again. ");
 }

 $result = mysqli_query($con,$sql);

 mysqli_close($con);
 ?>
