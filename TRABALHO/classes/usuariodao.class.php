<?php
include_once 'conexao.class.php';
include_once 'usuario.class.php';
class UsuarioDAO{
	private $conexao;
	
	public function __construct(){
		$this->conexao = Conexao::getInstancia();
	}
	
	public function inserir($usuario){
		$comando = "insert into usuarios (nome,email,senha) values
			   ('$usuario->nome','$usuario->email', '$usuario->senha')";
		$res=$this->conexao->exec($comando);
		return $res;
	}
	
	public function getUsuarios(){
		$comando = "select * from usuarios";
		$resultado = $this->conexao->query($comando);
		$lista = $resultado->fetchAll(PDO::FETCH_CLASS, 'Usuario');
		return $lista;
	}
	public function excluir($id){
		$comando = "delete from usuarios where id='$id'";
		$res=$this->conexao->exec($comando);
		return $res;
	}
	public function consultarUsuario($email, $senha){
		$comando ="select * from usuarios where email='$email' and senha='$senha'";
		$resultado = $this->conexao->query($comando);
		$usuario = $resultado->fetchObject('Usuario');
		return $usuario;
	}
	public function alterarSenha($id, $senhaAntiga, $novaSenha){
		$comando = "update usuarios set senha='$novaSenha' where id='$id' and senha='$senhaAntiga'";
		$res=$this->conexao->exec($comando);
		return $res;
	}
	public function buscarPorNome($nome){
		$comando= "select * from usuarios where nome like '%$nome%'";
		$resultado=$this->conexao->query($comando);
		$lista=$resultado->fetchAll(PDO::FETCH_CLASS,'Usuario');
		return $lista;
		}	
}
?>