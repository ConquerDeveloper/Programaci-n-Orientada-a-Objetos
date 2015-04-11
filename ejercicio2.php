<?php
class pagina {
	private $titulo;
	private $posicion;
	public function iniciar ($tit, $pos) {
		$this->titulo = $tit;
		$this->posicion = $pos;
	}
	public function imprimir () {
		echo '<div align=' . $this->posicion . '>' . $this->titulo . '</div>';
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 2</title>
</head>
<body>
	<?php
	$pa = new pagina();
	$pa->iniciar("Mi titulo", "center");
	$pa->imprimir();
	?>
</body>
</html>