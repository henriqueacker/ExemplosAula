
<title>MARCAR CONSULTAS</title>
<?php include_once 'layout/header.php'; //INCLUINDO O CONTEUDO DA PAGINA HEADER.PHP?>
<?php include_once 'layout/menu.php'; //INCLUINDO O CONTEUDO DA PAGINA MENU.PHP?>
<?php require_once 'php/conexao.php'; //FAZENDO A CONEXAO COM BANCO DE DADOS?>
<div id='container'>
	<fieldset>
		<legend>MARCAR CONSULTAS</legend>
		<form action="php/insertconsulta.php" method="POST">
			<table>
				<tr>
					<td>Nome:</td>
				</tr>
				<tr>
					<td><select name='nome'>
  <?php
$sql = "SELECT * FROM paciente"; //COMANDO SQL PARA LISTAR TODOS OS PACIENTES
$resultado = mysqli_query($conexao, $sql);
//FAZ UMA VAREDURA E LISTA TODOS OS NOMES DOS PACIENTES, COLOCANDO OS NOMES EM OPTIONS  
while ($dados = mysqli_fetch_array($resultado)) : 
    ?>
    <option><?php echo $dados['nome']; ?></option><?php endwhile;?>
  </select></td>
				</tr>
				<tr>
					<td>Medico:</td>
				</tr>
				<tr>
					<td><select name='medico'>
  <?php
$sql = "SELECT * FROM medico"; //COMANDO SQL PARA LISTAR TODOS OS NOMES NA TABELA MEDICOS
$resultado = mysqli_query($conexao, $sql);
while ($dados = mysqli_fetch_array($resultado)) :
    ?>
    <option><?php echo $dados['nome']; ?></option><?php endwhile;?>
  </select></td>
				</tr>
				<tr>
					<td>Especialidade:</td>
				</tr>
				<tr>
					<td><select name='especialidade'>
  <?php
$sql = "SELECT * FROM medico"; //COMANDO SQL PARA LISTAR TODAS ESPECIALIDADES NA TABELA MEDICOS
$resultado = mysqli_query($conexao, $sql);
while ($dados = mysqli_fetch_array($resultado)) :
    ?>
    <option><?php echo $dados['especialidade']; ?></option><?php endwhile;?>
  </select></td>
				</tr>
				<tr>
					<td>Data:</td>
				</tr>
				<tr>
					<td><input type="date" name="data"></td>
				</tr>
				<tr>
					<td>Hora:</td>
				</tr>
				<tr>
					<td><input type="time" name="hora"></td>
				</tr>
				<tr>
					<td><input type="submit" name="enviar"></td>
				</tr>

			</table>
		</form>
	</fieldset>
</div>

<?php include_once 'layout/footer.php'; //INCLUINDO O CONTEUDO DA PAGINA FOOTER.PHP?>