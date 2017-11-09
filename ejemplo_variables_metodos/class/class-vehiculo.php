<?php
	class Vehiculo{
		private $precioBase;

		public function __construct($precioBase){
			$this->precioBase = $precioBase;
		}

		public function getPrecioBase(){
			return $this->precioBase;
		}

		public function setPrecioBase($precioBase){
			$this->precioBase = $precioBase;
		}

		function compraVehiculo($gama){
			if ($gama == "urbano"){
				$this->precioBase = 10000;		
			}else if ($gama == "compacto"){
				$this->precioBase = 20000;	
			}else if ($gama == "berlina"){
				$this->precioBase = 30000;	
			}
		}
		
		function climatizador(){		
			$this->precioBase += 2000;	
		}
		
		
		function navegadorGPS(){	
			$this->precioBase += 2500;		
		}
		
		function tapiceriaCuero($color){
			if ($color == "blanco"){
				$this->precioBase += 3000;
			}else if ($color == "beige"){
				$this->precioBase += 3500;
			}
			else{
				$this->precioBase += 5000;	
			}	
		}
			
		public function __toString(){
			return "Precio Base: " . $this->precioBase;
		}
	}
?>