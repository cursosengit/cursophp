<?php

/*

Esto que vamos a hacer es valido también para el ejemplo de los enlaces 
ya que vamos a capturar los datos GET y a usarlos; nos da igual de dónde 
vengan o cómo vengan esos datos.

*/

echo "<pre>";
print_r($_GET);
echo "</pre>";

$nombre = $_GET["nombre"];
$color = $_GET["color"];
$privacidad = $_GET["privacidad"];

echo "<p>Hola, me llamo " . $nombre . " y mi color favorito es el " . $color . "</p>";

?>