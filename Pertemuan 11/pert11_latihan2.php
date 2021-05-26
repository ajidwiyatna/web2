<?php

$con = mysqli_connect("localhost","root",""); 
$dbname="lat_dbase"; 
$cek=mysqli_query($con, "CREATE DATABASE $dbname") or die
	("Couldn't Create Database: $dbname"); 
if($cek){ 
 echo "Database $dbname berhasil dibuat"; 
}

echo "<br><br>Nama : Aji Dwiyatna";
echo "<br>NIM &ensp;: 171011401048"; 
?>