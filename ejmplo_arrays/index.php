<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
	       	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	       	<meta name="viewport" content="width=device-width, initial-scale=1">
	       	<link href="css/bootstrap.min.css" rel="stylesheet"> 
		
		<title>Ejemplo de Arrays</title>
		
	</head>
	<body>
		<?php 
			// ----- Arrays Indexados -----
			
			//Ejemplo 1 -> declarar una variable y asignar cada elemento en la variable  
			$semana[] = "Lunes"; //No se necesita poner el indice en el array, PHP por defecto entiende que $semana[] = "Lunes"; es igual al indice 0
			$semana[] = "Martes";
			$semana[] = "Miercoles";
			$semana[] = "Jueves";
			$semana[] = "Viernes";
			echo "<b>Salida de pantalla de arrays Indexados:</b> <br>";
			echo "- Dia de la semana es: $semana[3] <br>";

			//Ejemplo 2 -> Utilizando la palabra reservada array y dentro de los parantesis colocar los valores separados por "," 
			$mes  = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
			echo "- Mes del año es: $mes[6] <br><br>";

			// Recorre un array indexado con for
			echo "<b>Recorrido de un array indexado con bucle for:</b> <br>";
			for ($i = 0; $i < count($mes) ; $i++) { // Utilizamos la funcion count que cuenta los elementos de un array 
				echo "- El mes es: $mes[$i] <br>";
			}
			echo "<br>";

			// ----- Arrays Asociativos -----

			//Ejemplo 1 -> Utilizando la palabra reservada array solo que este caso usamos la siguiente sintaxis ("nombreAsociativo" => "nombreAsignacion")
			$datos = array("nombre" => "Carlos", "apellido" => "Raudales", "deporte" => "Futbol");
			echo "<b>Salida de pantalla de un array asociativo:</b> <br>";
			echo "- Nombre es: " . $datos["nombre"] . "<br><br>";

			/*Recorer un array asociativo con un bucle en este caso con foreach -> foreach ($variable as $key => $value) { instrucciones }
				$variable -> nombre del array, en este ejemplo $datos
				$key y $value -> se les puede dar cualquier nombre 
			*/
			echo "<b>Recorrido de un array asociativo con bucle foreach:</b> <br>";
			foreach ($datos as $datosPersonales => $valores) {
			 	echo "Mi $datosPersonales es: $valores <br>";
			 } 
			 echo "<br>";

			 //Array Multidimensionales

			 // Ejemplo 1 -> Utilizando arrays asociativo 
			 echo '<div style="position: absolute; top: 1%; left: 30%;">';
			 echo "<b>Salida de pantalla de un Array Multidimensional con array asociativo</b> <br>";
			 $aparatosElectronicos = array("telefono" => array("marca" => "Samgsum", "modelo" => "S8", "valor" => 20000), 
			 					   "televisor" => array("marca" => "Sony", "modelo" => "SmartTv", "valor" => 24000), 
			 					   "computadora" => array("marca" => "ASUS", "modelo" => "A8", "valor" => 26000)
								);
			 // list() -> se utiliza para asignar los parametros en una lista & each() -> asigna la llave y el valor de un array a esa lista
			 foreach ($aparatosElectronicos as $producto => $especificaciones) {
			 	echo "Producto es: $producto <br>";
			 	while (list($llave, $valor) = each($especificaciones)) { 
			 		echo "- $llave: $valor <br>";
			 	}
			 	echo "<br>";
			 }
			 echo '</div>';
		 ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html