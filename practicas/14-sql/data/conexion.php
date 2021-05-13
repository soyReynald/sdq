<?php

$mysqlConfig = json_decode(file_get_contents('../../../app/config/mysql.json'));

$server = $mysqlConfig->server;
$user = $mysqlConfig->user;
$password = $mysqlConfig->password;

$con = new mysqli($server, $user, $password);
$errors = [];

if ($con->connect_error) {

    $errors[] = "Connection failed: " . $con->connect_error;

}

?>