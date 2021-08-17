function text(argument) {
	console.log('Funciones');
}

function clear_url_img(argument) {
	let imahgenes = document.querySelectorAll("img");

	for (var i = 0; i < imahgenes.length; i++) {
		console.log(imahgenes[i]);
	}
}

function navegacion_inicio(argument) {
	//  Crear algoritmo para colocar todos las ventanas en none y solo na nesesaria en block 
	// ---------------------------------------------------------
	let panel_usuario = document.querySelector(".panel_usuario");
	// console.log(panel_usuario);
	// panel_usuario.style.display = "none";	
	let menu_navegacion = document.querySelector(".menu_navegacion");
	console.log(menu_navegacion);
	menu_navegacion.style.display = "block";
	// ---------------------------------------------------------

	let iniciar_session = document.getElementById("iniciar_session");
	let inicio = document.getElementById("inicio");
	let registo = document.getElementById("registo");
	// console.log(iniciar_session);


	iniciar_session.addEventListener("click", function(argument) {
		inicio.style.display = "block";
		registo.style.display = "none";



	});

}

function inicio(argument) {
	let main = document.getElementById("main");
	let mySidebar = document.getElementById("mySidebar");
	let cuerpo = document.getElementById("cuerpo");
	let inicio = document.getElementById("inicio");
	let registo = document.getElementById("registo");
	mySidebar.style.display = "none";
	mySidebar.style.width = "0px";
	main.style.marginLeft = "0px";
	inicio.style.display = "none";
	registo.style.display = "none";
	// cuerpo.style.display = "block";
	inicio.style.display = "block";

}

function btn_registrarce(argument) {
	let registrase = document.getElementById("registrase");
	let inicio = document.getElementById("inicio");
	let registo = document.getElementById("registo");
	// console.log(registrase);


	registrase.addEventListener("click", function(argument) {
		inicio.style.display = "none";
		registo.style.display = "block";



	});


}

function fun_registrase(argument) {
	let btn_enviar = document.querySelector("#registo .enviar");
	let txt_registro_nombre =
		document.querySelector("#registo .registro_nombre");
	// let txt_registro_correo =
	// 	document.querySelector("#registo .registro_correo");
	let txt_registro_pass =
		document.querySelector("#registo .registro_pass");
	let txt_registro_repite_pass =
		document.querySelector("#registo .registro_repite_pass");
	txt_registro_nombre.value = "";
	// txt_registro_correo.value = "";
	txt_registro_pass.value = "";
	txt_registro_repite_pass.value = "";
	// console.log(txt_registro_nombre.value);
	// console.log(txt_registro_correo.value);
	// console.log(txt_registro_pass.value);
	// console.log(txt_registro_repite_pass.value);
	// ====================================================
	btn_enviar.addEventListener("click", function(argument) {
		console.log(btn_enviar);
		console.log(txt_registro_nombre.value);
		// console.log(txt_registro_correo.value);
		console.log(txt_registro_pass.value);
		console.log(txt_registro_repite_pass.value);

		// let formData = new FormData();
		// formData.append("nombre_usuario", nombre_usuario.value);
		// formData.append("correo", correo.value);
		// formData.append("pass", pass.value);
		let nombre_usuario = txt_registro_nombre.value;
		// let correo = txt_registro_correo.value;
		let pass = txt_registro_pass.value;
		let repite_pass = txt_registro_repite_pass.value;
		let formData = new FormData();
		formData.append("nombre_usuario", nombre_usuario);
		// formData.append("correo", correo);
		formData.append("pass", pass);
		// let datos = {
		// 	nombre_usuario: nombre_usuario,
		// 	correo: correo,
		// 	pass: pass,

		// }
		// console.log(datos);

		if (nombre_usuario == "" || pass == "" || repite_pass == "") {
			console.log('debe relenar todos los campos para registrarse');
		} else {
			console.log('perfecto todo lleno');

			let mensaje_repite_pass = document.querySelector(".mensaje_repite_pass");
			if (pass == "" || mensaje_repite_pass == "") {
				console.log('Campos vacios del pass');
			} else {

				if (pass == repite_pass) {
					mensaje_repite_pass.style.color = "red";
					mensaje_repite_pass.innerText = "";


					// alert("enviado");
					inserta_usuario(formData);
				} else {
					mensaje_repite_pass.style.color = "red";
					mensaje_repite_pass.innerText = "las cointraseñas no coinciden";
					// alert("las cointraseñas no coinciden");
				}

			}

		}



		function inserta_usuario(datos) {


			$.ajax({
				url: 'php/registro_usuario.php',
				type: 'POST',
				data: datos,
				contentType: false,
				cache: false,
				processData: false,
			}).done(function() {

				console.log("success");

			}).fail(function(error) {

				console.log(error);

			}).always(function(resultado) {

				console.log(resultado);

				const json = resultado;
				const obj = JSON.parse(json);

				console.log(obj.respuesta);

				let existe_usuario = document.getElementById('existe_usuario');
				let error_server = document.getElementById('error_server');
				let inicia_sesion = document.getElementById('inicia_sesion');
				let registo = document.getElementById('registo');
				let inicio = document.getElementById('inicio');
				let btn_muenu_usuario = document.getElementById('btn_muenu_usuario');
				existe_usuario.style.display = "none";
				error_server.style.display = "none";
				inicia_sesion.style.display = "none";
				btn_muenu_usuario.style.display = "none";


				if (obj.respuesta == "existe") {
					existe_usuario.style.display = "block";
					error_server.style.display = "none";
					inicia_sesion.style.display = "none";
					registo.style.display = "none";
					inicio.style.display = "none";

				} else if (obj.respuesta == "error") {
					existe_usuario.style.display = "none";
					error_server.style.display = "block";
					inicia_sesion.style.display = "none";
					registo.style.display = "none";
					inicio.style.display = "none";
				} else if (obj.respuesta == "insertado") {

					registo.style.display = "none";
					inicio.style.display = "none";
					existe_usuario.style.display = "none";
					error_server.style.display = "none";
					inicia_sesion.style.display = "block";
					btn_muenu_usuario.style.display = "block";

				}

			});


		}



	});

	// ====================================================

}


