<?php

$con = mysqli_connect("localhost","root","");
mysqli_select_db($con, "lat_dbase");

$hasil = mysqli_query($con, "select * from tbl_mhs");
$hit = mysqli_num_rows($hasil); 
echo "jumlah record $hit";

echo "<br><br>Nama : Aji Dwiyatna";
echo "<br>NIM &ensp;: 171011401048"; 
?> 