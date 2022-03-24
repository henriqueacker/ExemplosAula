<?php
include_once 'conexao.class.php';
include_once 'imagens.class.php';

class ImagensDAO{
	private $conexao;
	
	public function __construct(){
		$this->conexao = Conexao::getInstancia();
	}
	
	public function inserir($imagens){
	$comando = "insert into imagens (nomedaimagem,usuario,data) values
			   ('$imagens->nomedaimagem','$imagens->usuario', '$imagens->data')";
		$res=$this->conexao->exec($comando);
		return $res;
	}
	public function excluir($id){
		$comando = "delete from imagens where id='$id'";
		$res=$this->conexao->exec($comando);
		return $res;
	}
}
?>