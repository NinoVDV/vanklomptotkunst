<?php
$con = mysqli_connect('localhost','root','','klomp');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"klomp");
$sql = "SELECT * FROM verenigingpagina";

$result = mysqli_query($con,$sql);
echo '<br>';
echo '<br>';
echo '<br>';
echo '<h1>Paginas bewerken</h1>';
    while($row = $result->fetch_assoc()) {

        echo "<h4>Naam: " . $row["naam_vp"]. "</h4>";
        echo "<h4>Adres: " . $row["adres_vp"]. "</h4>";
        echo '</br>';
           echo'<a href="?action=bewerk_1_pagina&id=' . $row["id"] . '">edit</a>';
    }
echo '<br>';
echo '<br>';
echo '<a href="?action=dashboard">Terug naar dashboard</a>';

    mysqli_close($con);
