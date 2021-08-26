<?php
//FAZENDO A CONEXAO COM BANCO DE DADOS
require_once 'php/conexao.php';
$sql = "SELECT * FROM medico"; //COMANDO SQL PARA LISTAR TODOS MEDICOS CADASTRADOS
$resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

mysqli_close($conexao); //FECHANDO A CONEXAO
?>

<title>CADASTRO DE MEDICO</title>
<?php include_once 'layout/header.php'; //INCLUINDO O CONTEUDO DA PAGINA HEADER.PHP?>
<?php include_once 'layout/menu.php';//INCLUINDO O CONTEUDO DA PAGINA MENU.PHP?>
<?php //JAVASCRIP PARA VALIDAR OS CAMPOS ?>
<script type="text/javascript">
function valida(){
		if(document.form.nome.value == ""){
		alert("Preenche o campo Nome");
		return false;	
		}
		if(document.form.crm.value == ""){
			alert("Preenche o campo CRM");
			return false;
		}
		if(document.form.telefone.value == ""){
			alert("Preenche o campo Telefone");
			return false;
		}
		if(document.form.telefone2.value == ""){
			alert("Preenche o campo Telefone2");
			return false;
		}
		if(document.form.especialidade.value == ""){
			alert("Preenche o campo Especialidade");
			return false;
		}
		else{
			return true;
		}
	}
</script>
<div id='container'>
	<fieldset>
		<legend>CADASTRO DE MEDICOS</legend>
		<form name="form" action="php/insertmedico.php" method="post">
			<table>
				<tr>
					<td>Nome:</td>
				</tr>
				<tr>
					<td><input type="text" name="nome" id="nome"></td>
				</tr>
				<tr>
					<td>CRM:</td>
				</tr>
				<tr>
					<td><input type="text" name="crm" id="crm"></td>
				</tr>
				<tr>
					<td>Telefone:</td>
				</tr>
				<tr>
					<td><input type="text" name="telefone" id="telefone"></td>
				</tr>
				<tr>
					<td>Telefone 2:</td>
				</tr>
				<tr>
					<td><input type="text" name="telefone2" id="telefone2"></td>
				</tr>
				<tr>
					<td>Especialidade:</td>
				</tr>
				<tr>
					<td><input type="text" name="especialidade" id="especialidade"></td>
				</tr>
				<tr>
					<td><br> <input type="submit" onclick="return valida()"
						name="cadastrar" value="Cadastrar"> <input type="reset"
						name="limpar" value="Redefinir"></td>
				</tr>
			</table>
		</form>
		<br>
	<?php
	$dados = mysqli_num_rows($resultado);
	//VERIFICANDO SE EXISTEM DADOS NA TABELA MEDICOS
    if ($dados == 0) {
    echo 'Nao exitem medicos cadastrados';
    } else {
    echo '<br>';
    echo "<table>";
    echo "<tr><td>CRM</td>";
    echo "<td>NOME</td>";
    echo "<td>TEL.</td>";
    echo "<td>TEL.2</td>";
    echo "<td>ESPECIALIDADE</td></tr>";
	while ($row = mysqli_fetch_array($resultado)) :
		//EXIBINDO OS DADOS DA TABELA MEDICOS
        echo "<tr><td>" . $row["crm"] . '&nbsp' . '&nbsp' . '</td>';
        echo "<td>" . $row["nome"] . '&nbsp' . '</td>';
        echo "<td>" . $row["telefone"] . '&nbsp' . '&nbsp' . '</td>';
        echo "<td>" . $row["telefone2"] . '&nbsp' . '&nbsp' . '</td>';
        echo "<td>" . $row["especialidade"] . '&nbsp' . '&nbsp' . '</td>';
        echo "<td>" . "<a href=editarmedico.php?crm=" . $row['crm'] . ">EDITAR</a>" . '</td>';
        echo "<td>" . "<a href=php/deletemedico.php?crm=" . $row['crm'] . ">DELETAR</a>" . '</td></tr>';
    endwhile
    ;
    echo "</table>";
}
?>
</fieldset>
</div>

<?php include_once 'layout/footer.php'; //INCLUINDO O CONTEUDO DA PAGINA FOOTER.PHP?>