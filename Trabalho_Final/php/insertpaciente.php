<?php
//FAZENDO A CONEXÃO COM O BANCO DE DADOS
require_once 'conexao.php';

if (isset($_POST['cadastrar'])) ://VERIFICANDO SE O BOTÃO CADASTRAR FOI ACIONADO
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

    $i = "SELECT * FROM paciente WHERE nome = '$nome'";//COMANDO SQL BUSCAR NOMES DA TABELA PACIENTE
    $resultado = mysqli_query($conexao, $i);
    $dados = mysqli_num_rows($resultado);
    //VERIFICANDO SE EXISTE PACIENTES
    if ($dados == 1) {
        echo '<script>  alert("Paciente ja existe! ");history.go(-1);</script>';//JAVASCRIPT COM MENSAGEM E RETORNANDO A PÁGINA
    } else {
        //COMANDO SQL PARA INSERIR PACIENTE
        $sql = "INSERT INTO paciente (id,nome,telefone,telefone2,idade,RG,rua,bairro,cidade) VALUES('$id', '$nome','$telefone','$telefone2','$idade','$RG','$rua','$bairro','$cidade')";
         //VERIFICANDO SE O COMANDO FOI INSERIDO CORRETO
        if (mysqli_query($conexao, $sql)) {
            echo '<script>  alert("Paciente cadastrado com sucesso!");history.go(-1) ;</script>';

        } else {
            echo "Error ao cadastrar " . $sql . "<br>" . mysqli_error($conexao);// MENSAGEM DE ERRO CASO FALHE O COMANDO SQL
        }
        mysqli_close($conexao); //FECHANDO A CONEXAO
    }
    endif;

?>
    

