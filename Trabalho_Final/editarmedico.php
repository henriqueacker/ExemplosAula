<?php
//FAZENDO A CONEXAO COM BANCO DE DADOS
require_once 'php/conexao.php';

//Select
if(isset($_GET['crm'])): //VERIFICIAR SE O GET FOI ACIONADO
$crm = mysqli_escape_string($conexao,$_GET['crm']);

$sql = "SELECT * FROM medico WHERE crm = '$crm'"; //PEGANDO O CRM VIA GET
$resultado = mysqli_query($conexao,$sql);
$dados = mysqli_fetch_array($resultado);
endif;
?>

<title>EDITAR MEDICO</title>
<?php include_once 'layout/header.php'; //INCLUINDO O CONTEUDO DA PAGINA HEADER.PHP?>
<?php include_once 'layout/menu.php';//INCLUINDO O CONTEUDO DA PAGINA MENU.PHP?>
<?php //JAVASCRIP PARA VALIDAR OS CAMPOS?>
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
		<legend>ALTERAR MEDICO</legend>
		<form name="form" action="php/updatemedico.php" method="post">
			<table>
			<?php //PEGANDO OS DADOS DO BANCO DE DADOS DA TABELA MEDICOS E COLOCANDO NO ATRIBUTO VALUE ?>
				<tr>
					<td>Nome:</td>
				</tr>
				<tr>
					<td><input type="text" name="nome" id="nome"
						value="<?php echo $dados['nome']?>"></td>
				</tr>
				<tr>
					<td>CRM:</td>
				</tr>
				<tr>
					<td><input type="text" name="crm" id="crm"
						value="<?php echo $dados['crm']?>"></td>
				</tr>
				<tr>
					<td>Telefone:</td>
				</tr>
				<tr>
					<td><input type="text" name="telefone" id="telefone"
						value="<?php echo $dados['telefone']?>"></td>
				</tr>
				<tr>
					<td>Telefone 2:</td>
				</tr>
				<tr>
					<td><input type="text" name="telefone2" id="telefone2"
						value="<?php echo $dados['telefone2']?>"></td>
				</tr>
				<tr>
					<td>Especialidade:</td>
				</tr>
				<tr>
					<td><input type="text" name="especialidade" id="especialidade"
						value="<?php echo $dados['especialidade']?>"></td>
				</tr>
				<tr>
					<td><br>
					<input type="submit" onclick="return valida()" name="editar"
						value="Alterar"> <input type="reset" name="limpar"
						value="Redefinir"></td>
				</tr>
			</table>
		</form>
		<br>
	</fieldset>
</div>

<?php include_once 'layout/footer.php'; //INCLUINDO O CONTEUDO DA PAGINA FOOTER.PHP?>