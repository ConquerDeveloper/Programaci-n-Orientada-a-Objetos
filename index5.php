<!DOCTYPE html>
<html>
<head>
	<title>Probando plo0x :v gggg oshe zy v-veh</title>
</head>
<body>
	<?php
	class Operacion {
		protected $valor1;
		protected $valor2;
		protected $resultado;
		public function cargar1($v1) {
			$this->valor1 = $v1;
		}
		public function cargar2($v2) {
			$this->valor2 = $v2;
		}
		public function imprimir() {
			return $this->resultado;
		}
	}
	class Suma extends Operacion {
		public function operar() {
			return $this->resultado = $this->valor1 + $this->valor2;
		}
		public function imprimir() {
			echo "La suma de los valores $this->valor1 y $this->valor2 es: ";
			echo parent::imprimir();
		}
	}
	$suma = new Suma;
	$suma->cargar1(10);
	$suma->cargar2(20);
	$suma->operar();
	$suma->imprimir();
	
	?>
</body>
</html>