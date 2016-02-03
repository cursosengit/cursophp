<?php

// Evaluar el impacto de un terremoto según la escala richter.

$n = 34;

if ($n >0 && $n <= 10) {

	if ($n > 0 && $n <= 5) {
		
		echo "<p>El terremoto, de " . $n . " grados en la escala Richter, ha sido muy suave</p>";
		
	} else {
		
		if ($n > 5 && $n <= 7.5) {
			
			echo "<p>El terremoto, de " . $n . " grados en la escala Richter, ha sido de grado medio</p>";
			
		} else {
			
			echo "<p>El terremoto, de " . $n . " grados en la escala Richter, ha sido muy grave</p>";
			
		}
		
	}
	
} else {
	
	echo "<p>No es posible un terremoto de la magnitud indicada. Revisa el cacharro.</p>";
	
}

?>