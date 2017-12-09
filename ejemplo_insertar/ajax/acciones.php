<?php 
	switch ($_GET["accion"]) {
		case '1':
			include_once("../class/class-usuario.php");
			include_once("../class/class-conexion.php");
			
			$conexion = new Conexion();
			$conexion->establecerConexion();

			$usuario = new Usuario(
				$_POST["txt-nombre"],
				$_POST["txt-edad"],
				$_POST["txt-genero"],
				$_POST["txt-correo"]
			);
			$usuario->guardarRegistro($conexion);
			$conexion->cerrarConexion();
			break;

		case '2':
		
			break;
		
		default:
			
			break;
	}
?>