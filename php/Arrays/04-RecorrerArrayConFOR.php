<?php

$dias = array("Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo");

/*
Aprovechando cómo funciona el operador FOR, podemos usarlo para obtener las 
posiciones del array y acceder una por una a ellas.
*/

echo $dias[0];
echo "<br />";
echo $dias[1];
echo "<br />";
echo $dias[2];
echo "<br />";
echo $dias[3];
echo "<br />";
echo $dias[4];
echo "<br />";
echo $dias[5];
echo "<br />";
echo $dias[6];

echo "<hr />";

$longitud = count($dias);

for ($i = 0; $i <= $longitud - 1; $i++) {
	
	echo $dias[$i];
	echo "<br />";
	
}

?>