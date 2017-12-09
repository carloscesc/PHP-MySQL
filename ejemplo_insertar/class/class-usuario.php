<?php
	class Usuario{
		private $nombreUsuario;
		private $edad;
		private $genero;
		private $correo;

		public function __construct(
					$nombreUsuario,
					$edad,
					$genero,
					$correo){
			$this->nombreUsuario = $nombreUsuario;
			$this->edad = $edad;
			$this->genero = $genero;
			$this->correo = $correo;
		}

		public function getNombreUsuario(){
			return $this->nombreUsuario;
		}

		public function setNombreUsuario($nombreUsuario){
			$this->nombreUsuario = $nombreUsuario;
		}

		public function getEdad(){
			return $this->edad;
		}

		public function setEdad($edad){
			$this->edad = $edad;
		}

		public function getGenero(){
			return $this->genero;
		}
		public function setGenero($genero){
			$this->genero = $genero;
		}

		public function getCorreo(){
			return $this->correo;
		}

		public function setCorreo($correo){
			$this->correo = $correo;
		}

		public function __toString(){
			return "NombreUsuario: " . $this->nombreUsuario . 
				" Edad: " . $this->edad . 
				" Genero: " . $this->genero . 
				" Correo: " . $this->correo;
		}

		public function guardarRegistro($conexion){
			$sql = sprintf(
				"INSERT INTO tbl_usuarios(
					nombre_completo, 
					edad, 
					genero, 
					correo_electronico) 
				VALUES('%s','%s','%s','%s')",
				$conexion->getEnlace()->real_escape_string(stripslashes($this->nombreUsuario)),
				$conexion->getEnlace()->real_escape_string(stripslashes($this->edad)),
				$conexion->getEnlace()->real_escape_string(stripslashes($this->genero)),
				$conexion->getEnlace()->real_escape_string(stripslashes($this->correo))
			);
			$conexion->ejecutarInstruccion($sql);
		}
	}
?>