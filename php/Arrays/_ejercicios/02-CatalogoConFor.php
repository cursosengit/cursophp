<?php

$productos = array("Producto #1", "Producto #2", "Producto #3", "Producto #4");
$refs = array("X0001", "X0002", "X0003", "X0004");
$precios = array(12.34, 23.45, 34.56, 45.67);

/*
Como los 3 arrays tienen la misma longitud, la calculamos sólo 
para uno
*/
$longitud = count($productos);

/*
Usamos esta longitud para ir recorriendo con un for una por una las 
posiciones de cada array
*/

for ($i = 0; $i < $longitud; $i++) {
	echo "<h3>" . $productos[$i] . "</h3>";
	echo "<p>REF: " . $refs[$i] . "</p>";
	echo "<p>PRECIO: " . $refs[$i] . " &euro;</p>";
	echo "<hr />";
}

?>