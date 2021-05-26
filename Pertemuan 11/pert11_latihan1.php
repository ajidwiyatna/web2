<?php 
// hostname or ip of server 
$servername='localhost'; 
// username and password 
$dbusername='root'; 
$dbpassword=''; 
$link=mysqli_connect ("$servername","$dbusername","$dbpassword") 
or die ( " Not able to connect to server "); 
if ($link) 
{ 
 echo "ok....koneksi berhasil"; 
}

echo "<br><br>Nama : Aji Dwiyatna";
echo "<br>NIM &ensp;: 171011401048"; 
?> 