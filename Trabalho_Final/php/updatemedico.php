<?php
//FAZENDO A CONEXÃO COM O BANCO DE DADOS
require_once 'conexao.php';
if (isset($_POST['editar'])) ://VERIFICANDO SE O BOTÃO EDITAR FOI ACIONADO
     //RECEBENDO OS DADOS
    $nome = $_POST['nome'];
    $crm = $_POST ['crm'];
    $telefone = $_POST['telefone'];
    $telefone2 = $_POST ['telefone2'];
    $especialidade = $_POST['especialidade'];
    
    //COMANDO SQL PARA ALTERAR MEDICO
    $sql = "UPDATE medico SET crm = '$crm', nome = '$nome', telefone = '$telefone', telefone2 = '$telefone2', especialidade = '$especialidade' WHERE crm= '$crm'";

    //VERIFICANDO SE O COMANDO FOI INSERIDO CORRETO
    if (mysqli_query($conexao, $sql)) :
        header('Location: ../cadastrarmedico.php');//RETORNANDO PARA A PAGINA CADASTRAR MEDICO
    else :     
    echo "Error ao Alterar ".$sql."<br>". mysqli_error($conexao);// MENSAGEM DE ERRO CASO FALHE O COMANDO SQL
    endif;
endif;

?>