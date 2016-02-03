<?php

/*

FOR
---

El operador FOR nos permite crear bucles, repetir acciones, mientras se cumpla 
una determinada condición.

La estructura de control de flujo FOR es:

	FOR (INICIO; CONDICIÓN; PASO) {
		
		SENTENCIAS;
		
	}
	
Veamos cómo trabaja:

	- Recibe un dato de INICIO: si cumple la condición se ejecutan las 
	sentencias, si no termina la ejecución del for sin ni siquiera haber 
	ejecutado las sentencias una sola vez.
	
	- Si la condición se cumple y se ejecutan las sentencias, el dato de 
	inicio sufre una modificación y se establece como nuevo valor del dato 
	de inicio. Esta modificación se denomina PASO.
	
	- Una vez aplicado el PASO el dato vuelve a ser evaluado en la CONDICIÓN: 
	si devuelve true se ejecutan las sentencias y se repite el proceso una y 
	otra vez hasta que el dato no cumpla la condición, momento en el que acaba 
	la ejecución del for.

*/

for ($i = 0; $i <= 10; $i++) {
	
	echo $i;
	echo "<br />";
	
}

?>