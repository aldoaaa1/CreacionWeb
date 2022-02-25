window.addEventListener('DOMContentLoaded', function(){
	$('.loader-bg').fadeOut();
});

// SCRIPT DEL MENU GENERAL
$(document).ready(function(){
    $('.modal').modal();
    showNav();
});
function showNav(){
	document.querySelector("#nav").style.transitionDuration="2s";
	setTimeout(function(){
		document.querySelector("#nav").style.opacity=1;
	}, 500)
	setTimeout(function(){
		document.querySelector("#nav").style.transitionDuration="0.6s"
	}, 2500)
}
function showNav_phone(){
	nav = $('#nav_phone');
	if (nav.hasClass('nav_phone_closed')) {
		nav.removeClass('nav_phone_closed')
	}
}
function hideNav_close(){
	nav = $('#nav_phone');
	if (!nav.hasClass('nav_phone_closed')) {
		nav.addClass('nav_phone_closed')
	}
}
window.addEventListener("scroll", nav);
function nav(){
	let scrollTop = $(window).scrollTop();
	if (scrollTop > 100) {
		$('#nav').addClass('nav2');
		$('#btn_menu').addClass('btn2');
		$('#nav a').addClass('a2');
		$('#menu_bars').addClass('menu_bars2');
	} else{
		$('#nav').removeClass('nav2');
		$('#btn_menu').removeClass('btn2');
		$('#nav a').removeClass('a2');
		$('#menu_bars').removeClass('menu_bars2');
	}
}
function enviarNuevoCliente(){
	if ($('#nombre').val() == "") {
		Swal.fire(
			'Faltan Datos',
			'Necesitas poner tu Nombre.',
			'warning'
		).then((result) => {
			M.Modal.getInstance($('#contacto')).open();
		})
	}
	if ($('#correo').val() == "") {
		Swal.fire(
			'Faltan Datos',
			'Necesitas poner tu Correo o WhatsApp.',
			'warning'
		).then((result) => {
			M.Modal.getInstance($('#contacto')).open();
		})
	}
	if ($('#mensaje').val() == "") {
		Swal.fire(
			'Faltan Datos',
			'Necesitas poner el giro de tu negocio.',
			'warning'
		).then((result) => {
			M.Modal.getInstance($('#contacto')).open();
		})
	}
	let url = '/email';
	let datos = {
		from: "mailbot@creacionweb.com.mx",
		to: "aldo.aaa1@gmail.com",
		cc: "betsabemtz4@gmail.com",
		bcc: "",
		subject: "Creacion WEB | Nuevo Cliente Registrado",
		message: "Nombre: "+ $('#nombre').val() +
		"\nCorreo o WhatsApp: " + $('#correo').val() +
		"\nGiro del negocio: " + $('#mensaje').val() +
		"\nDatos registrados el " + longDate()
	};

	$.ajax({
		url: url,
		type: 'post',
		data: datos,
		success: function(response){
			Swal.fire(
				'¡Muchas Gracias!',
				'Tu mensaje se envió Correctamente.<br>Pronto un asesor se pondrá en contacto contigo.',
				'success'
			)
		}
	});
}