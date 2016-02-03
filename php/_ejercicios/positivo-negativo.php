<?php

//Recibimos un número: comprobar si es positivo, negativo o cero

$n = 23;

if ($n == 0) {
	
	echo "<p>El número " . $n . " es CERO</p>";
	
} else {
	
	if ($n > 0) {
		
		echo "<p>El número " . $n . " es POSITIVO</p>";
		
	} else {
		
		echo "<p>El número " . $n . " es NEGATIVO</p>";
		
	}
	
}

?>