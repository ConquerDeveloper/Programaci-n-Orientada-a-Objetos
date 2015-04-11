<!DOCTYPE html>
<html>
<head>
	<title>Probando</title>
</head>
<body>
	<?php
	class Trabajador {
		protected $nombre;
		protected $sueldo;
		public function __construct($nom, $su) {
			$this->nombre = $nom;
			$this->sueldo = $su;
		}
		public function retornar_sueldo() {
			return $this->sueldo;
		}
	}
	class Empleado extends Trabajador {

	}
	class Gerente extends Trabajador {
		
	}
	/*
	$tra = new Trabajador("Kevin Abreu", 6500);
	echo $tra->retornar_sueldo();*/
	?>
</body>
</html>