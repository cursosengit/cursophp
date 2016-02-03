<?php

/*

La Estructura necesaria para la transfrencia de datos mediante GET en la URL 
es la siguiente:

	- Para comenzar a pasar datos por GET en la URL se usa el signo ?
	
	- Los datos por GET se estructuran en pares de valores: NOMBRE DE LA POSICIÓN 
	seguido del signo = y a continuación el VALOR almacenado en dicha posición.
	
		www.prueba.com?nombre=Rodolfo
		
	- Si hay más de un valor por GET, usaremos el signo & para separar cada nuevo 
	dato.
	
		www.prueba.com?nombre=Rodolfo&edad=34&sexo=masculino
	
Los datos por GET pueden provenir de dos sitios, ambos constructores de nuevas URL:

	- Los ENLACES, <a>, a través de su atributo HREF.
	
		<a href="archivo.php?nombre=Mariola&apellidos=Garcia">ENVIAR DATOS</a>
		
	- Los FORMULARIOS a través de sus campos o de su action.
	
*** Un formulario que tenga el atributo METHOD establecido en GET NO PUEDE ENVIAR 
DATOS POR GET DESDE SU ACTION, sólo desde sus campos ***

Para comprobar cómo funciona GET escribir al final de la URL de este documento 
las siguientes expresiones y mirad el $_GET impreso:

	?nombre=Alejandro
	?nombre=Alejandro&edad=26
	?edad=30

*/



echo "<pre>";
print_r($_GET);
echo "</pre>";


?>