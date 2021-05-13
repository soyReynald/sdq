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
    <link rel="stylesheet" type="text/css" href="../../../css/font-awesome.css">
</head>
<body>
    <div style="margin-top: 30px" class="container">

        <!-- Paginación -->

		<nav>
            <ul class="pagination pagination-sm">
                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-fast-backward"></i></a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-backward"></i></a></li>
                <li class="page-item disabled"><a class="page-link" href="#">1</a></li>
                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-forward"></i></a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-fast-forward"></i></a></li>
            </ul>
        </nav>

        <!-- Fin Paginación -->

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