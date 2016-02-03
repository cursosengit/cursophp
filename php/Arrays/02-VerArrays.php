<?php
/*
Para ver un array tenemos varias opciones en función de la cantidad 
de información que queramos recibir.
*/

$dias = array("Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo");
$numeros = array(21,-3,34.2,0,98765);
$mixto = array("Hola",43,true,-8,"Adiós");

echo $dias;

echo "<p>----------------------------------------</p>";

//IMPLODE() - Esta función une los elementos de un array y nos devuelve la cadena resultante.

echo implode($dias);

echo "<p>----------------------------------------</p>";

//PRINT_R - imprime información legible sobre una variable

print_r($dias);

echo "<p>----------------------------------------</p>";

//Para obtener una vista más legible nos apoyamos en la etiqueta <PRE> de HTML.

echo "<pre>";
print_r($dias);
echo "</pre>";

echo "<p>----------------------------------------</p>";

//VAR_DUMP - imprime información legible sobre una variable

echo "<pre>";
var_dump($dias);
echo "</pre>";

echo "<p>----------------------------------------</p>";

echo "<pre>";
var_dump($mixto);
echo "</pre>";

echo "<p>----------------------------------------</p>";

?>