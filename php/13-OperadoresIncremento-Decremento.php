<?php

/*
OPERADORES INCREMENTO / DECREMENTO
----------------------------------

Aumentan o disminuyen el valor de un dato:

	++			Aumenta en 1 el valor de la variable
	
	--			Disminuye en 1 el valor de la variable
	
Una vez aplicado este operador ++ o -- la variable original queda modificada:

	$a = 3;
	echo $a; -----> Imprime 3
	$a++;
	echo $a; -----> Imprime 4
	
Lo que ha sucedido es equivalente a haber hecho la siguiente asignación:

	$a = 3;
	echo $a; -----> Imprime 3
	$a = $a + 1;
	echo $a; -----> Imprime 4

Podemos también usar el operador +=n para aumentar en n el valor de un dato 
o -=n para disminuirlo en n.

*/

$a = 3;
echo $a;
$a++;
echo $a;

echo "<p>------------------------------------</p>";

$b = 7;
echo $b;
$b+=3;
echo $b;

?>