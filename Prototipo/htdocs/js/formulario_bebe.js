console.log('formulario_bebe');

function modal_bagregar_bebe(argument) {
	let btn_agregar_bebe =
		document.querySelector(".btn_agregar_bebe");

	let imagenes_galeria =
		document.querySelector(".imagenes_galeria");

	let formulario_bebe =
		document.querySelector(".formulario_bebe");

	let bienvenida_inicio =
		document.getElementById("bienvenida_inicio");

	btn_agregar_bebe.addEventListener(
		"click",
		function() {

			imagenes_galeria.style.display = "none";
			formulario_bebe.style.display = "block";
			bienvenida_inicio.style.display = "none";
			// inicio.style.display = "none";
		});

}