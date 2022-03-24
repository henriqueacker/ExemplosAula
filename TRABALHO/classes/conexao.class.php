<?php
/*
Criamos uma classe conexão que estende a classe PDO, tornando-se
sua 'filha', tendo assim todas as funcionalidades da classe PDO*/
class Conexao extends PDO{

	//atributo de classe que representa a instância de conexão
	private static $instancia;
	
	public function Conexao($dns, $user, $pass){
		//acessa o construtor da classe pai, no caso a PDO
		parent::__construct($dns, $user, $pass);
	}
	
	public static function getInstancia(){
		//verifica se já não há uma instância de conexão criada
		if(!isset(self::$instancia)){
			try{//se não há tenta criar uma nova conexão
				self::$instancia=new Conexao(
				"mysql:dbname=teste;host=localhost",
				"root","");
			}catch(Exception $e){
				//caso ocorra algum erro a aplicação morre.
				die('Erro ao conectar na base de dados');
			}
		}
		return self::$instancia;
	}
}
?>