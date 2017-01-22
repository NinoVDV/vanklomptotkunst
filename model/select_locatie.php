<?php
$con = mysqli_connect('localhost','root','','klomp');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"klomp");

$sql = 'SELECT * from locatie WHERE naam_locatie = "' . $location . '"';

$result = mysqli_query($con,$sql);
mysqli_close($con);

 ?>
