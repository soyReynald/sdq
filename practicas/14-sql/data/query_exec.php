<?php

if(isset($_POST['sql']) && trim($_POST['sql']) != ''){

	//$query = str_replace('"', "'", $query);
	$rsLista = $con->query($_POST['sql']) or $errors[] = $con->error;

}

if(!isset($rsLista->num_rows)){

	$tableSQL = "SELECT * FROM $tabla";
	$rsLista = $con->query($tableSQL) or $errors[] = $con->error;

}

$table = [];

while($fila = $rsLista->fetch_object()){

	$table[] = $fila;

}

?>