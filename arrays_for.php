<?php 
/* Ejercicio PHP recorrer array con for y mostrar contenido */

$productos = array("Producto #1", "Producto #2", "Producto #3", "Producto #4");
$refs = array("X0001", "X0002", "X0003", "X0004");
$precios = array(12.34, 23.45, 34.56, 45.67);

/* $listadoCompleto = array("$productos","$refs","$precios");*/

for ($i=0; $i < count($productos); $i++) { 
	echo "<h3>" . $productos[$i] . "</h3>";
	echo "<p>REF: " . $refs[$i] . "<p>";
	echo "<p>PRECIO: " . $precios[$i] . " &euro;<p>";
	echo "<hr />";
	echo $i;
}



/*
echo "<h3>" . $productos[0] . "</h3>";
echo "<p>REF: " . $refs[0] . "<p>";
echo "<p>PRECIO: " . $precios[0] . " &euro;<p>";

echo "<hr />";

echo "<h3>" . $productos[1] . "</h3>";
echo "<p>REF: " . $refs[1] . "<p>";
echo "<p>PRECIO: " . $precios[1] . " &euro;<p>";

echo "<hr />";

echo "<h3>" . $productos[2] . "</h3>";
echo "<p>REF: " . $refs[2] . "<p>";
echo "<p>PRECIO: " . $precios[2] . " &euro;<p>";

echo "<hr />";

echo "<h3>" . $productos[3] . "</h3>";
echo "<p>REF: " . $refs[3] . "<p>";
echo "<p>PRECIO: " . $precios[3] . " &euro;<p>";
*/

?>