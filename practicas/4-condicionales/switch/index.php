<!DOCTYPE html>
<html>
<head>
	<title>Condicional SWITCH</title>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
</head>
<body>
	<div style="margin-top: 30px" class="container">
		<div class="row">
			<div class="col-4">
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get">
					<div class="form-group">
						<label for="data" class="sr-only">Data</label>
						<input type="text" name="data" class="form-control" id="data" placeholder="Data">
					</div>
					<button type="submit" class="btn btn-primary">Ejecutar</button>
				</form>
			</div>
		</div>
		<?php

		$data = isset($_GET['data']) ? $_GET['data'] : '';

		#Crear switch aquí

		?>
	</div>
</body>
</html>