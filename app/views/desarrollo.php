<h3><strong><?= $idFolder; ?>: <?= $_SESSION['temas'][$idFolder - 1]->tema ?></strong></h3>
<h4><strong><?php echo $practicas[$index]->numero; ?></strong>: <?php echo $practicas[$index]->titulo; ?></h4>
<!-- mandato -->
<div class="card border-success form-group">
  <div class="card-body">
  	<?php
  	$look = array('( ', ' )', '[ ', ' ]', '\n', '<?php', '?>');
  	$rep = array('<strong>( ', ' )</strong>', '<strong>', '</strong>', "\r\n", "&lt;?php", "?&gt;");
  	?>
  	<?php if(trim($practicas[$index]->tip) != ''): ?>
  	<h6 class="card-title"><i class="fa fa-lightbulb-o"></i> Tip:</h6>
  	<?php $tip = str_replace($look, $rep, $practicas[$index]->tip); ?>
    <div class="card-subtitle mb-2 text-muted"><?php echo $tip; ?></div>
	<?php endif ?>
  	<h6 class="card-title"><i class="fa fa-puzzle-piece"></i> Mandato:</h6>
  	<?php $mandato = str_replace($look, $rep, $practicas[$index]->mandato); ?>
    <div class="card-subtitle mb-2 text-muted"><?php echo $mandato; ?></div>
  </div>
</div>
<h6 class="text-muted">Folder a trabajar:</h6>
<h4><i class="fa fa-window-maximize"></i>
	<a href="<?php echo $basedir . 'practicas/'. $jsonFile . '/' . $subfolder . '/'; ?>" target="_blank">
		<?php echo 'practicas/' . $jsonFile . '/' . $subfolder . '/'; ?></a> <small><small> - <i class="fa fa-folder-open"></i> Folder local: <?php echo $_SERVER['DOCUMENT_ROOT'] . $basedir . 'practicas/'. $jsonFile . '/' . $subfolder . '/'; ?></small></small>
</h4> 
<!-- endmandato -->
<?php if(count($practicas[$index]->archivos) > 0): ?>
<!-- archivos -->
<?php
$look = array('.', '/');
$rep = array('-', '-');
?> 
<ul class="nav nav-tabs" role="tablist">
	<?php $class = " active"; ?>
	<?php foreach($practicas[$index]->archivos as $archivo): ?>
	<li class="nav-item">
		<a class="nav-link<?php echo $class; ?>" data-toggle="tab" role="tab" href="#<?php echo str_replace($look, $rep, $archivo->nombre); ?>"><i class="fa fa-file"></i> <?php echo $archivo->nombre; ?></a>
	</li>
	<?php $class = ''; ?>
	<?php endforeach; ?>
</ul>
<div class="tab-content">
	<?php $class = " show active"; ?>
	<?php foreach($practicas[$index]->archivos as $archivo): ?>
	<div class="tab-pane fade<?php echo $class; ?>" role="tabpanel" id="<?php echo str_replace($look, $rep, $archivo->nombre); ?>">
		<?php $file = htmlspecialchars(file_get_contents('practicas/' . $jsonFile . '/' . $subfolder . '/' . $archivo->nombre)); ?>
		<pre><code class="<?= $archivo->codigo ?> line-numbers"><?php echo $file; ?></code></pre>
	</div>
	<?php
	unset($file);
	$class = '';
	?>
	<?php endforeach; ?>
</div>
<hr>
<!-- endarchivos -->
<?php endif; ?>
<!-- mandato -->
<div class="card border-warning form-group">
  <div class="card-body">
  	<h4 class="card-title"><i class="fa fa-cogs"></i> Resultados</h4>
    <h6 class="card-subtitle mb-2 text-muted">Mostrando los resultados...</h6>
    	<div style="background-color: #fff" class="intrinsic-container intrinsic-container-16x9">
		  <iframe src="<?php echo $basedir . 'practicas/'. $jsonFile . '/' . $subfolder . '/' . $practicas[$index]->cargar; ?>" allowfullscreen></iframe>
		</div>
  </div>
</div>