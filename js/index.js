$(document).ready(function(){
    $('.modal').modal();
    const elementosCarousel = document.querySelectorAll('.carousel');
	M.Carousel.init(elementosCarousel, {
		duration: 150,
		dist: -50,
		shift: 10,
		padding: 150,
		nomVisible: 3,
		indicators: true,
		noWrap: false
	});
});
window.addEventListener("scroll", nav);
function nav(){
	let scrollTop = $(window).scrollTop();
	if (scrollTop > 100) {
		$('#nav').addClass('nav2');
		$('#btn_menu').addClass('btn2');
		$('#nav a').addClass('a2');
	} else{
		$('#nav').removeClass('nav2');
		$('#btn_menu').removeClass('btn2');
		$('#nav a').removeClass('a2');
	}
}
setInterval(function(){$('.carousel').carousel('next');},2000);


function myTime(){
	let h = new Date().getHours();
	let m = new Date().getMinutes();
	let ampm;
	if (h>12) {
		ampm = 'pm';
		h = h - 12;
	} else { ampm = 'am'; }
	if (m < 10) {
		m = "0"+m;
	}
	return h+':'+m+ampm;
}
function longDate(){
	let d = new Date().getDate();
	if (d < 10) {d = '0' + d.toString();}
	let m = new Date().getMonth() + 1;
	if (m.length = 1) {m = '0' + m.toString();}
	let a = new Date().getFullYear();
	let h = myTime();
	return d+'/'+m+'/'+a+' a las '+myTime();
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
			console.log(enviadoPOST);
		}
	});
}