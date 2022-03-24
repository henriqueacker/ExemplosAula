<?php
class Usuario{
	private $id;
	private $senha;
	private $nome;
	private $email;
	
	public function __get($atributo){
		return $this->$atributo;
	}
	public function __set($atributo, $valor){
		$this->$atributo=$valor;
	}
	public function __toString(){
		return $this->nome;
	}
	public function logar(){
		$_SESSION['usuario']=serialize($this);
	}
	public static function deslogar(){
		unset($_SESSION['usuario']);
	}
	public static function obterUsuarioLogado(){
		if(isset($_SESSION['usuario'])){
			$user = unserialize($_SESSION['usuario']);
			return $user;
		}else
			return FALSE;
	}
}
?>