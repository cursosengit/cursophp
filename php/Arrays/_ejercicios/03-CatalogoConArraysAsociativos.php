<?php

$p1 = array("Nombre"=>"Producto #1","Referencia"=>"X0001","Precio"=>12.34);
$p2 = array("Nombre"=>"Producto #2","Referencia"=>"X0002","Precio"=>23.45);
$p3 = array("Nombre"=>"Producto #3","Referencia"=>"X0003","Precio"=>34.56);
$p4 = array("Nombre"=>"Producto #4","Referencia"=>"X0004","Precio"=>45.67);

//Los imprimimos a mano

echo "<h3>" . $p1["Nombre"] . "</h3>";
echo "<p>REF: " . $p1["Referencia"] . "</p>";
echo "<p>PRECIO: " . $p1["Precio"] . " &euro;</p>";

echo "<hr />";

echo "<h3>" . $p2["Nombre"] . "</h3>";
echo "<p>REF: " . $p2["Referencia"] . "</p>";
echo "<p>PRECIO: " . $p2["Precio"] . " &euro;</p>";

echo "<hr />";

echo "<h3>" . $p3["Nombre"] . "</h3>";
echo "<p>REF: " . $p3["Referencia"] . "</p>";
echo "<p>PRECIO: " . $p3["Precio"] . " &euro;</p>";

echo "<hr />";

echo "<h3>" . $p4["Nombre"] . "</h3>";
echo "<p>REF: " . $p4["Referencia"] . "</p>";
echo "<p>PRECIO: " . $p4["Precio"] . " &euro;</p>";

echo "<hr />";


?>