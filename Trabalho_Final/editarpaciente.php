<?php
//FAZENDO A CONEXAO COM BANCO DE DADOS
require_once 'php/conexao.php';


if(isset($_GET['id']))://VERIFICIAR SE O GET FOI ACIONADO  
$id = $_GET['id']; //PEGANDO O ID VIA GET

$sql = "SELECT * FROM paciente WHERE id = '$id'"; //COMANDO SQL PARA BUSCAR PACIENTES POR ID
$resultado = mysqli_query($conexao,$sql);
$dados = mysqli_fetch_array($resultado);
endif;

?>

<title>CADASTRO DE PACIENTE</title>
<?php include_once 'layout/header.php'; //INCLUINDO O CONTEUDO DA PAGINA HEADER.PHP?>
<?php include_once 'layout/menu.php';//INCLUINDO O CONTEUDO DA PAGINA MENU.PHP?>
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
		<legend>ALTERAR PACIENTE</legend>
		<form name="form" action="php/updatepaciente.php" method="post">
		<?php //PEGANDO OS DADOS DO BANCO DE DADOS DA TABELA PACIENTES COLOCANDO NO ATRIBUTO VALUE ?>
			<table>
				<tr>
					<td>ID:</td>
				</tr>
				<tr>
					<td><input type="text" name="id" id="id"
						value="<?php echo $dados['id']?>"></td>
				</tr>
				<tr>
					<td>Nome:</td>
				</tr>
				<tr>
					<td><input type="text" name="nome" id="nomeid"
						value="<?php echo $dados['nome']?>"></td>
				</tr>
				<tr>
					<td>Telefone:</td>
				</tr>
				<tr>
					<td><input type="text" name="telefone" id="telefoneid"
						value="<?php echo $dados['telefone']?>"></td>
				</tr>
				<tr>
					<td>Telefone 2:</td>
				</tr>
				<tr>
					<td><input type="text" name="telefone2" id="telefone2id"
						value="<?php echo $dados['telefone2']?>"></td>
				</tr>
				<tr>
					<td>Idade:</td>
				</tr>
				<tr>
					<td><input type="text" name="idade" id="idadeid"
						value="<?php echo $dados['idade']?>"></td>
				</tr>
				<tr>
					<td>RG:</td>
				</tr>
				<tr>
					<td><input type="text" name="RG" id="RGid"
						value="<?php echo $dados['RG']?>"></td>
				</tr>
				<tr>
					<td>Rua:</td>
				</tr>
				<tr>
					<td><input type="text" name="rua" id="ruaid"
						value="<?php echo $dados['rua']?>"></td>
				</tr>
				<tr>
					<td>Bairro:</td>
				</tr>
				<tr>
					<td><input type="text" name="bairro" id="bairroid"
						value="<?php echo $dados['bairro']?>"></td>
				</tr>
				<tr>
					<td>Cidade:</td>
				</tr>
				<tr>
					<td><input type="text" name="cidade" id="cidadeid"
						value="<?php echo $dados['cidade']?>"></td>
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