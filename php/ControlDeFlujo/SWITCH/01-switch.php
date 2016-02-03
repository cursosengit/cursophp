<?php

/*

SWITCH
------

El operador de control de flujo SWITCH evalúa diferentes valores posibles 
de una misma variable y ejecuta unas sentencias u otras en función de este 
valor:

	- El operador switch recibe un valor y lo va comparando uno por uno con 
	los casos definidos en su estructura mediante la palabra clave CASE, que 
	nos permite definir uno por uno los posibles valores que queremos comparar 
	con el valor que recibe switch.
	
	- Cuando el valor recibido coincide con alguno de los casos se devuelve true 
	y se ejecutan las sentencias asociadas a dicho caso y hacemos que acabe la 
	ejecución del switch mediante la palabra clave BREAK, que permite terminar 
	un proceso dentro del programa.
	
	- Si el valor recibido no coincid con ninguno de nuestros casos se ejecutan 
	las sentencias del caso DEFAULT: este caso no es obligatorio pero sí muy 
	conveniente en la mayoría de los casos para poder controlar todas las 
	posibilidades que no hayamos contemplado en nuestros casos concretos.
	

La estructura es como sigue:

	SWITCH ($dato) {
		
		case "Valor1":
		sentencias_1;
		break;
		
		case "Valor2":
		sentencias_2;
		break;
		
		...
		
		default:
		sentencias_default;
		break;
		
	}

Vemos como el comportamiento del switch viene a ser como muchos if que se van 
anidando unos dentro de otros en cada rama else.

*/

$dia = "martes";

switch ($dia) {
	
	case "lunes":
	echo "Hoy es lunes";
	break;
	
	case "martes":
	echo "Hoy es martes";
	break;
	
	case "miércoles":
	echo "Hoy es miércoles";
	break;
	
	case "jueves":
	echo "Hoy es jueves";
	break;
	
	case "viernes":
	echo "Hoy es viernes";
	break;
	
	case "sábado":
	echo "Hoy es sábado";
	break;
	
	case "domingo":
	echo "Hoy es domingo";
	break;
	
	default:
	echo "Introduce un día correcto";
	break;
	
}

































?>