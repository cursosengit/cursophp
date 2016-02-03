<?php

/*
VARIABLES
---------

Las VARIABLES son espacios de memoria en los que se guarda un valor concreto de 
un dato, ya sea de un dato en sí o del resultado de alguna operación usando este 
dato.

Las nombres de las variables en PHP siguen unas normas:

	- Empiezan siempre por el signo $ y a continuación el IDENTIFICADOR o nombre 
	de la variable.
	
	- Pueden contener cualquier tipo de caracter alfanumérico y caracteres de 
	subrayado (guión bajo _).
	
	- El primer caracter del identificador no puede ser un número.
	
Al asignar el identificador de la variable intentaremos que éste sea lo más 
descriptivo posible del tipo de dato que guarda:

	$edad;
	$nombre_padre
	$nombrePadreMadre
	$_apellidos
	
Podemos inicializar una variable en la memoria simplemente escribiendo una 
sentencia para crearla, aunque no le asignemos un valor:

	$nombre;
	
Para asignar un valor a una variable usamos el OPERADOR DE ASIGNACIÓN (=):
											   ----------------------

	$nombre = "Bartolomeo";
	
	$edad = 34;

Una vez establecido el valor de la variable, éste se mantiene siempre que no 
lo sobrescribamos.
Para sobrescribirlo simplemente asignamos un nuevo valor a la misma variable:

	$nombre = "Rodolfo";
	
En algunos casos nos interesa INICIALIZAR una variable, darle un dato inicial 
por defecto cuando se crea, con un tipo de dato concreto. Por ejemplo, si 
estamos seguros que el dato que va a recibir una variable es una cadena 
podemos inicializarla con una cadena vacía:

	$nombre = "";

*/

$nombre = "Cristobal";

echo $nombre;

echo "<br />";

$a = 2;
$b = 5;

$c = $a * $b;

echo $c;

?>