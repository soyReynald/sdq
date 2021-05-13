<div class="container">

<div class="row">
<?php foreach($temas as $key => $tema): ?>
	<div class="col-lg-4 col-md-6 col-sm-12">
<div class="card form-group">
	<div class="card-body">
		<h4 class="card-title"><strong><?php echo $tema->numero; ?></strong>: <?php echo $tema->tema; ?></h4>
		<h6 class="card-subtitle mb-2 text-muted"><?php echo $tema->descripcion; ?></h6>
		<a href="<?php echo $basedir . $tema->numero . '-' . $tema->folder; ?>" class="btn btn-outline-success btn-sm"><i class="fa fa-plug"></i> Prácticas</a>
	</div>
 </div>
</div>
<?php endforeach; ?>
</div>

</div>