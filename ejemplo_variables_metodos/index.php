<?php 
	include_once("class/class-vehiculo.php");
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
	       	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	       	<meta name="viewport" content="width=device-width, initial-scale=1">
	       	<link href="css/bootstrap.min.css" rel="stylesheet"> 
		
		<title>Ejemplo Clases</title>
		
	</head>
	<body>
		<?php
			/*Para importar un archivo externo PHP podemos utilizar las sentencias:
				* include: incluye el archivo y si falla permite con el codigo continue -> include("ruta del archivo");
				* include_once: incluye el archivo y solo una vez lo incluira -> include_once("ruta del archivo");
				*require: incluye el archivo pero si falla, el codigo que este de bajo de la sentencia no continuara -> require("ruta del archivo);    
			*/

			$v = new Vehiculo(""); //Para poder llamar o instaciar la clase utilizamos la siguiente sintaxis -> $nombreVariable = new nombreClase(parametros);

			$v->compraVehiculo("berlina"); //sintaxis del llamado de una funcion de la clase -> $nombreVariable->nombreFuncion(parametros); 
			$v->climatizador();
			$v->navegadorGPS();
			$v->tapiceriaCuero("blanco");
			
			echo $v;
		 ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>