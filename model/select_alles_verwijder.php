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
echo '<h2>Verwijder paginas</h2>';
    while($row = $result->fetch_assoc()) {

        echo "<h4>Naam: " . $row["naam_vp"]. "</h4>";
        echo "<h4>Adres: " . $row["adres_vp"]. "</h4>";
        echo '</br>';
           echo'<a href="?action=verwijder_pagina&id=' . $row["id"] . '">delete</a>';
    }
echo '<br>';
echo '<br>';
echo '<a href="?action=dashboard">Terug naar dashboard</a>';

    mysqli_close($con);
