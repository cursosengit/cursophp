<?php

/*
OPERADORES LÓGICOS
------------------

Son los siguientes:

	AND				&&
	
	OR				||
	
	NO				!

El operador && obliga a que se cumplan dos condiciones al 
mismo tiempo. Si es to no ocurre devuelve false.

El operador || evalúa dos condiciones: si se cumple cualquiera 
de las dos devuelve true. Si no false.

El operador ! niega una expresión y, generalmente, se obtiene 
la contraria.

*/

$a = 32;

if ($a > 0 && $a < 100) {
	
	echo "<p>El número " . $a . " tiene dos cifras</p>";
	
} else {
	
	echo "<p>El número " . $a . " tiene más de dos cifras</p>";
	
}

?>