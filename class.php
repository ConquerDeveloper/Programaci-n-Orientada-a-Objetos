<?php
class persona {
	private $nombre = array();
	public function iniciar ($nom) {
		$this->nombre = $nom;
	}
	public function listar_nombres() {
		//return count($this->nombre);
		return $this->nombre;
	}
	public function contar_nombres() {
		return count($this->nombre);
	}
}
$persona = new persona();
?>