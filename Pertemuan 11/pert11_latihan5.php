<?php 

$con = mysqli_connect("localhost","root",""); //
mysqli_select_db($con, "lat_dbase");

$hasil=mysqli_query($con, "select * from tbl_mhs"); 
 	While($data=mysqli_fetch_row($hasil)) 
 	{ 
 	echo "$data[0] $data[1] $data[2]<br>"; 
 	}

echo "<br><br>Nama : Aji Dwiyatna";
echo "<br>NIM &ensp;: 171011401048"; 
?>