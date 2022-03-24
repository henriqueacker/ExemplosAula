<?php include_once 'layout/message.php' ?>
<?php include_once 'layout/header.php'?>
<?php include_once 'layout/menu.php'?>
<?php require_once 'php/conexaodb.php'; ?>
<?php if(!isset($_SESSION['logado'])):
	header('Location: login.php');
endif;
?>
<?php 
// Select
if (isset($_GET['id'])) :
$id = mysqli_escape_string($connect, $_GET['id']);

$sql = "SELECT * FROM partidas WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
endif;
?>
</head>
<title>Scrim</title>
<body>

	<div class="row container">
		<form class="col s3" action="php/update.php" method="post">
		<input type="hidden" name="id" value="<?php echo $dados['id']?>" />
			Data:
			<div class="input-field inline">
				<input id="data" name='data' type="date" class="validate" value="<?php echo $dados['data']?>">
			</div>
			<br>
			Hora:
			<div class="input-field inline">
				<input id="hora" name='hora' type="time" class="validate" value="<?php echo $dados['hora']?>">
			</div>
			<br>
			<button class="btn black waves-effect waves-light" type="submit"
				name="atualizardata">
				Alterar <i class="material-icons right">send</i>
			</button>
		</form>
	</div>
<?php include_once 'layout/footer.php';?>
</body>
</html>
