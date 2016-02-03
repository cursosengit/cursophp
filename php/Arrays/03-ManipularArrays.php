<?php

$dias = array("Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo");

// Obtener la LONGITUD del array: usamos la función COUNT():

echo "<pre>";
print_r($dias);
echo "</pre>";

$total = count($dias);
echo $total;

echo "<p>----------------------------------------</p>";

/*
Acceder a las posiciones del array:
----------------------------------

para ello usaremos el operador de acceso a posiciones del array [].

Una vez que hayamos accedido al valor guardado en una posición 
del array podremos usar este dato e incluso modificarlo si 
quisieramos.

Este acceso se hace mediante el operador [] y dentro de él 
escribiremos el índice de la posición a la que queremos acceder. 
Por ejemplo, siendo $a un array:

	$a[3];
*/

echo $dias[3];

echo "<p>----------------------------------------</p>";


//INSERTAR NUEVO ELEMENTO AL FINAL DE UN ARRAY

$dias[] = "Otro Lunes";

echo "<pre>";
print_r($dias);
echo "</pre>";

echo "<p>----------------------------------------</p>";

//INSERTAR EN UNA POSICIÓN DETERMINADA DE UN ARRAY

	//Si la posición está vacía o no existe no altera ningún dato ya 
	//existente
	
		$dias[53] = "No sé qué día es este";
		
		echo "<pre>";
		print_r($dias);
		echo "</pre>";

		echo "<p>----------------------------------------</p>";
		
	//Si la posición ya tiene un valor almacenado, este será sobrescrito 
	//con el nuevo
	
		$dias[3] = "JUERNES!!!";
		
		echo "<pre>";
		print_r($dias);
		echo "</pre>";

		echo "<p>----------------------------------------</p>";
		
//ELIMINAR POSICIÓN DE UN ARRAY: Usamos la función UNSET()

unset($dias[53]);

echo "<pre>";
print_r($dias);
echo "</pre>";

echo "<p>----------------------------------------</p>";

//Las posiciones borradas del array no se vuelven a usar 
//salvo que lo forcemos a ello.

$dias[] = "Ueeeeeeeeeee";

echo "<pre>";
print_r($dias);
echo "</pre>";

?>