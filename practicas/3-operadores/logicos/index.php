<!DOCTYPE html>
<html>
<head>
	<title>Operadores lógicos</title>
</head>
<body>
	<?php

	$a = 0;
	$b = 0;
	$c = 0;

	$x = 0;
	$y = 0;
	$z = 0;

	#Condicion A
	if($a > $c && $y != $x){
		echo 'Condición A: verdadera' . "<br>";
	} else {
		echo 'Condición A: falsa'. "<br>";
	}

	#Condicion B
	if($b === $c && $c >= $y && !($c > $a)){
		echo 'Condición B: verdadera'. "<br>";
	} else {
		echo 'Condición B: falsa'. "<br>";
	}

	#Condicion C
	if($c == $b xor $y == $z){
		echo 'Condición C: verdadera'. "<br>";
	} else {
		echo 'Condición C: falsa'. "<br>";
	}

	#Condicion D
	if(!($x < $c) || $y != $z){
		echo 'Condición D: verdadera'. "<br>";
	} else {
		echo 'Condición D: falsa'. "<br>";
	}

	?>
</body>
</html>