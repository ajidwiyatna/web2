<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "artikel_db";

$connect = mysqli_connect($server, $user, $pass, $database);
if ($connect) {
 }else{
 	echo "Koneksi Database Gagal!";
 }
?>