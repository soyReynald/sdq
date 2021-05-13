<?php ?>
<!DOCTYPE html>
<html>
<head>
	<title>Variable $_POST</title>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
</head>
<body>
	<div style="margin-top: 20px" class="container">
		<form action="resultados.php" method="post">
			<div class="form-group">
				<label>Nombre:</label>
				<input class="form-control form-control-sm" type="text">
			</div>
			<div class="form-group">
				<label>País:</label>
				<select class="form-control form-control-sm">
					<option value="DO">República Dominicana</option>
					<option value="HA">Haiti</option>
					<option value="PR">Puerto Rico</option>
					<option value="JA">Jamaica</option>
				</select>
			</div>
			<div class="form-group">
				<label>Sexo:</label>
				<div class="row">
					<div class="col-6">
						<label><input type="radio"> Masculino</label>
					</div>
					<div class="col-6">
						<label><input type="radio"> Femenino</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label>Intereses:</label>
				<div class="row">
					<div class="col-6">
						<label><input type="checkbox"> Computadoras</label><br>
						<label><input type="checkbox"> Cine</label><br>
						<label><input type="checkbox"> Arte</label>
					</div>
					<div class="col-6">
						<label><input type="checkbox"> Tecnología</label><br>
						<label><input type="checkbox"> Deportes</label>	
					</div>
				</div>		
			</div>
			<div class="form-group">
				<label>Comentario:</label>
				<textarea class="form-control form-control-sm"></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Enviar</button>
		</form>
	</div>
</body>
</html>