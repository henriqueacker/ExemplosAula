<?php

	class Imagem{
		private $id;
		private $nomedaimagem;
		private $caminho;
		private $usuario;
		private $data;
		
		
		public function __construct($caminho,$nomedaimagem){
			$this->caminho= $caminho;
			$this->nomedaimagem= $nomedaimagem;
		}
		//metodo magico para set e gets(aplicado a todos os atributos aplicação mais lenta)
		public function __set($atributo, $valor){
			$this->$atributo=$valor;
		}
		public function __get($atributo){
			return $this->$atributo;
		}

		//public function geraLink(){
		public function __toString(){
			return "<img src='$this->caminho' alt='$this->nomedaimagem' width='200' height='200' />";
		}
	}
	
?>