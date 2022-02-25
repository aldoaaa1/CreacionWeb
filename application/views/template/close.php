	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>plugin/sweetalert2.min.css">
	<script src="<?= base_url(); ?>plugin/jquery-3.6.min.js"></script>
	<script src="<?= base_url(); ?>plugin/materialize.min.js"></script>
	<script src="<?= base_url(); ?>plugin/sweetalert2.min.js" defer></script>
	<script src="<?= base_url(); ?>js/onScroll.js" defer></script>
	<script src="<?= base_url(); ?>js/general.js?1" defer></script>
	<script src="<?= base_url(); ?>js/estadisticas.php"></script>
	<?php
		$filename = 'js/'.$page.'.js';
		if (file_exists($filename)) {
			echo '<script src="'.base_url().'js/'.$page.'.js" async></script>';
		}
	?>
</body>
</html>