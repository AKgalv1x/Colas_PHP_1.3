<?php
	$hetalia = array();
	
	array_push($hetalia, "Italia");
	array_push($hetalia, "Alemania");
	array_push($hetalia, "Japon");
	array_push($hetalia, "Estados Unidos");
	array_push($hetalia, "Inglaterra");
	array_push($hetalia, "Francia");
	array_push($hetalia, "China");
	array_push($hetalia, "Rusia");
	
	$elemento = array_shift(array: $hetalia);
	
	echo "El primer elemento que llegó a la cola fue " .$elemento
?>