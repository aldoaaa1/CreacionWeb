$(document).ready(function(){
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