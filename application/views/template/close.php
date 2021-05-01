	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>plugin/sweetalert2.min.css">
	<script src="<?php echo base_url(); ?>plugin/jquery-3.6.min.js"></script>
	<script src="<?php echo base_url(); ?>plugin/materialize.min.js"></script>
	<script src="<?php echo base_url(); ?>plugin/sweetalert2.min.js" defer></script>
	<script src="<?php echo base_url(); ?>js/general.js" defer></script>
	<?php
		if ('js/'.$page.'.js') {
			echo '<script src="'.base_url().'js/'.$page.'.js" async></script>';
		}
	?>
	<script>
		a = window.navigator; 
		b = window.screen; 

		var user = new Object(); 
		user.screenWidth = b.width; 
		user.screenHeight = b.height; 
		user.language = a.language; 
		user.vendor = a.vendor; 
		user.userAgent = a.userAgent; 
		user.ip = "<?= $_SERVER['REMOTE_ADDR'] ?>"; 
		user.paginaActual = document.URL; 

		$.post('<?php echo base_url(); ?>rgv', {'user': user});
	</script>	
</body>
</html>