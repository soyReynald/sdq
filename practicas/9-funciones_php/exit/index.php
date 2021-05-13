<?php

$frutas = array("Naranja", "Limon", "Mango", "Fresa", "Banana", "Cereza", "Manzana");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Funciones exit y die</title>
</head>
<body>
	<?php
	foreach($frutas as $fruta){
		echo $fruta . '<br>';
	}
	?>
</body>
</html>