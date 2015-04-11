<!DOCTYPE html>
<html>
<head>
	<title>Probando</title>
</head>
<body>
	<?php
	class Valores {
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
			echo $this->resultado;
		}
	}
	class Sumar extends Valores {
		public function operar() {
			$this->resultado = $this->valor1 + $this->valor2;
		}
	}
	class Resta extends Valores {
		public function operar() {
			$this->resultado = $this->valor1 - $this->valor2;
		}
	}
	$suma = new Sumar();
	$suma->cargar1("25");
	$suma->cargar2("34");
	$suma->operar();
	$suma->imprimir();
	echo "<hr/>";
	$resta = new Resta();
	$resta->cargar1("5");
	$resta->cargar2("3");
	$resta->operar();
	$resta->imprimir();
	?>
</body>
</html>