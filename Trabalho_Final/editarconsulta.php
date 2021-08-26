<?php
//FAZENDO A CONEXAO COM BANCO DE DADOS
require_once 'php/conexao.php';


if(isset($_GET['id'])): //VERIFICIAR SE O GET FOI ACIONADO  
$id= $_GET['id']; //PEGANDO O ID VIA GET

$sql = "SELECT * FROM consulta WHERE id = '$id'"; //COMANDO SQL PARA BUSCAR CONSULTAS POR ID
$resultado = mysqli_query($conexao,$sql);
$dados = mysqli_fetch_array($resultado);
endif;
?>
<title>Alterar Consulta</title>
<?php include_once 'layout/header.php'; //INCLUINDO O CONTEUDO DA PAGINA HEADER.PHP?>
<?php include_once 'layout/menu.php';//INCLUINDO O CONTEUDO DA PAGINA MENU.PHP?>
<div id='container'>
	<fieldset>
	<legend>ALTERAR CONSULTA</legend>	
    <form name="form" action="php/updateconsulta.php" method="post">
    <input type="hidden" name="id" value="<?php echo $dados['id'] //PEGANDO O ID?>"/>
	<table>
	<?php //PEGANDO OS DADOS DO BANCO DE DADOS DA TABELA CONSULTAS E COLOCANDO NO ATRIBUTO VALUE ?>
    <tr><td>Nome:</td></tr>
    <tr><td><select name='nome'> <option><?php echo $dados['paciente']; ?></option> </select></td></tr>
<tr><td>Medico:</td></tr>
<tr><td><select name='medico'> <option><?php echo $dados['medico']; ?></option></select></td></tr>
  <tr><td>Especialidade:</td></tr>
<tr><td><select name='especialidade'><option><?php echo $dados['especialidade']; ?></option></select></td></tr>
<tr><td>Data:</td></tr>
<tr><td><input type="date" name="data" value="<?php echo $dados['data'] ?>"></td></tr>
<tr><td>Hora:</td></tr>
<tr><td><input type="time" name="hora" value="<?php echo $dados['hora'] ?>"></td></tr>
<tr><td><input type="submit" name="enviar"></td></tr>
	</table>
	</form>
	<br>
</fieldset>
</div>


<?php include_once 'layout/footer.php'; //INCLUINDO O CONTEUDO DA PAGINA FOOTER.PHP?>