<div id="nav">
	<h6 class="sm_dnone">Creacion WEB</h6>
	<div id="menu_bars" onclick="showNav_phone()"></div>
	<div class="menu">
		<a class="sm_dnone" href="<?= base_url() ?>">INICIO</a>
		<a class="sm_dnone" href="<?= base_url() ?>como-crear-una-pagina-web">DESARROLLO</a>
		<a class="sm_dnone" href="<?= base_url() ?>como-crear-una-landing-page">LANDING PAGE</a>
		<a id="btn_menu" href="#contacto" class="empezar modal-trigger">CONTACTO</a>
	</div>
</div>
<div id="nav_phone" class="flex nav_phone_closed">
	<div id="nav_phone_close" onclick="hideNav_close()"></div>
	<a href="<?= base_url() ?>">INICIO</a>
	<a href="<?= base_url() ?>como-crear-una-pagina-web">DESARROLLO</a>
	<a href="<?= base_url() ?>como-crear-una-landing-page">LANDING PAGE</a>
	<a id="btn_menu" href="#contacto" class="empezar modal-trigger">CONTACTO</a>
</div>

<div id="contacto" class="modal">
	<div class="modal-content">
		<h2>¡Empecemos!</h2>
		<h6>Envíame tus datos y te contactaré.</h6>
		<div class="input-field">
	      <input id="nombre" type="text" class="validate">
	      <label for="nombre">Nombre</label>
	    </div>
	    <div class="input-field">
	      <input id="correo" type="text" class="validate">
	      <label for="correo">Correo o WhatsApp</label>
	    </div>
	    <div class="input-field">
	      <input id="mensaje" type="text" class="validate">
	      <label for="mensaje">¿A que se dedica tu negocio?</label>
	    </div>
	  	<a href="#!" onclick="enviarNuevoCliente()" class="modal-close waves-effect waves-green btn-flat">Enviar</a>
	</div>
	<div class="modal-footer center-align">
	    <p>O si lo prefieres... Contáctame directamente por WhatsApp:</p>
	    <a href="https://wa.me/+528119776885?text=Quisiera%20mas%20información%20porfavor.%20Me%20contanto%20a%20través%20de%20su%20Página%20Web." target="_blank" class="modal-close waves-effect waves-green btn-flat"><i class="bi bi-telephone-fill"></i>WhatsApp</a>
	</div>
</div>