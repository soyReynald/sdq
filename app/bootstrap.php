<?php

if(!isset($_SESSION)){
	session_start();
}

$temas = array();
$practicas = array();

if(isset($_GET['url'])){

	$url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));

	$urlParts = explode('-', $url[0]);

	$idFolder = (int) $urlParts[0];
	$jsonFile = $url[0];

	if(file_exists('app/config/practicas/' . $urlParts[1] . '.json')){

		$practicas = json_decode(file_get_contents('app/config/practicas/' . $urlParts[1] . '.json'));

		$subfolder = isset($url[1]) ? $url[1] : '';

	} else {

		if(file_exists('app/config/temas.json')){

			$temas = json_decode(file_get_contents('app/config/temas.json'));
			$_SESSION['temas'] = $temas;

		} else {

			exit('No existe el archivo: "temas.json" en la carpeta de config!');

		}

	}

} else {

	if(file_exists('app/config/temas.json')){

		$temas = json_decode(file_get_contents('app/config/temas.json'));
		$_SESSION['temas'] = $temas;

	} else {

		exit('No existe el archivo: "temas.json" en la carpeta de config!');

	}

}

?>