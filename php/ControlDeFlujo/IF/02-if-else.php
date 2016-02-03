<?php

/*

IF
--

El operador IF se puede ampliar con una segunda rama que se ejecuta cuando 
no se cumpla la condición. Esta rama usa el operador ELSE de la siguiente 
forma:

	IF (CONDICIÓN) {	   -|
							|
		SENTENCIAS;			|	----> Rama de Verdadero (Obligatoria)
							|
	} ELSE {			   -|
							|
		SENTENCIAS;			|	----> Rama de Falso (Opcional)
							|
	}					   -|
	
Esto nos permite distinguir dos ramas de la estructura: una rama, que se 
denomina RAMA DE VERDADERO, que se ejecuta cuando se cumple la condición y 
otra RAMA DE FALSO, que se ejecuta cuando no se cumple.

*/

$edad = 13;

if ($edad >= 18) {
	echo "Bienvenido";
} else {
	echo "Vuelve cuando tengas 18 años";
}

?>