<?php
//FAZENDO A CONEXÃO COM O BANCO DE DADOS
require_once 'conexao.php';
if (isset($_POST['editar'])) ://VERIFICANDO SE O BOTÃO EDITAR FOI ACIONADO
     //RECEBENDO OS DADOS
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $telefone2 = $_POST['telefone2'];
    $idade = $_POST['idade'];
    $RG = $_POST['RG'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    
    //COMANDO SQL PARA ALTERAR PACIENTE
    $sql = "UPDATE paciente SET id = '$id', nome = '$nome', telefone = '$telefone', telefone2 = '$telefone2', idade = '$idade', RG = '$RG', rua = '$rua' , bairro = '$bairro' , cidade = '$cidade' WHERE id= '$id'";
    //VERIFICANDO SE O COMANDO FOI INSERIDO CORRETO
    if (mysqli_query($conexao, $sql)) :
        header('Location: ../cadastrarpaciente.php'); //RETORNANDO PARA A PAGINA CADASTRAR PACIENTE
    else :
        echo "Error ao Alterar " . $sql . "<br>" . mysqli_error($conexao); //MENSAGEM DE ERRO CASO FALHE O COMANDO SQL
    endif;
endif;

?>