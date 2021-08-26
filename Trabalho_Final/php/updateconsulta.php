<?php
//FAZENDO A CONEXÃO COM O BANCO DE DADOS
require_once 'conexao.php';
//VERIFICANDO SE O BOTÃO ENVIAR FOI ACIONADO
if (isset($_POST['enviar'])) :
 //RECEBENDO OS DADOS
$paciente = $_POST['nome'];
$medico= $_POST ['medico'];
$data= $_POST['data'];
$hora = $_POST ['hora'];
$especialidade = $_POST['especialidade'];
$id = $_POST['id'];
$i = "SELECT * FROM consulta WHERE  medico='$medico' AND data='$data'AND hora='$hora'"; //COMANDO SQL BUSCAR DADOS DA TABELA CONSULTA
$resultado = mysqli_query($conexao, $i);
$dados = mysqli_num_rows($resultado);
//VERIFICANDO SE EXISTE CONSULTA COM MESMO MÉDICO, HORARIO E DATA
if ($dados == 1) {
    echo '<script>  alert("Hora indisponivel! ");history.go(-1);</script>'; //JAVASCRIPT COM MENSAGEM E RETORNANDO A PÁGINA
} else {
//COMANDO SQL PARA ALTERAR CONSULTAS
$sql = "UPDATE consulta SET  data = '$data', hora = '$hora', paciente = '$paciente', medico ='$medico' , especialidade = '$especialidade' WHERE id= '$id'"; 

//VERIFICANDO SE O COMANDO FOI INSERIDO CORRETO
if (mysqli_query($conexao, $sql)) :
header('Location: ../consultas.php'); //RETORNANDO PARA A PAGINA CONSULTAS
else :
echo "Error ao Alterar ".$sql."<br>". mysqli_error($conexao);   // MENSAGEM DE ERRO CASO FALHE O COMANDO SQL

endif;
}
endif;

?>