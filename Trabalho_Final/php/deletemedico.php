<?php
//FAZENDO A CONEXÃO COM O BANCO DE DADOS
require_once 'conexao.php';
$crm = $_GET['crm'];// PEGANDO O CRM VIA GET
$sql = 'DELETE FROM medico WHERE crm = '.$crm;   //COMANDO SQL PARA DELETAR DO BANCO ATRAVES DO GET
//VERIFICANDO SE O COMANDO FOI INSERIDO CORRETO
if (mysqli_query($conexao, $sql)) {
    header('Location: ../cadastrarmedico.php');// RETORNANDO PARA PAGINA CADASTRAR MEDICO
} else{
    echo "Error ao deletar ".$sql."<br>". mysqli_error($conexao);// RETORNANDO UM ERRO CASO OCORRA
}
mysqli_close($conexao);//FECHANDO A CONEXAO
?>

