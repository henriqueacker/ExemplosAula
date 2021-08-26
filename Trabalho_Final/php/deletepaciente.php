<?php
//FAZENDO A CONEXÃO COM O BANCO DE DADOS
require_once 'conexao.php';
$id = $_GET['id'];// PEGANDO O ID VIA GET
$sql = 'DELETE FROM paciente WHERE id = '.$id;   //COMANDO SQL PARA DELETAR DO BANCO ATRAVES DO GET
//VERIFICANDO SE O COMANDO FOI INSERIDO CORRETO
if (mysqli_query($conexao, $sql)) {
    header('Location: ../cadastrarpaciente.php');// RETORNANDO PARA PAGINA CADASTRAR PACIENTE
} else{
    echo "Error ao deletar ".$sql."<br>". mysqli_error($conexao);// RETORNANDO UM ERRO CASO OCORRA
}
mysqli_close($conexao);//FECHANDO A CONEXAO
?>
