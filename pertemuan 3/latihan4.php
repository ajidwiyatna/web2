<html>
<head>
	<title>PenggunaanSwitch - Case</title>
</head>
<body>
	Hari ini : 
		<?Php 
 		$nama_hari = date("l"); 
 		Switch ($nama_hari) 
 		{ 
 			Case "Sunday" ; 
 			Print("Minggu"); 
 			print "Waktu untuk istirahat"; 
 				Break; 
 			Case "Monday" ; 
 			Print("Senin <br>"); 
 			print "Meeting awal minggu jam 08.00"; 
 				Break; 
 			Case "Tuesday" ;  Print("Selasa <br>"); 
 			print "Pembukaan Workshop Diklat"; 
 				Break; 
 			Case "Wednesday" ; 
 			Print("Rabu <br>"); 
 			print ("Seminar Launchig Window Vista di JHCC"); 
 				Break; 
 			Case "Thrusday" ; 
 			Print("Kamis <br>"); 
 			print "Pertemuan dengan Mahasiswa"; 
 				Break; 
			Case "Friday" ; 
		 	Print("Jum’at <br>"); 
 			print "Jogging bersama"; 
 				Break; 
 			Default : 
 			Print("Sabtu <br>"); 
 			print "Survey harga ke Dusit, Mangga Dua"; 
 		}

 	echo"<br><br>Nama : Aji Dwiyatna";
	echo"<br>NIM &ensp;: 171011401048";  
	?>
</body>
</html>