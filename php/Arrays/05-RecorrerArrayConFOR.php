<?php

$dias = array("Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo");

/*
Podemos simplificar este for: como usamos números enteros la condición se 
puede simplificar:

	$i <= $longitud - 1
	
Es lo mismo que:

	$i < $longitud;


*/

$longitud = count($dias);

for ($i = 0; $i <= $longitud - 1; $i++) {
	
	echo $dias[$i];
	echo "<br />";
	
}

echo "<hr />";

for ($i = 0; $i < $longitud; $i++) {
	
	echo $dias[$i];
	echo "<br />";
	
}

?>