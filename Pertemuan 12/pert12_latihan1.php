<?php

$con = mysqli_connect("localhost","root","");  
if (!$con) 
 	{ 
 	die('Could not connect: ' . mysqli_error()); 
 	} 
mysqli_select_db($con, "lat_dbase");

mysqli_query($con, "UPDATE tbl_mhs SET Age = '36' 
WHERE FirstName = 'Karina' AND LastName = 'Suwandi'"); 
mysqli_close($con);

echo "<br><br>Nama : Aji Dwiyatna";
echo "<br>NIM &ensp;: 171011401048"; 
?>
