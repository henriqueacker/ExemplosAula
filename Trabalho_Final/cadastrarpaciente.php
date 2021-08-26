<?php
//FAZENDO A CONEXAO COM BANCO DE DADOS
require_once 'php/conexao.php';
$sql = "SELECT * FROM paciente";//COMANDO SQL PARA LISTAR TODOS PACIENTES CADASTRADOS
$resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

mysqli_close($conexao); //FECHANDO A CONEXAO
?>
<title>CADASTRO DE PACIENTE</title>
<?php include_once 'layout/header.php'; //INCLUINDO O CONTEUDO DA PAGINA HEADER.PHP?>
<?php include_once 'layout/menu.php';//INCLUINDO O CONTEUDO DA PAGINA MENU.PHP?>
<?php //JAVASCRIP PARA VALIDAR OS CAMPOS ?>
<script type="text/javascript">
function validar() {
	   
    var nome = document.getElementById("nomeid").value;
    var telefone = document.getElementById("telefoneid").value;
    var telefone2 = document.getElementById("telefone2id").value;
    var idade = document.getElementById("idadeid").value;
    var rg = document.getElementById("RGid").value;
    var rua = document.getElementById("ruaid").value;
    var bairro = document.getElementById("bairroid").value;
    var cidade = document.getElementById("cidadeid").value;
    
    if (nome && telefone && telefone2 && idade && rg && rua && bairro && cidade ) {
    	document.getElementById("form").submit();
		return true;
    } else {
        alert("Por favor preencha todos os campos.");   
        return false;
        }
 
}
</script>
<div id='container'>
	<fieldset>
		<legend>CADASTRO DE PACIENTE</legend>
		<form name="form" action="php/insertpaciente.php" method="post">
			<table>
				<tr>
					<td>Nome:</td>
				</tr>
				<tr>
					<td><input type="text" id="nomeid" name="nome"></td>
				</tr>
				<tr>
					<td>Telefone:</td>
				</tr>
				<tr>
					<td><input type="text" id="telefoneid" name="telefone"></td>
				</tr>
				<tr>
					<td>Telefone 2:</td>
				</tr>
				<tr>
					<td><input type="text" id="telefone2id" name="telefone2"></td>
				</tr>
				<tr>
					<td>Idade:</td>
				</tr>
				<tr>
					<td><input type="text" id="idadeid" name="idade"></td>
				</tr>
				<tr>
					<td>RG:</td>
				</tr>
				<tr>
					<td><input type="text" id="RGid" name="RG"></td>
				</tr>
				<tr>
					<td>Rua:</td>
				</tr>
				<tr>
					<td><input type="text" id="ruaid" name="rua"></td>
				</tr>
				<tr>
					<td>Bairro:</td>
				</tr>
				<tr>
					<td><input type="text" id="bairroid" name="bairro"></td>
				</tr>
				<tr>
					<td>Cidade:</td>
				</tr>
				<tr>
					<td><input type="text" id="cidadeid" name="cidade"></td>
				</tr>
				<tr>
					<td><br> <input type="submit" onclick="return validar()"
						name="cadastrar" value="Cadastrar"> <input type="reset"
						name="limpar" value="Redefinir"></td>
				</tr>
			</table>
		</form>
		<br>
	<?php
	$dados = mysqli_num_rows($resultado);
	//VERIFICANDO SE EXISTEM DADOS NA TABELA PACIENTES
	if ($dados == 0) {
	    echo 'Nao exitem pacientes cadastrados';
	} else {
	echo '<br>';
    echo "<table >";
    echo "<tr><td>ID</td>";
    echo "<td>NOME</td>";
    echo "<td>TEL.</td>";
    echo "<td>TEL.2</td>";
    echo "<td>IDADE</td>";
    echo "<td>RG</td>";
    echo "<td>RUA</td>";
    echo "<td>BAIRRO </td>";
    echo "<td>CIDADE</td></tr>";
	while ($row = mysqli_fetch_array($resultado)) :
		//EXIBINDO OS DADOS DA TABELA PACIENTES
        echo "<tr><td>" . $row["id"] . '&nbsp' . '&nbsp' . '</td>';
        echo "<td>" . $row["nome"] . '&nbsp' . '</td>';
        echo "<td>" . $row["telefone"] . '&nbsp' . '&nbsp' . '</td>';
        echo "<td>" . $row["telefone2"] . '&nbsp' . '&nbsp' . '</td>';
        echo "<td>" . $row["idade"] . '&nbsp' . '&nbsp' . '</td>';
        echo "<td>" . $row["RG"] . '&nbsp' . '&nbsp' . '</td>';
        echo "<td>" . $row["rua"] . '&nbsp' . '&nbsp' . '</td>';
        echo "<td>" . $row["bairro"] . '&nbsp' . '&nbsp' . '</td>';
        echo "<td>" . $row["cidade"] . '&nbsp' . '&nbsp' . '</td>';
        echo "<td>" . "<a href=editarpaciente.php?id=" . $row['id'] . ">EDITAR</a>" . '</td>';
        echo "<td>" . "<a href=php/deletepaciente.php?id=" . $row['id'] . ">DELETAR</a>" . '</td></tr>';
    endwhile
    ;
    echo "</table>";
}
?>
	</fieldset>
</div>

<?php include_once 'layout/footer.php'; //INCLUINDO O CONTEUDO DA PAGINA FOOTER.PHP?>