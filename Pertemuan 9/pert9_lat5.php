<html>
	<head>
		<title>GetDate</title>
	</head>
	<body>
		<center>
			<font color="navy">
			<h1>
				<?php
					date_default_timezone_set('Asia/Jakarta');
					$sekarang = getdate();
					$bulan = $sekarang['month'];
					$hari = $sekarang['mday'];
					$tahun = $sekarang['year'];
					$jam = $sekarang['hours'];
					if($jam <= 11)
					{
						echo "Selamat Pagi";
					}
					else if($jam > 11 and $jam <= 15)
					{
						echo "Selamat Siang";
					}
					else if($jam > 15 and $jam <=18)
					{
						echo "Selamat Sore";
					}
					else if($jam > 18)
					{
						echo "Selamat Malam";
					}
					?>
			</h1>
			<h2> Selamat Datang </h2>
			<h3> Sekarang Adalah Tanggal : <?php echo "$hari $bulan $tahun";?></h3>
			<h3> Keterangan Waktu Terkini : <?php echo date("h:i:s A"); ?> </h3>
		</font>
		</center>
	</body>
</html>