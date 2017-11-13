<?php 
	include_once("class/class-conexion.php");
	$conexion = new Conexion();
	$conexion->establecerConexion();

	$resultadoUsuario = $conexion->ejecutarInstruccion("SELECT nombre_usuario, edad, genero, correo_electronico FROM tbl_usuarios");
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
	       	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	       	<meta name="viewport" content="width=device-width, initial-scale=1">
	       	<link href="css/bootstrap.min.css" rel="stylesheet"> 
		
		<title>Ejemplo conexion y consulta SQL</title>
		
	</head>
	<body>
		<?php 
			while ($fila = $conexion->obtenerRegistro($resultadoUsuario)) {
	                   	$fila = array("Nombre" => $fila["nombre_usuario"],"Edad" => $fila["edad"],"Genero" => $fila["genero"],"Correo" => $fila["correo_electronico"]);
				foreach ($fila as $key => $value) {
					echo "$key: $value <br>";
				}
				echo "<br>";
			}
		?>			
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
<?php 
	$conexion->cerrarConexion();
 ?>