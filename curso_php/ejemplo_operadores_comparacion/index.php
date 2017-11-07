<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
	       	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	       	<meta name="viewport" content="width=device-width, initial-scale=1">
	       	<link href="css/bootstrap.min.css" rel="stylesheet"> 
	       	<link rel="stylesheet" type="text/css" href="css/custom-operadores.css">
		
		<title>Ejemplo operadores de comparacion</title>
		
	</head>
	<body>
		<form action="" method="POST">
			<table class="formulario-tabla" align="center">
				<tr>
					<td class="columna-1">Nombre:</td>
					<td><label for="txt-nombre"></label><input type="text" name="txt-nombre" id="txt-nombre"></td>
				</tr>
				<tr>
					<td>Edad:</td>
					<td><label for="txt-edad"></label><input type="text" name="txt-edad" id="txt-edad"></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" class="btn btn-primary" name="btn-enviar" id="btn-enviar" value="Enviar"></td>
				</tr>
			</table>
		</form>
		<?php 
			/* -----  Operadores de comparacion -----
				$var1 == $var2	---> igual que ---> TRUE si las dos variables son verdaderas 
				$var1 === $var2	---> identica que ---> TRUE si las dos variables son verdaderas y del mismo tipo
				$var1 != $var2     ---> diferente que ---> TRUE si las dos variables no son iguales
				$var1 <> $var2    ---> diferente que ---> TRUE si las dos variables no son iguales y ademas no son del mismo tipo
				$var1 < $var2      ---> menor que ---> TRUE si $var1 es menor que $var2
				$var1 > $var2      ---> mayor que ---> TRUE si $var1 es mayor que $var2
				$var1 <= $var2    ---> menor o igual que ---> TRUE si $var1 es menor o igual que $var2
				$var1 >= $var2    ---> mayor o igual que ---> TRUE si $var1 es mayor o igual que $var2

				isset() ---> nos permite comprobar si la parametros estan definidos, obtendremos un TRUE
				$_POST[] ---> es una variable global que nos permite enviar la informacion que tenemos por el lado del servido, no vista en la URL del 
					             navegador, se puede acceder desde cualquier parte del script
			*/ 

			if (isset($_POST["btn-enviar"])) { 
				$nombre = $_POST["txt-nombre"];
				$edad = $_POST["txt-edad"];
				
				if ($nombre == "alucard21" && $edad >= 18){
					echo '<p class="validado">Pudo ingresar</p>';
					echo "No ingreso usuario";
				} else {
					echo '<p class="no-validado">No pudo ingresar</p>';
				}
			} 
		 ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>