<h1>Sigueme en twitter <?php echo $twitter; ?></h1>
<?php foreach($model as $data):?>
	<h2><?php echo $data->id,". ",$data->username; ?></h2>
<?php endforeach; ?>