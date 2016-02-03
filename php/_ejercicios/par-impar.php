<?php

//Recibimos un número: comprobar si es par, impar o cero

$n = 23;

if ($n == 0) {
	
	echo "<p>El número " . $n . " es CERO</p>";
	
} else {
	
	if ($n % 2 == 0) {
		
		echo "<p>El número " . $n . " es PAR</p>";
		
	} else {
		
		echo "<p>El número " . $n . " es IMPAR</p>";
		
	}
	
}

?>