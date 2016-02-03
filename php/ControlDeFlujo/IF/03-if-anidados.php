<?php

// Se puede anidar un IF dentro de otro tanto en la rama de verdadero como 
// en la de falso, si la hay.

$edad = 23;
$nombre = "José Manuel";

if ($edad >= 18) {
	
	if ($nombre != "") {
		
		echo "<p>Bienvenido <strong>" . $nombre . "</strong><p>";
		
	} else {
		
		echo "<p>El NOMBRE es obligatorio</p>";
		
	}
	
} else {
	
	echo "<p>Vuelve cuando tengas 18 años</p>";
	
}

?>