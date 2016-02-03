<?php

/*
OPERADORES ARITMÉTICOS
----------------------

Como su propio nombre indica, estos operadores sirven para realizar operaciones 
aritméticas con números.

Los operadores aritméticos son:

	SUMA			+
	RESTA			-
	PRODUCTO		*
	COCIENTE		/
	MÓDULO			%

Debido a que PHP no necesita declarar el tipo de los datos, al usar los 
operadores aritméticos intenta convertir siempre el dato a número mediante las 
funciones nativas que posee para ello; si lo consigue usa ese número, si no 
evalúa com falso y asigna un CERO.

*/

echo 2 + 3;

echo "<br />";

echo 21.34 + 3;

echo "<br />";

echo 34 - 14;

echo "<br />";

echo 4 * 6;

echo "<br />";

echo -2 * 3;

echo "<br />";

echo 8 / 2;

echo "<br />";

echo 8 / 3;

echo "<br />";

echo 0 / 5;

echo "<br />";

echo 5 / 0;

/*
Vemos como al intentar dividir entre cero se genera un error que nos advierte 
de ello. Este error es de tipo WARNING, lo que significa que nuestro programa 
puede continuar a pesar de la advertencia de error.
*/

echo "<br />";

echo 5 % 2;

echo "<br />";

echo 4 % 2;

echo "<br />";

echo 8 % 3;

//Vamos a ver cómo se comporta PHP cuando le pasamos cadenas a los operadores 
//aritméticos

echo "<br />";

echo "3" * 3;

echo "<br />";

echo "3" * "3";

echo "<br />";

echo 2 + "hola";

echo "<br />";

echo 3 * "hola";

//Para agrupar operaciones de cualquier tipo podemos usar los PARÉNTESIS:

echo "<br />";

echo 2 + 3 * 4;

echo "<br />";

echo (2 + 3) * 4;

?>