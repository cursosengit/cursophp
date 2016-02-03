<?php

/*

El array asociativo $_GET sirve para la transferencia HTTP de datos 
y nos permite intercambiar información a través de la URL del navegador.

En el array $_GET se guardan los datos intercambiados por el método GET. 
Este array es una VARIABLE SUPERGLOBAL de PHP: no hace falta que nosotros 
lo definamos o lo creemos; existe por defecto en cualquier lugar de 
nuestros procesos.

Esto no significa que los datos siempre estén disponibles. Cada URL 
ofrecerá o no datos a GET y serán estos los que se almacenen en cada caso.

*/

echo "<pre>";
print_r($_GET);
echo "</pre>";

/*
Vemos como $_GET se imprime como un array y que PHP no necesita que la 
definamos ya que la reconoce como propia y la establece como un array.

En este caso está vacía. En el siguiente documento veremos cómo le llegan 
datos y cómo los guarda.
*/

?>