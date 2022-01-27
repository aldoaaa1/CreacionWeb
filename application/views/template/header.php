<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title ?></title>
	<meta name="description" content="<?= $description ?>">
	<meta name="keywords" content="<?= $keywords ?>">

	<link rel="stylesheet" type="text/css" href="<?php base_url(); ?>fonts/Roboto/roboto.css">
	<link rel="stylesheet" type="text/css" href="<?php base_url(); ?>fonts/BootstrapIcons/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="<?php base_url(); ?>fonts/MaterialIcons/Material_Icons.css">
	<link rel="stylesheet" type="text/css" href="<?php base_url(); ?>plugin/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="<?php base_url(); ?>css/general.css">
	<?php
		if (file_exists('css/'.$page.'.css')) {
			echo '<link rel="stylesheet" type="text/css" href="'.base_url().'css/'.$page.'.css">';
		}
	?>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-MKCWMYX9G1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-MKCWMYX9G1');
	</script>
</head>
<body>
	<div class="loader-bg">
		<div class="loader"></div>
		<br>
		<h4>Cargando...</h4>
	</div>