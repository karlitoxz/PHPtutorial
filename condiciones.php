<?php
#condiciones

	$a = 5;
	$b = 10;

	if ($a > $b) {
		echo "$a es mayor que $b";
	}else{
		echo "$b es mayor que $a";
	}

#switch
	echo "<br>";
	$dia = "sabado";

	switch ($dia) {
		case 'lunes':
				echo "es lunes";
			break;
		case 'martes':
				echo "Es martes";
			break;
		
		default:
				echo "es sabado";
			break;
	}

#while
	$n = 1;
	echo "<br>";
	while ($n <= 10) {
		echo "$n";
		$n++;
	}

#doWhile
	$d = 1;
	echo "<br>";

	do {
		echo "$d";
		$d++;
	} while ($d <= 10);

#for
	echo "<br>";
	for ($i=1; $i <= 10; $i++) { 
		echo "$i";
	}



?>