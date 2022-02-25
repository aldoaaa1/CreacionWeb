<?php include('template/menu.php'); ?>
<header>
	<img src="img/desarrollo1.jpg" alt="Desarrollo Web" class="onScroll" data-type="show" data-delay="300">
	<h1 class="onScroll" data-type="up" data-delay="800">Como hacer una Página Web</h1>
</header>

<div id="desarrollo_web" class="container">
	<div class="flex onScroll"  data-type="up">
		<h2>Desarrollo Web</h2>
		<p class="onScroll" data-type="show" data-delay="350">El <strong>como se hace una Página Web</strong> es importante a la hora de ver el desempeño del <strong>sitio web</strong>, por eso, en esta sección te mostrarémos <strong>como crear una página web paso a paso.</strong></p>
	</div>
	<h3 class="onScroll" data-type="up">PASOS DEL DESAROLLO</h3>
	<div class="pasos flex">
		<div class="paso">
			<img src="img/info1.jpg" alt="Información Web" class="onScroll" data-type="up" data-delay="300">
			<h4 class="onScroll" data-type="up">Recopilación de información</h4>
			<p class="onScroll" data-type="show" data-delay="350">Necesitaremos saber que haces, donde te encuentras, que es lo que ofreces a tu cliente, cuanto cuestan tus servicios, como pueden comunicarse contigo. ¡Cuáles son tus servicios/productos estrellas!</p>
		</div>
		<div class="paso">
			<img src="img/posicionamiento.jpg" alt="Posicionamiento SEO" class="onScroll" data-type="up" data-delay="300"> 
			<h4 class="onScroll" data-type="up">Estudio de Mercado y Posicionamiento</h4>
			<p class="onScroll" data-type="show" data-delay="350">Ahora tendrémos que investigar tu competencia, nuestro equipo profesional analizará cuales son tus ventajas y desventajas frente a tus competidores principales para saber lo que debemos de hacer para sobresalir.</p>
		</div>
		<div class="paso">
			<img src="img/conquista.jpg" alt="Diseño Web" class="onScroll" data-type="show">
			<h4 class="onScroll" data-type="up">Desarrollo del Diseño Web</h4>
			<p class="onScroll" data-type="show" data-delay="350">¡La imágen es importante! Tendras un perfecto <strong>Responsive Design</strong> en tu <strong>Sitio Web</strong> lo que significa que tu página podrá visualizarse perfectamente en cualquier dispositivo con un diseño elegante y bonito.</p>
		</div>
		<div class="paso">
			<img src="img/retroalimentacion.jpg" alt="Estadísticas WebSite" class="onScroll" data-type="up" data-delay="300">
			<h4 class="onScroll" data-type="up">Retroalimentacion y Mejora Continua</h4>
			<p class="onScroll" data-type="show" data-delay="350">¡Tu <strong>página web</strong> estará en funcionamiento! Pero aún así, obtendremos información de su rendimiento en el tiempo y podremos modificar (si es necesario) su estructura para optimizar su funcionamiento en la web.</p>
		</div>
	</div>
	<a id="Empezar_ahora" href="#contacto" class="modal-trigger onScroll" data-type="show" data-delay="500">¡Empezar con mi Página Web Ahora!</a>
</div>

<div class="landing_page_c flex">
	<div id="landing_page" class="container">
		<img src="img/landing_page.png" alt="Landing Page" class="onScroll" data-type="up" data-delay="300">
		<h2 class="onScroll" data-type="up">Landing Page</h2>
		<p class="onScroll" data-type="show" data-delay="350">Las <strong>Landing Pages</strong> tienen como objetivo principal la conversión de los visitantes. Son páginas con pocos elementos y enfocadas en un único producto o servicio y garantizando el interés del cliente y el éxito en tu estrategia de Marketing Digital.</p>
		<p class="onScroll" data-type="show" data-delay="350">Para eso, se crean páginas específicas, que dejan de lado elementos que puedan distraer la atención del usuario, como por ejemplo menú, exceso de texto u otra información no útil dentro del objetivo específico: <strong>Hacer que el usuario realice una acción</strong>.</p>
		<a href="<?= base_url() ?>como-crear-una-landing-page" class="onScroll" data-type="right" data-delay="500">Ver Más <span class="material-icons">arrow_forward</span></a>
	</div>
</div>

<div id="pagina_gratis" class="container">
	<img src="img/free_website.jpg" alt="Página Web Gratuita" class="onScroll" data-type="up" data-delay="300">
	<h2 class="onScroll" data-type="up">Página Web Gratuita</h2>
	<p class="onScroll" data-type="show" data-delay="350">¡Así es! Nuestra plataforma <strong>está en crecimiento</strong>, y queremos que siga creciendo aún más.</p>
	<p class="onScroll" data-type="show" data-delay="350">Da click en el siguiente enlace y podrás descubrir como podemos ayudarnos mutuamente!</p>
	<a href="<?= base_url() ?>como-crear-una-pagina-web-gratis" class="onScroll" data-type="right" data-delay="500">Ver Más <span class="material-icons">arrow_forward</span></a>
</div>
<br><br>
<?php include('template/footer.php') ?>

<!-- CHATBOX -->
<link rel="stylesheet" href="https://creacionweb.com.mx/code/chatbox.css">
<div id="chatbox">
	<div class="chatbox-asesor" data-img="<?=base_url();?>img/aldo.jpg" data-nombre="Aldo" data-puesto="Sistemas" data-correo="aldo.aaa1@gmail.com"></div>
	<div class="chatbox-question" data-question="¡Hola! ¡Creemos tu página web! ¿De que giro es tu negocio o trabajo?"></div>
	<div class="chatbox-question" data-question="¿En que correo o whatsapp podría contactarte?"></div>
	<div class="chatbox-question" data-question="¿Con quién tengo el gusto de conversar?"></div>
	<div class="chatbox-customColors" data-body="#c8d4da" data-chatboxmsg="#cef" data-clientmsg="#cfe" data-iconhover="#b3cedc"></div>
	<div class="chatbox-comportamiento" data-delay_autoshow_ms="15000" data-close_message="¡Muchas gracias por tu mensaje! Me contactaré contigo personalemte lo mas pronto posible. También estoy para servirte directamente en mi whatsapp: 8119776885"></div>
</div>
<script src="https://creacionweb.com.mx/code/chatbox.js" defer></script>