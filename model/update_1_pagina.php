<?php
$con = mysqli_connect('localhost','root','','klomp');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"klomp");

if (isset ($_POST['save_update'])){
    $naam = $_POST['naam_vp'];
    $adres = $_POST['adres_vp'];
    $postcode = $_POST['postcode_vp'];
    $plaats = $_POST['plaats_vp'];
    $telefoon = $_POST['telefoon_vp'];
    $email = $_POST['email_vp'];
    $website = $_POST['website_vp'];
    $informatie = $_POST['informatie_vp'];
    $afbeelding = $_POST['afbeelding_vp'];

$sql = "UPDATE verenigingpagina SET naam_vp='$naam', adres_vp='$adres', postcode_vp='$postcode', plaats_vp='$plaats'
  , telefoon_vp='$telefoon', email_vp='$email', website_vp='$website', informatie_vp='$informatie', afbeelding_vp='$afbeelding'
  WHERE id = '$id'";

}
$result = mysqli_query($con,$sql);
if($result===TRUE){
  $opgeslagen = 'true';
}

 ?>
