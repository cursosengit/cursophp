<?php

/*
OPERADORES DE COMPARACIÓN
-------------------------

Estos operadores nos permiten comparar dos datos entre ellos, devolviéndonos 
como resultado un dato de tipo boolean: true si la comparación es cierta o false 
si no lo es.

A cualquier expresión que devuelva true o false la solemos llamar CONDICIÓN.

Los operadores de comparación son:

	Menor						<
	Mayor						>
	Menor o igual				<=
	Mayor o igual				>=
	
	Igual						==
	Idéntico					===
	
	Distinto					!=
	No idéntico					!==

*/

$a = 20;
$b = 3;

echo $a > $b;

echo "<p>---------------------------------</p>";

echo $a < $b;

echo "<p>---------------------------------</p>";

echo $a >= $b;

echo "<p>---------------------------------</p>";

echo $a <= $b;

echo "<p>---------------------------------</p>";

$c = "20";

echo $a == $c;

echo "<p>---------------------------------</p>";

echo $a === $c;

echo "<p>---------------------------------</p>";

echo $a != $c;

echo "<p>---------------------------------</p>";

echo $a !== $c;

echo "<p>---------------------------------</p>";

?>