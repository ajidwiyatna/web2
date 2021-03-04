<html> 
<head><title>Variabel Static</title></head> 
<body><h1>Variabel Static</h1> 
<?php
function Test()
{
	Static $a=0; //dengan static
	Echo "Nilai A :";
	Echo $a;
	Echo "<br>";
	$a++;
}
Test();
Test();
Test();
Test();
Test();
?>
</body> 
</html> 