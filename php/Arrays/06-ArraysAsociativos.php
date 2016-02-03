<?php

/*

Hasta ahora hemos visto los arrays por defecto de PHP, en los que los 
índices de la posiciones son números y de ahí el nombre de arrays 
numéricos.

Vamos a ver ahora un tipo de array en el que las posiciones son CADENAS 
de texto. Este tipo de array se denomina ARRAY ASOCIATIVO ya que asocia 
el nombre de la posición con la naturales del valor que guarda.

Las cadenas de texto que sirven como índices de las posiciones las debemos 
definir nosotros:

	$producto1 = array(["Nombre"]=>"Producto #1",["Referencia"]=>"X0001",["Precio"]=>12.34);

Otra forma, más normal, de añadir posiciones a un array asociativo es 
usando el operador de acceso a posiciones del array para crear nuevas 
posiciones en posiciones concretas:
	
	$p = array();
	$p["posicion"] = "Valor Insertado";
	
Para acceder a las posiciones usaremos el operador de acceso [] con el 
nombre de la posición.

	echo $producto1["Precio"];

*/

$producto1 = array("Nombre"=>"Producto #1","Referencia"=>"X0001","Precio"=>12.34);

echo "<pre>";
print_r($producto1);
echo "</pre>";

$producto2 = array();

$producto2["Nombre"] = "Producto #2";
$producto2["Referencia"] = "X0002";
$producto2["Precio"] = 23.45;

echo "<pre>";
print_r($producto2);
echo "</pre>";

//Accedemos a las posiciones con el operador de acceso y el nombre del índice

echo $producto1["Referencia"];





























?>