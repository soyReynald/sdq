<?php
require_once '../../14-sql/data/conexion.php';
require_once '../../14-sql/data/install_data_productos.php';

$sqlProductos = "SELECT * FROM productos";
$rsProductos = $con->query($sqlProductos) or die($con->error);

if($rsProductos->num_rows > 0){
	$productos = array();
	while($fila = $rsProductos->fetch_object()){
		$sqlInventario = "SELECT * FROM inventario WHERE codigo = $fila->codigo";
		$rsInventario = $con->query($sqlInventario) or die($con->error);
		$inventario = array();
		while($row = $rsInventario->fetch_object()){
			$inventario[] = $row;
		}
		$fila->inventario = $inventario;
		$productos[] = $fila;
		$rsInventario->free();
	}
} else {
	exit('Debe importar la base de datos "productos.sql"');
}

$rsProductos->free();
$con->close();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Procedimientos almacenados</title>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<style>
		.no-stock {
			opacity: .3;
   			filter: alpha(opacity=30); /* IE8 and lower */
		}
	</style>
</head>
<body>
	<div class="container">
		<h2>MiniMarket 2.0</h2>
		<table class="table table-striped">
			<?php foreach($productos as $producto): ?>
			<tr<?= !$producto->disponible ? ' class="table-danger"' : '' ?>>
				<th><?= !$producto->disponible ? 'Sold out!<br><small>None of the products of this brand are available!</small>' : $producto->nombre . '<br><small>' . $producto->descripcion . '</small>' ?></th>
			</tr>
			<tr>
				<td<?= !$producto->disponible ? ' class="no-stock"' : '' ?>>
					<div class="row">
						<?php foreach($producto->inventario as $inventario): ?>
						<div class="col-md-4 form-group<?= !$inventario->cantidad ? ' no-stock' : '' ?>">
							<div class="clearfix">
								<img style="margin-right:5px" class="float-left" src="img/<?= $inventario->id ?>.jpg" alt="<?= $inventario->variacion ?>">
								<strong><?= $inventario->variacion ?></strong><br>
								<small>Stock: <?= $inventario->cantidad ?></small>
							</div>
							<hr style="margin:5px 0">
							<button class="btn btn-sm btn-success float-right"<?= !$producto->disponible ? ' disabled' : '' ?><?= !$inventario->cantidad ? ' disabled' : '' ?>>Add to cart</button>
							<strong>$<?= $inventario->precio ?></strong>
						</div>
						<?php endforeach ?>
					</div>
				</td>
			</tr>
			<?php endforeach ?>
		</table>
	</div>
	<?php
	$solb64 = 'REVMSU1JVEVSICQkDQpDUkVBVEUgUFJPQ0VEVVJFIGFjdHVhbGl6YXIoKQ0KQkVHSU4NClVQREFURSBwcm9kdWN0b3MsIGludmVudGFyaW8gU0VUIGRpc3BvbmlibGUgPSBJRigoU0VMRUNUIFNVTShjYW50aWRhZCkgRlJPTSBpbnZlbnRhcmlvIFdIRVJFIGludmVudGFyaW8uY29kaWdvID0gcHJvZHVjdG9zLmNvZGlnbykgPiAwLCAxLCAwKSBXSEVSRSBwcm9kdWN0b3MuY29kaWdvID0gaW52ZW50YXJpby5jb2RpZ287IA0KRU5EICQkDQpERUxJTUlURVIgOw==';
	?>
</body>
</html>