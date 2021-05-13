<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>Web service en formato XML</title>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
</head>
<body>
	<div style="margin-top: 20px" class="container">
		<div class="row">
		
			<div class="col-md-4">
				<div class="card form-group">
				  	<img class="card-img-top" src="{ url }">
					<div class="card-body">
						<h4 class="card-title">{ titulo }</h4>
						<h5 class="card-title">{ autor }</h5>
						<p class="card-text">[ { fecha de publicacion } ] { descripcion } </p>
					</div>
				 	<ul class="list-group list-group-flush">	 		
				    	<li class="list-group-item"><a href="{ link }" class="btn btn-sm btn-primary float-right">Ver más...</a></li>
				  	</ul>
				</div>
			</div>
		
		</div>
	</div>
</body>
</html>