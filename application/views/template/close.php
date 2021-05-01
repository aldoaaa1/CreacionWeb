	<link rel="stylesheet" type="text/css" href="/plugin/sweetalert2.min.css">
	<script src="/plugin/jquery-3.6.min.js"></script>
	<script src="/plugin/materialize.min.js"></script>
	<script src="/plugin/sweetalert2.min.js" defer></script>
	<script src="/js/general.js" defer></script>
	<?php
		if (file_exists('js/'.$page.'.js')) {
			echo '<script src="/js/'.$page.'.js" async></script>';
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

		$.post('/rgv', {'user': user});
	</script>	
</body>
</html>