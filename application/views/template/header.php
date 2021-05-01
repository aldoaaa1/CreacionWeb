<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title ?></title>
	<meta name="description" content="<?= $description ?>">
	<meta name="keywords" content="<?= $keywords ?>">

	<link rel="stylesheet" type="text/css" href="/fonts/Roboto/roboto.css">
	<link rel="stylesheet" type="text/css" href="/fonts/BootstrapIcons/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="/fonts/MaterialIcons/Material_Icons.css">
	<link rel="stylesheet" type="text/css" href="/plugin/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="/fonts/Roboto/roboto.css">
	<link rel="stylesheet" type="text/css" href="/css/general.css">
	<?php
		if (file_exists('css/'.$page.'.css')) {
			echo '<link rel="stylesheet" type="text/css" href="/css/'.$page.'.css">';
		}
	?>
</head>
<body>
	<div class="loader-bg">
		<div class="loader"></div>
		<br>
		<h4>Cargando...</h4>
	</div>