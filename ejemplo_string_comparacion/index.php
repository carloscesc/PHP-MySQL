<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo String</title>
</head>
<body>
	<?php 
		/*Funciones de comparacion de string:
			strcmp
			strcasecmp
		*/
		
		//----- Caso 1: utilizando la funcion ---> strcmp -----
		$variable1 = "casa";
		$variable2 = "Casa";

		$resultado1 = strcmp($variable1, $variable2); //strcmp es una funcion que compara dos string, dependiendo sin hay mayusculas o miniculas.

		echo "Ejemplo, caso 1 <br>";
		if ($resultado1){
			echo "No coinciden";
		} else{
			echo "Si coinciden";
		}

		echo "<br><br>";

		// ----- Caso 2: utilizando la funcion ---> strcasecmp -----
		$variable3 = "mundo";
		$variable4 = "Mundo";

		$resultado2 = strcasecmp($variable3, $variable4); //strcasemp es una funcion que compara dos string, ignorando sin hay mayusculas o minusculas.

		echo "Ejemplo, caso 2 <br>";
		if ($resultado2){
			echo "No coinciden";
		} else{
			echo "Si coinciden ";
		}
 	?>
</body>
</html>