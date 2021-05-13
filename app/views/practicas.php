<div class="row">
			<div class="col-lg-3 col-md-12">
				<h3><a href="<?php echo $basedir; ?>" class="btn btn-outline-danger btn-sm pull-right"><i class="fa fa-reply"></i> Atras</a><strong><?= $idFolder; ?>: <?= $_SESSION['temas'][$idFolder - 1]->tema ?></strong></h3>
				<h4>Listados de prácticas</h4>
				<?php $count = 1 ?>
				<?php foreach ($practicas as $practica): ?>
				<!-- card -->
				<div class="card form-group">
				  <div class="card-body">
				    <h5 class="card-title"><?php echo $practica->numero; ?>: <?php echo $practica->titulo; ?></h5>
				    <h6 class="card-subtitle mb-2 text-muted"><?php echo $practica->descripcion; ?></h6>
				    <a href="<?php echo $basedir . $url[0] . '/' . $count . '-' . $practica->url; ?>" class="btn btn-outline-warning btn-sm"><i class="fa fa-warning"></i> Ejercicio</a>
				  </div>
				</div>
				<!-- endcard -->
				<?php $count++ ?>
				<?php endforeach; ?>
			</div>
			<div class="col-lg-9 col-md-12">
				<?php
				if(isset($subfolder) && trim($subfolder) != ''){
					$pp = explode('-', $subfolder);
					$index = (int) $pp[0] - 1;
					$subfolder = $pp[1];
					require_once 'desarrollo.php';
				} else {
					?>
					<div style="margin-top: 35px" class="card border-warning">
					  <div class="card-body">
					    <blockquote class="card-blockquote">
					      <p>¡Haga click en el botón ( <i class="fa fa-warning"></i> ejercicio ) de cualquiera de las prácticas de la izquierda, para cargarla!</p>
					    </blockquote>
					  </div>
					</div>
					<?php
				}
				?>
			</div>
		</div>