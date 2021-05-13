<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>Web service en formato JSON</title>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
</head>
<body>

	<div style="margin-top: 20px" class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Condiciones del tiempo para:</h2>
				<h3>{ city_name }</h3>
			</div>
			<!-- Repetir -->
			<div class="col-md-2">
				<div class="card form-group">
				  	<img class="card-img-top" src="img/01d.png">
				 	<ul class="list-group list-group-flush">
					 	<li class="list-group-item"><strong>{ date }</strong></li>
					 	<li class="list-group-item"><strong>{ main }</strong><br>{ description }</li>	 		
				    	<li class="list-group-item">Temp: <strong>{ temp }</strong></li>
				    	<li class="list-group-item">Min: <strong>{ temp_min }</strong></li>
				    	<li class="list-group-item">Max: <strong>{ temp_max }</strong></li>
				  	</ul>
				</div>	
			</div>
			<!-- Repetir -->
		</div>
	</div>
</body>
</html>