function inicio_de_sesion(argument) {
	let btn_inicio_sesion = document.getElementById("btn_inicio_sesion");
	let nombre_usuario_inicio = document.getElementById("nombre_usuario_inicio");
	let pass_inicio_session = document.getElementById("pass_inicio_session");
	btn_inicio_sesion.addEventListener("click", function(argument) {
		console.log('inisiar sesion');
		console.log(this);
		console.log(nombre_usuario_inicio.value);
		console.log(pass_inicio_session.value);
		let formData = new FormData();
		formData.append("nombre_usuario", nombre_usuario_inicio.value);
		// formData.append("correo", correo);
		formData.append("pass", pass_inicio_session.value);

		function inicia_sesion(datos) {
			$.ajax({
				url: 'php/inicio_sesion.php',
				type: 'POST',
				data: datos,
				contentType: false,
				cache: false,
				processData: false,
			}).done(function() {

				console.log("success");

			}).fail(function(error) {

				console.log(error);

			}).always(function(resultado) {

				console.log(resultado);

				const json = resultado;
				const obj = JSON.parse(json);

				console.log(obj.respuesta);

				if (obj.respuesta == 1) {
					// alert("logeado");

					let formulario_bebe = document.querySelector(".formulario_bebe");
					let imagenes_galeria = document.querySelector(".imagenes_galeria");

					let inicio = document.getElementById('inicio');
					let bienvenida_inicio = document.getElementById('bienvenida_inicio');
					let btn_muenu_usuario = document.getElementById('btn_muenu_usuario');

					// let menu_navegacion=
					// imagenes_galeria.style.display = "none";
					inicio.style.display = "none";

					// formulario_bebe.style.display = "block";
					bienvenida_inicio.style.display = "block";
					btn_muenu_usuario.style.display = "block";
				} else if (obj.respuesta == 0) {
					alert("No esta logeado");
				}

				// let existe_usuario = document.getElementById('existe_usuario');
				// let error_server = document.getElementById('error_server');
				// let inicia_sesion = document.getElementById('inicia_sesion');
				// let registo = document.getElementById('registo');
				// let inicio = document.getElementById('inicio');
				// let btn_muenu_usuario = document.getElementById('btn_muenu_usuario');
				// existe_usuario.style.display = "none";
				// error_server.style.display = "none";
				// inicia_sesion.style.display = "none";
				// btn_muenu_usuario.style.display = "none";


				// if (obj.respuesta == "existe") {
				// 	existe_usuario.style.display = "block";
				// 	error_server.style.display = "none";
				// 	inicia_sesion.style.display = "none";
				// 	registo.style.display = "none";
				// 	inicio.style.display = "none";

				// } else if (obj.respuesta == "error") {
				// 	existe_usuario.style.display = "none";
				// 	error_server.style.display = "block";
				// 	inicia_sesion.style.display = "none";
				// 	registo.style.display = "none";
				// 	inicio.style.display = "none";
				// } else if (obj.respuesta == "insertado") {

				// 	registo.style.display = "none";
				// 	inicio.style.display = "none";
				// 	existe_usuario.style.display = "none";
				// 	error_server.style.display = "none";
				// 	inicia_sesion.style.display = "block";
				// 	btn_muenu_usuario.style.display = "block";

				// }

			});

		}

		inicia_sesion(formData);

	});

}