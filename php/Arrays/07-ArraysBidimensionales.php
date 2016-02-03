<?php

/*

Los Array Bidimensionales o Matrices se construyen generalmente usando un array 
numérico principal (recorrible con un for) que en cada una de sus posiciones 
contiene un array asociativo.

Para acceder a las posiciones de un array de dos dimensiones simplemente usaremos 
dos veces el operador de acceso a las posiciones del array:

	$a[indice_primer_array][indice_segundo_array]

*/

$p1 = array("Nombre"=>"Producto #1","Referencia"=>"X0001","Precio"=>12.34);
$p2 = array("Nombre"=>"Producto #2","Referencia"=>"X0002","Precio"=>23.45);
$p3 = array("Nombre"=>"Producto #3","Referencia"=>"X0003","Precio"=>34.56);
$p4 = array("Nombre"=>"Producto #4","Referencia"=>"X0004","Precio"=>45.67);

$productos = array($p1,$p2,$p3,$p4);

echo "<pre>";
print_r($productos);
echo "</pre>";

echo $productos[1]["Referencia"];

?>