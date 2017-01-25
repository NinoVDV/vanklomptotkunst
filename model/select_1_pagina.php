<?php
$con = mysqli_connect('localhost','root','','klomp');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"klomp");
$sql = "SELECT * FROM verenigingpagina WHERE id = " .$id;
$result = mysqli_query($con,$sql);

while($row = $result->fetch_assoc()) {
echo '<br>';
echo '<br>';
echo '<br>';
echo '<h1>Bewerk de pagina</h1>';
 echo'<form action="" method="post"> </br>';
    echo' <input type="text" placeholder="Naam pagina" name="naam_vp" value="' . $row["naam_vp"] . '">';
    echo' <input type="text" placeholder="Adres" name="adres_vp" value="' . $row["adres_vp"] . '">';
    echo' <input type="text" placeholder="Postcode" name="postcode_vp" value="' . $row["postcode_vp"] . '">';
    echo' <input type="text" placeholder="Plaats" name="plaats_vp" value="' . $row["plaats_vp"] . '">';
    echo' <input type="text" placeholder="Telefoon" name="telefoon_vp" value="' . $row["telefoon_vp"] . '">';
    echo' <input type="text" placeholder="Email" name="email_vp" value="' . $row["email_vp"] . '">';
    echo '<br><br>';
    echo' <input type="text" placeholder="Website" name="website_vp" value="' . $row["website_vp"] . '">';
    echo' <input type="text" placeholder="Informatie" name="informatie_vp" value="' . $row["informatie_vp"] . '">';
    echo' <input type="text" placeholder="Link naar afbeelding" name="afbeelding_vp" value="' . $row["afbeelding_vp"] . '">';
    echo '<br><br>';
    echo' <input type="submit" name="save_update" value="Opslaan">';
    echo '<br>';
    echo' <a href="?action=bewerk_pagina">Terug</a> <br>' ;
echo'</form>';}

$result = mysqli_query($con,$sql);
if($opgeslagen =='true'){
  echo '<h3>Pagina is bewerkt!</h3>';

}
 ?>
