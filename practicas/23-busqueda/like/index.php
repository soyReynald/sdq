<?php
$tabla = 'peliculas';
require_once '../../14-sql/data/conexion.php';
require_once '../../14-sql/data/install_data_peliculas.php';
require_once '../../14-sql/data/query_exec.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Busqueda utilizando LIKE</title>
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
</head>
<body>
    <div style="margin-top: 30px" class="container">

        <!-- Formulario de busqueda -->

		<div class="row">
			<div class="col-4">
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get">
					<div class="form-group">
						<label for="buscar" class="sr-only">Buscar</label>
						<input type="text" class="form-control" id="buscar" placeholder="Titulo, actor o productor">
					</div>
					<button type="submit" class="btn btn-primary">Buscar</button>
				</form>
			</div>
		</div>

        <!-- Fin Formulario de busqueda -->

        <!-- Esta parte solo es para referencia de los nombres de la tabla y los campos. -->
        <!-- Para realizar la práctica esta parte puede ser eliminada. -->

        <h5>Resultados - tabla: "<?php echo $tabla; ?>"</h5>
		<?php if(isset($table[0])): ?>
		<table class="table tabla-striped">
			<tr>
				<?php foreach ($table[0] as $key => $value): ?>
					<th><?php echo $key ?></th>
				<?php endforeach; ?>
			</tr>
			<?php foreach ($table as $row): ?>
			<tr>
				<?php foreach ($row as $value): ?>
				<td><?php echo $value ?></td>
				<?php endforeach; ?>
			</tr>
			<?php endforeach; ?>
		</table>
		<?php else: ?>
			<div class="alert alert-warning">
				¡No se encontró resultados!
			</div>
		<?php endif ?>

        <!-- Hasta aquí. -->

	</div>
</body>
</html>