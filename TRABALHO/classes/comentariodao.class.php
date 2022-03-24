<?php
include_once 'conexao.class.php';
include_once 'comentario.class.php';

class ComentarioDAO{
	private $conexao;
	
	public function __construct(){
		$this->conexao = Conexao::getInstancia();
	}
	
	public function inserir($comentario){
	$comando = "insert into comentario (texto,usuario,data) values
			   ('$comentario->texto','$comentario->usuario', '$comentario->data')";
		$res=$this->conexao->exec($comando);
		return $res;
	}
	public function excluir($id){
		$comando = "delete from comentario where id='$id'";
		$res=$this->conexao->exec($comando);
		return $res;
	}
}
?>
		