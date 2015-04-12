<!DOCTYPE html>
<html>
<head>
	<title>Probando</title>
</head>
<body>
	<?php
	abstract class Trabajador {
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
    $emp = new Empleado("Kevin Abreu", 8000);
    echo $emp->retornar_sueldo() . "<hr/>" ;
    $ger = new Gerente("Culo", 324234234);
    echo $ger->retornar_sueldo() . "<br/>";
	/*$tra = new Trabajador("Kevin Abreu", 6500);
	echo $tra->retornar_sueldo();*/
    if ($emp instanceof Empleado) {
        echo "Eres rolo e marico jijiji";
    } else {
        echo "Pertenece a otra clase";
    }
	?>
</body>
</html>