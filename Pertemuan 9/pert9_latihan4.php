<html>
	<head>
		<title>Tanggal</title>
	</head>
	<body>
		<font size="10px">
			<?php

				// Set Time To Jakarta Time.

				date_default_timezone_set('Asia/Jakarta');
				echo "Sekarang Tanggal ";
				echo date('d-F-Y');
				echo "<br>dan jam ";
				echo date("h:i:s A");
			?>
		</font>
	</body>
</html>
