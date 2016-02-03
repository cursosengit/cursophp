<?php

/*

Recibimos los datos del formulario y la estructura GET se construye 
sola en la URL cuando se envía el formulario, con el Method establecido 
en GET:

	- El signo ? se inserta automáticamente al enviar, al igual que los 
	signos & cuando sean necesarios.
	
	- Cada par de valores que forman un dato GET se establecen:
	
		name_del_campo=value_del_campo
		
***
En un formulario con GET no podemos escribir datos GET en el action 
del formulario: los datos GET en el action de un formulario GET serán 
ignorados.
***

*/



echo "<pre>";
print_r($_GET);
echo "</pre>";

?>