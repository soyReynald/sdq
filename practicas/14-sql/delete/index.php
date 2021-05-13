<?php
	$tabla = 'usuarios';
	require_once '../data/conexion.php';
	require_once '../data/install_data_usuarios.php';
	require_once '../data/query_exec.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Eliminando datos en la base datos</title>
	<link rel="stylesheet" type="text/css" href="../../../css/codemirror.css">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<script src="../../../js/jquery-3.2.1.js"></script>
	<script src="../../../js/codemirror/lib/codemirror.js"></script>
	<script src="../../../js/codemirror/mode/sql/sql.js"></script>
	<script src="../../../js/jquery.codemirror.js"></script>
</head>
<body>
	<div style="margin-top: 20px" class="container">
		<h3>Escribe SQL aquí</h3>
		<?php

		if(count($errors) > 0){
			foreach($errors as $error){
				?>
				<div class="alert alert-danger"><?php echo $error ?></div>
				<?php
			}
		}

		?>
		<form class="form-group" action="index.php" method="post" accept-charset="utf-8">
			<textarea id="code" class="form-control" name="sql"><?php echo isset($_POST['sql']) ? $_POST['sql'] : ''; ?></textarea>
			<button type="submit" class="btn btn-sm btn-success">Ejecutar</button>
		</form>
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
	</div>
	<script>
	window.onload = function() {
		window.editor = CodeMirror.fromTextArea(document.getElementById('code'), {
	    mode: 'text/x-mysql',
	    lineNumbers: false
	  });
	};
	</script>
</body>
</html>