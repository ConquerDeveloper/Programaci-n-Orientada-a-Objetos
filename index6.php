<!DOCTYPE html>
<html>
<head>
	<title>Jijijiji</title>
</head>
<body>
	<?php
	class Operacion {
		protected $valor1;
		protected $valor2;
		protected $resultado;
		public function __construct($v1,$v2) {
			$this->valor1 = $v1;
			$this->valor2 = $v2;
		}
		public function imprimir() {
			return $this->resultado;
		}
	}
	class Suma extends Operacion {
		protected $titulo;
		public function __construct($v1,$v2,$tit) {
			parent::__construct($v1,$v2);
			$this->titulo = $tit;
		}
		public function operar() {
			$this->resultado = $this->valor1 + $this->valor2;
		}
		public function imprimir() {
			echo $this->titulo;
			echo "La suma de los valores $this->valor1 + $this->valor2 es: ";
			echo parent::imprimir();
		}
	}
	$suma = new Suma(2,3,"Hola");
	$suma->operar();
	$suma->imprimir();
	?>
</body>
</html>