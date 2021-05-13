<?php

$sqlData = "CREATE DATABASE IF NOT EXISTS SDQ_practicas DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci";

$con->query($sqlData) or $errors[] = $con->error;

$con->select_db("SDQ_practicas");

$sqlTable = "START TRANSACTION;

CREATE TABLE IF NOT EXISTS usuarios (
  id int(11) NOT NULL AUTO_INCREMENT,
  nombre varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  apellido varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  correo varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO usuarios (id, nombre, apellido, correo) VALUES
(1, 'Raul', 'Mondesi', 'mondesi@gmail'),
(2, 'Bianca', 'Suero', 'bsuero@hotmail.com'),
(3, 'Victor', 'Lora', 'vlora@email.com'),
(4, 'Luisa', 'Castillo', 'luisacastillo@tmail.com');

COMMIT;";

$con->multi_query($sqlTable) or $errors[] = $con->error;

while(mysqli_more_results($con)){

	 mysqli_next_result($con);

}

?>