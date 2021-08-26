<?php
//FAZENDO A CONEXÃO COM O BANCO DE DADOS
require_once 'conexao.php';

if (isset($_POST['cadastrar'])) ://VERIFICANDO SE O BOTÃO CADASTRAR FOI ACIONADO
    //RECEBENDO OS DADOS
    $nome = $_POST['nome'];
    $crm = $_POST['crm'];
    $telefone = $_POST['telefone'];
    $telefone2 = $_POST['telefone2'];
    $especialidade = $_POST['especialidade'];

    $i = "SELECT * FROM medico WHERE crm = '$crm'"; //COMANDO SQL BUSCAR CRMs DA TABELA MEDICO
    $resultado = mysqli_query($conexao, $i);
    $dados = mysqli_num_rows($resultado);
    //VERIFICANDO SE EXISTE CRM NA TABELA MEDICO
    if ($dados == 1) {
        echo '<script>  alert("Medico ja existe! ");history.go(-1);</script>';//JAVASCRIPT COM MENSAGEM E RETORNANDO A PÁGINA
    } else {
        $sql = "INSERT INTO medico (crm,nome,telefone,telefone2,especialidade ) VALUES('$crm', '$nome','$telefone','$telefone2','$especialidade')";//COMANDO SQL PARA INSERIR MEDICO
        //VERIFICANDO SE O COMANDO FOI INSERIDO CORRETO
        if (mysqli_query($conexao, $sql)) {
            echo '<script>  alert("Medico cadastrado com sucesso!");history.go(-1) ;</script>';
        } else {
            echo "Error ao cadastrar " . $sql . "<br>" . mysqli_error($conexao);// MENSAGEM DE ERRO CASO FALHE O COMANDO SQL
        }
        mysqli_close($conexao); //FECHANDO O BANCO DE DAD0S
    }
endif;

?>


