<?php include('template/menu.php'); ?>
<header id="header">
	<img class="img-sm onScroll" data-type="show" data-delay="500" src="<?=base_url();?>img/responsive1.png" alt="Responsive Design">
	<div class="texto">
		<h1 class="onScroll" data-type="up" data-delay="300">Creamos <span>tu</span> página<br>web a <span>tu</span> medida</h1>
		<div class="checks onScroll" data-type="show" data-delay="500">
			<div class="item">
				<span><i class="bi bi-check"></i></span>
				<p>Rapida</p>
			</div>
			<div class="item">
				<span><i class="bi bi-check"></i></span>
				<p>Efectiva</p>
			</div>
			<div class="item">
				<span><i class="bi bi-check"></i></span>
				<p>Segura</p>
			</div>
		</div>
		<p class="onScroll" data-type="show" data-delay="700"><i class="bi bi-telephone-fill"></i> 8119776885</p>
	</div>
	<img class="img-lg" src="<?=base_url();?>img/responsive1.png" alt="Responsive Design">
	
</header>
<section id="conquista" class="card-left">
	<img class="d750 onScroll" src="<?=base_url();?>img/conquista.jpg" alt="Desarrollo Web Profesional" data-type="show" data-delay="200" loading="lazy">
	<div class="text">
		<h2 class="onScroll" data-type="up">Desarrollo Web</h2>
		<p class="onScroll" data-type="show" data-delay="200">Si no esta en internet ¡No Existes!. La gran mayoria de las búsquedas que hacen tus clientes, son por internet. ¡Expande tu cobertura y muéstrale al mundo quien eres y que haces!</p>
		<a class="modal-trigger onScroll" data-type="show" data-delay="500" href="<?= base_url() ?>como-crear-una-pagina-web">Ver más <span class="material-icons">arrow_forward</span></a>
	</div>
	<div class="separador"></div>
	<img class="dn750 onScroll" src="<?=base_url();?>img/conquista.jpg" alt="Desarrollo Web Profesional" data-type="show" data-delay="200" loading="lazy">
</section>
<section id="comunicate" class="card-right">
	<img class="onScroll" src="<?=base_url();?>img/comunicate.jpg" alt="Página Web Profesional" data-type="show" data-delay="200" loading="lazy">
	<div class="separador"></div>
	<div class="text">
		<h2 class="onScroll" data-type="up">Páginas Web Profesionales</h2>
		<p class="onScroll" data-type="show" data-delay="200">Te incluiremos junto con tu página, el correo empresarial, asi todos tus mensajes podrán ser formales y de confianza para la gente que desea tus servicios.</p>
		<a class="modal-trigger onScroll" data-type="show" data-delay="500" href="#contacto">Contactar <span class="material-icons">arrow_forward</span></a>
	</div>
</section>
<section id="soporte" class="card-left">
	<img class="d750 onScroll" src="<?=base_url();?>img/soporte.jpg" alt="Soporte para tu Página Web" data-type="show" data-delay="200" loading="lazy">
	<div class="text">
		<h2 class="onScroll" data-type="up">Soporte para tu Página Web</h2>
		<p class="onScroll" data-type="show" data-delay="200">Estaremos para apoyarte en este nuevo comienzo de tu negocio. Tendrás comunicación fácil y directa con la persona que lleva tu página para cualquier duda que tengas.</p>
	</div>
	<div class="separador"></div>
	<img class="dn750 onScroll" src="<?=base_url();?>img/soporte.jpg" alt="Soporte para tu Página Web" data-type="show" data-delay="200" loading="lazy">
</section>
<section id="observa">
	<h2 class="onScroll" data-type="up">Ejemplos de Diseño Web</h2>
	<p class="onScroll" data-type="show" data-delay="200">Tenemos la experiencia para llevar tu negocio a internet con exito y elegancia. </p>
	<a class="modal-trigger onScroll" data-type="show" data-delay="500" href="#contacto">Comenzar! <span class="material-icons">arrow_forward</span></a>
	<div class="carousel">
    	<div class="carousel-item"><img src="<?=base_url();?>img/observa1.jpg" alt="" loading="lazy"></div>
    	<div class="carousel-item"><img src="<?=base_url();?>img/observa2.jpg" alt="" loading="lazy"></div>
    	<div class="carousel-item"><img src="<?=base_url();?>img/observa3.jpg" alt="" loading="lazy"></div>
    	<div class="carousel-item"><img src="<?=base_url();?>img/observa4.jpg" alt="" loading="lazy"></div>
    	<div class="carousel-item"><img src="<?=base_url();?>img/observa5.jpg" alt="" loading="lazy"></div>
  </div>
</section>
<div id="como_empezar" class="onScroll" data-type="up">
	<div class="card-left2">
		<h2>Como crear una Página Web</h2>
		<p>1. ¡Contáctanos!</p>
		<p>2. Junta tus mejores fotos.</p>
		<p>4. Creamos tu propuesta.</p>
		<p>5. Definimos tu Página WEB.</p>
		<p>6. ¡Ya estás en internet!</p>
		<div style="height: 10px"></div>
		<a class="modal-trigger onScroll" data-type="show" data-delay="500" href="<?= base_url() ?>como-crear-una-pagina-web">Más detalles <span class="material-icons">arrow_forward</span></a>
	</div>
	<div class="separador"></div>
	<img src="<?=base_url();?>img/empezar.png" alt="empezar" class="left" loading="lazy">
</div>
<br><br>
<?php include('template/footer.php'); ?>


<!-- CHATBOX -->
<link rel="stylesheet" href="https://creacionweb.com.mx/code/chatbox.css">
<div id="chatbox">
	<div class="chatbox-asesor" data-img="img/aldo.jpg" data-nombre="Aldo" data-puesto="Sistemas" data-correo="aldo.aaa1@gmail.com"></div>
	<div class="chatbox-question" data-question="¡Hola! ¡Creemos tu página web! ¿De que giro es tu negocio o trabajo?"></div>
	<div class="chatbox-question" data-question="¿En que correo o whatsapp podría contactarte?"></div>
	<div class="chatbox-question" data-question="¿Con quién tengo el gusto de conversar?"></div>
	<div class="chatbox-customColors" data-body="#c8d4da" data-chatboxmsg="#cef" data-clientmsg="#cfe" data-iconhover="#b3cedc"></div>
	<div class="chatbox-comportamiento" data-delay_autoshow_ms="10000" data-close_message="¡Muchas gracias por tu mensaje! Me contactaré contigo personalemte lo mas pronto posible. También estoy para servirte directamente en mi whatsapp: 8119776885"></div>
</div>
<script src="https://creacionweb.com.mx/code/chatbox.js" defer></script>