<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title ?></title>
	<meta name="description" content="<?= $description ?>">
	<meta name="keywords" content="<?= $keywords ?>">

	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>fonts/Roboto/roboto.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>fonts/BootstrapIcons/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>fonts/MaterialIcons/Material_Icons.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>plugin/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>css/general.css?5">
	<?php
		if (file_exists('css/'.$page.'.css')) {
			echo '<link rel="stylesheet" type="text/css" href="/css/'.$page.'.css">';
		}
	?>
	<script> var base_url = "<?=base_url()?>" </script>
	<!-- <script src="<?= base_url(); ?>js/google_analitics.js"></script> -->
	
</head>
<body>
	<div class="loader-bg">
		<div class="loader"></div>
		<br>
		<h4>Cargando...</h4>
	</div>