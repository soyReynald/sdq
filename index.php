<?php
$dir = strstr(dirname(__FILE__), "/") ? explode('/', dirname(__FILE__)) : explode("\\", dirname(__FILE__));
$basedir = "/" . end($dir) . '/';
require_once 'app/bootstrap.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Practicas</title>
	<style type="text/css" media="screen">
		@import url('<?php echo $basedir; ?>css/bootstrap.css');
		@import url('<?php echo $basedir; ?>css/font-awesome.css');
		@import url('<?php echo $basedir; ?>css/prism.css');
		@import url('<?php echo $basedir; ?>css/general.css');
	</style>
	<script src="<?php echo $basedir; ?>js/prism.js" type="text/javascript"></script>
	<script src="<?php echo $basedir; ?>js/jquery-3.2.1.slim.min.js" type="text/javascript"></script>
	<script src="<?php echo $basedir; ?>js/tether.min.js" type="text/javascript"></script>
	<script src="<?php echo $basedir; ?>js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body>
	<div class="container-fluid">
		<header>
			<div class="container">
				<img class="pull-right" src="<?php echo $basedir; ?>images/php_mysql.png">
				<div style="margin-right: 10px" class="pull-right">
					<h3 style="margin-bottom: 0" class="text-right">PHP & MySQL</h3>
					<p class="text-right">Prácticas de la clase. <small>(by Jorge Espinal <small>- 2017 &copy; Rev. 4.9 - 2018</small>)</small></p>
				</div>
				<img src="<?php echo $basedir; ?>images/sdq-logo.png">
			</div>
		</header>
		<?php

		if(count($temas) > 0){

			require_once 'app/views/temas.php';

		} else if(count($practicas) > 0){

			include_once 'app/views/practicas.php';

		}
		?>
	</div>
</body>
</html>