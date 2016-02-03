<?php

//Calcular si un año es o no bisiesto

$anho = 1700;

if (($anho % 4 == 0 && $anho % 100 != 0) || ($anho % 400 == 0 && $anho % 100 == 0)) {
	
	echo "<p>El año " . $anho . " es BISIESTO</p>";
	
} else {
	
	echo "<p>El año " . $anho . " NO es BISIESTO</p>";
	
}

?>