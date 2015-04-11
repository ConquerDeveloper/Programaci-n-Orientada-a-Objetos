<?php
class pagina {
	private $titulo;
	private $posicion;
	public function __construct($tit, $pos) {
		$this->titulo = $tit;
		$this->posicion = $pos;
	}
	public function imprimir() {
		?>
		<div align="<?php echo $this->posicion; ?> "> <?php echo $this->titulo; ?></div>
		<?php
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
	$pa = new pagina("Mi titulo", "center");
	$pa->imprimir();
	?>
</body>
</html>