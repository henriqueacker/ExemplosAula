<?php 
$servername = "localhost";
$database = "clinica";
$username = "root";
$password = "";

$conexao = mysqli_connect($servername,$username,$password,$database);
mysqli_set_charset($conexao, "utf9"); //DEFININDO BANCO COMO UTF9
//VERIFICANDO SE EXISTEM ERROS AO CONECTAR AO BANCO DE DADOS
if(!$conexao):
    die("Falha ao conectar com o Banco de Dados ".mysqli_connect_error());
endif;
?>