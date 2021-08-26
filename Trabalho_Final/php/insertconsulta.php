<?php
//FAZENDO A CONEXÃO COM O BANCO DE DADOS
require_once 'conexao.php';

if(isset($_POST['enviar'])): //VERIFICANDO SE O BOTÃO ENVIAR FOI ACIONADO
//RECEBENDO OS DADOS
$paciente = $_POST['nome'];
$medico = $_POST ['medico'];
$especialidade = $_POST['especialidade'];
$data = $_POST ['data'];
$hora = $_POST['hora'];

$i = "SELECT * FROM consulta WHERE  medico='$medico' AND data='$data'AND hora='$hora'"; //COMANDO SQL BUSCAR DADOS DA TABELA CONSULTA
$resultado = mysqli_query($conexao, $i);
$dados = mysqli_num_rows($resultado);
//VERIFICANDO SE EXISTE CONSULTA COM MESMO MÉDICO, HORARIO E DATA
if ($dados == 1) {
    echo '<script>  alert("Horario indisponivel ");history.go(-1);</script>'; //JAVASCRIPT COM MENSAGEM E RETORNANDO A PÁGINA
} else {
$sql = "INSERT INTO consulta (data,hora,medico,paciente,especialidade ) VALUES('$data', '$hora','$medico','$paciente','$especialidade')"; 
//VERIFICANDO SE O COMANDO FOI INSERIDO CORRETO
if (mysqli_query($conexao, $sql)) {
    echo '<script>  alert("Consulta marcada com sucesso!");history.go(-1) ;</script>';
} else{
    echo "Error ao cadastrar ".$sql."<br>". mysqli_error($conexao); // MENSAGEM DE ERRO CASO FALHE O COMANDO SQL
}
mysqli_close($conexao); //FECHANDO A CONEXAO
}
endif;
?>