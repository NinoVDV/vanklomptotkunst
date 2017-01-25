<?php
$con = mysqli_connect('localhost','root','','klomp');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"klomp");
$sql = "DELETE FROM verenigingpagina WHERE id = $id";
$result = mysqli_query($con,$sql);;
