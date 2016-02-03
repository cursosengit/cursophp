<?php

/*

Controlamos que los datos obligatorios nos lleguen: en este caso todos los 
datos son obligatorios.

*/

echo "<pre>";
print_r($_GET);
echo "</pre>";

$nombre = $_GET["nombre"];
$color = $_GET["color"];
$privacidad = $_GET["privacidad"];

if ($privacidad == 1) {
	
	if ($nombre != "" && $color != "") {
		
		echo "<p style='color: #0f0;'>Hola, me llamo " . $nombre . " y mi color favorito es el " . $color . "</p>";
		
	} else {
		
		echo "<p>ERROR: Los campos marcados con * son obligatorios</p>";
		
	}
	
} else {
	
	echo "<p>ERROR: Debes aceptar la Política de Privacidad</p>";
	
}

?>