<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>Leyendo archivos en formato XML</title>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
</head>
<body>
	<div style="margin-top: 20px" class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="card form-group">
				  	<img class="card-img-top" src="img/historias.jpg" alt="{ nombre }">
					<div class="card-body">
						<h4 class="card-title">{ nombre }</h4>
						<h5 class="card-title">{ artista }</h5>
						<p class="card-text">[ { fecha } ] { descripcion } </p>
					</div>
				 	<ul class="list-group list-group-flush">	 		
				    	<li class="list-group-item"><span class="float-right">{ duracion }</span>Track #{ track }: { titulo } </li>
				  	</ul>
				</div>
			</div>
		</div>
	</div>
</body>
</html>