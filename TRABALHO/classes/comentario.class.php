<?php
	class Comentario{
		private $id;
		private $texto;
		private $usuario;
		private $data;
		
	public function __get($atributo){
		return $this->$atributo;
	}
	public function __set($atributo, $valor){
		$this->$atributo=$valor;
	}
	public function __toString(){
		return $this->texto;
	}
	
}
	?>