function w3_open() {
	console.log('js');
	let mySidebar = document.getElementById("mySidebar");

	// Get the DIV with overlay effect
	let overlayBg = document.getElementById("myOverlay");
	let main = document.getElementById("main");
	if (mySidebar.style.display === 'block') {
		mySidebar.style.display = 'none';
		overlayBg.style.display = "none";
		// mySidebar.style.width = "0px";
		mySidebar.style.width = "0px";
		// main.style.marginLeft = "300px";
	} else {
		mySidebar.style.display = 'block';
		overlayBg.style.display = "block";
		mySidebar.style.width = "300px";
		// main.style.marginLeft = "3000px";
	}
}

// Close the sidebar with the close button
function w3_close() {
	console.log('js');
	let mySidebar = document.getElementById("mySidebar");

	// Get the DIV with overlay effect
	let overlayBg = document.getElementById("myOverlay");
	let main = document.getElementById("main");
	mySidebar.style.display = "none";
	overlayBg.style.display = "none";
	mySidebar.style.width = "0px";
}
let overlayBg = document.getElementById("myOverlay");

var _img = document.getElementById('avatar_inicio');
overlayBg.style.display = "none";
var newImg = new Image;

newImg.onload = function() {
	let formulario_bebe = document.querySelector(".formulario_bebe");
	formulario_bebe.style.display = "none";
	let cuerpo = document.getElementById("cuerpo");
	cuerpo.style.display = "block";
	text();

	// clear_url_img();

	navegacion_inicio();

	inicio();

	btn_registrarce();

	fun_registrase();
	inicio_de_sesion();

	let binbenida_usuario = document.querySelectorAll(".binbenida_usuario");
	console.log(binbenida_usuario);
}


newImg.src = './img/img_avatar4.png';

let registro_inicio_sesion = document.getElementById("registro_inicio_sesion");

registro_inicio_sesion.addEventListener("click", function(argument) {
	let existe_usuario = document.getElementById('existe_usuario');
	let error_server = document.getElementById('error_server');
	let bienvenida_inicio = document.getElementById('bienvenida_inicio');
	let registo = document.getElementById('registo');
	let inicio = document.getElementById('inicio');
	let btn_muenu_usuario = document.getElementById('btn_muenu_usuario');
	registo.style.display = "none";
	inicio.style.display = "block";
	existe_usuario.style.display = "none";
	error_server.style.display = "none";
	bienvenida_inicio.style.display = "none";
	btn_muenu_usuario.style.display = "none";
});