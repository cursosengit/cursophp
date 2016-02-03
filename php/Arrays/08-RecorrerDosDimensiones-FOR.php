<?php

$p1 = array("Nombre"=>"Producto #1","Referencia"=>"X0001","Precio"=>12.34);
$p2 = array("Nombre"=>"Producto #2","Referencia"=>"X0002","Precio"=>23.45);
$p3 = array("Nombre"=>"Producto #3","Referencia"=>"X0003","Precio"=>34.56);
$p4 = array("Nombre"=>"Producto #4","Referencia"=>"X0004","Precio"=>45.67);

$productos = array($p1,$p2,$p3,$p4);

echo "<pre>";
print_r($productos);
echo "</pre>";

$total = count($productos);

for ($i = 0; $i < $total; $i++) {
	
	echo "<h3>" . $productos[$i]["Nombre"] . "</h3>";
	echo "<p>REF: " . $productos[$i]["Referencia"] . "</p>";
	echo "<p>PRECIO: " . $productos[$i]["Precio"] . " &euro;</p>";
	echo "<hr />";
	
}

?>