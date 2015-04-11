<!DOCTYPE html>
<html>
<head>
	<title>Pagina con POO</title>
</head>
<body>
	<?php
	class Cabecero {
		private $texto;
		public function __construct($titulo) {
			$this->texto = $titulo;
		}
		public function graficar() {
			?>
			<h1> <?php echo $this->texto; ?> </h1>
			<?php
		}
	}
	//***********************************************************
	class Cuerpo {
		private $lineas = array();
		public function iniciar_linea($li) {
			$this->lineas[] = $li;
		}
		public function graficar() {
			for ($i=0; $i<sizeof($this->lineas); $i++) { 
				?>
				<p><?php echo $this->lineas[$i];?></p>
				<?php
			}
		}
	}
	//***********************************************************
	class Footer {
		private $texto;
		public function __construct($cadena) {
			$this->texto = $cadena;
		}
		public function graficar() {
			?>
			<hr/>
			<?php echo $this->texto; ?>
			<?php
		} 
	}
	//************************************************************
	class Pagina {
		private $cabecera;
		private $body;
		private $pie;
		public function __construct($texto_cabecero, $texto_pie) {
			$this->cabecera = new Cabecero($texto_cabecero);
			$this->body = new Cuerpo();
			$this->pie = new Footer($texto_pie);
		}
		public function iniciar_cuerpo($texto) {
			$this->body->iniciar_linea($texto);
		}
		public function vista() {
			$this->cabecera->graficar();
			$this->body->graficar();
			$this->pie->graficar();
		}
	}
	//************************************************************
	$pag = new Pagina("Mi titulo", "Mi pie de pagina");
	$pag->iniciar_cuerpo("Contenido del cuerpo");
	$pag->vista();
	?>
</body>
</html>