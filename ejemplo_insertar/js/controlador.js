$(document).ready(function(){
	$("#btn-guardar").click(function(){
		var parametros = "txt-nombre=" + $("#txt-nombre").val() + "&" +
					"txt-edad=" + $("#txt-edad").val() + "&" +
					"txt-genero=" + $("#txt-genero").val() + "&" +
					"txt-correo=" + $("#txt-correo").val();
		$.ajax({
			// tener mucho cuidado con la ruta, indicar si es necesario el nombre de la carpeta en donde se esta trabajando
			url: "../ejemplo_insertar/ajax/acciones.php?accion=1", 
			method: "POST",
			data: parametros
		});
	});
});