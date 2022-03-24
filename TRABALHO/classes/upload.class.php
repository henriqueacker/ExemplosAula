<?php
	class Upload{
		private $arquivo;
		private $tiposValores;
		private $tamanhoMaximo;
		
		
		public function  __construct($arquivo){
			$this->arquivo = $arquivo;
			$this->tiposValidos= array();
			$this->tamanhoMaximo = 1048576; //1mb padrão
		}
		
		public function __get($atributo){
			return $this->$atributo;
		}
		public function __set($atributo, $valor){
			$this->$atributo=$valor;
		}
		
		public function verificarTamanho(){
			return $this->arquivo['size']<=$this->tamanhoMaximo;
		}
		public function verificarTipo(){
			return in_array($this->arquivo['type'],$this->tiposValidos);
		}
		public function obterExtensao(){
			return pathinfo($this->arquivo['name'], PATHINFO_EXTENSION);
		}
		public function upload($destino){
			return move_uploaded_file($this->arquivo['tmp_name'],$destino);
		}		
	}
?>