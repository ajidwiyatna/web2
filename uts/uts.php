<!DOCTYPE html>
<htm lang="en">

<head>
	<meta charset="UTF=8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport"content="width-device-witdh, initial-scale-1.0">
	<title>UTS Pemrograman Web 2</title>
</head>
<body>
	<h1>Input :</h1>
	<form method="post">
		<table>
			<tr>
				<td>Nama Wilayah</td>
				<td>:</td>
				<td><select name="wilayah">
					   <option value="DKI Jakarta">DKI Jakarta</option>
					   <option value="Jawa Barat">Jawa Barat</option>
					   <option value="Banten">Banten</option>
					   <option value="Jawa Tengah">Jawa Tengah</option>
					</select></td>		
			</tr>
			<tr>
				<td>Jumlah Positif</td>
				<td>:</td>
				<td><input type="text" name ="jml_positif"> </td>
			</tr>
			<tr>
				<td>Jumlah Dirawat</td>
				<td>:</td>
				<td><input type="text" name = "jml_dirawat"> </td>
			</tr>
			<tr>
				<td>Jumlah Sembuh</td>
				<td>:</td>
				<td> <input type ="text" name = "jml_sembuh"></td>
			</tr>
			<tr>
				<td>Jumlah Meninggal</td>
				<td>:</td>
				<td> <input type ="text" name = "jml_meninggal"></td>
			</tr>
			<tr>
				<td>Nama Operator</td>
				<td>:</td>
				<td> <input type ="text" name = "nama"></td>
			</tr>
			<tr>
				<td>NIM Mahasiswa</td>
				<td>:</td>
				<td> <input type ="text" name = "nim"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name = "Proses" value = "Proses"><input type="reset" name = "reset" value = "Reset"></td>
			</tr>
		</table>
	</form>
	<h1>Output :</h1>
	<center>
		<?php
				date_default_timezone_set('Asia/Jakarta');
				$sekarang = getdate();
				$bulan = $sekarang['month'];
				$hari = $sekarang['mday'];
				$tahun = $sekarang['year'];
				$jam = $sekarang['hours'];
			?>

			<h3> Data Pemantauan Covid19 Wilayah DKI Jakarta</h3>
			<h3>Per <?php echo "$hari $bulan $tahun";?> <?php echo date("h:i:s A");?></h3>
			<h3>Aji Dwiyatna / 171011401048</h3>


		<?php 
		error_reporting(0);
		session_start();
		if (isset($_POST["Proses"])) {
			if (count($_SESSION['pasien'])) {
				$data = ["wilayah" => $_POST["wilayah"], "jml_positif" => $_POST["jml_positif"], "jml_dirawat" => $_POST["jml_dirawat"], "jml_sembuh" => $_POST["jml_sembuh"], "jml_meninggal" => $_POST["jml_meninggal"]];
				$_SESSION['pasien'][] = $data;
			} else {
				session_unset($_SESSION['pasien']);
				session_destroy();
				header ("location :uts.php");
			}
		}
		?>

			 <?php 
			 echo "<table border='1' cellpadding = '10'
			 style = 'border-collapse:collapse'>
			 <tr>
			 	<th>Jumlah Positif</th>
			 	<th>Jumlah Dirawat</th>
			 	<th>Jumlah Sembuh</th>
			 	<th>Jumlah Meninggal</th>
			 </tr>";
			

			 foreach ($_SESSION['pasien'] as $i) {
			 	echo "
			 	<tr>
			 	<td>".$i['jml_positif']."</td>
			 	<td>".$i['jml_dirawat']."</td>
			 	<td>".$i['jml_sembuh']."</td>
			 	<td>".$i['jml_meninggal']."</td>
			 	</tr>";
			 }
			 echo "</table";
			  ?>
	</center>
</body>
</html>

<?php				
				extract($_REQUEST);
				$file = fopen("data.txt", "a");

				fwrite($file,"Nama Wilayah :");
				fwrite($file, $wilayah ."\n");

				fwrite($file,"Jumlah Positif :");
				fwrite($file, $jml_positif ."\n");

				fwrite($file,"Jumlah Dirawat :");
				fwrite($file, $jml_dirawat ."\n");

				fwrite($file,"Jumlah Sembuh :");
				fwrite($file, $jml_sembuh ."\n");

				fwrite($file,"Jumlah Meninggal :");
				fwrite($file, $jml_meninggal ."\n");

				fwrite($file,"Nama Operator :");
				fwrite($file, $nama ."\n");

				fwrite($file,"NIM Mahasiswa :");
				fwrite($file, $nim ."\n");
				fwrite($file,"\n");

				fclose($file); 
?>