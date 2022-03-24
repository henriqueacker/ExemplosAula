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

    $sql = "SELECT * FROM jogador WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;

?>

</head>
<title>Editar Jogadores</title>
<body>
<?php include_once 'layout/menu.php';?>
<script type="text/javascript">
  $(document).ready(function(){
	    $('select').formSelect();
	  });
  </script>
<div class="row container">
	
		<form class="col s3" action="php/update.php" method="post">
			<input type="hidden" name="id" value="<?php echo $dados['id']?>" />
			Nick:
			<div class="input-field inline">
				<input id="nick" name='nick' type="text" class="validate"
					value="<?php echo $dados['nick']?>"> <label for='nick'>Nick</label>
			</div>
			<select class="icons" name='lane'>
				<option value="" disabled selected>Escolha sua Lane primaria</option>
				<option value="TOP" data-icon="images/Top_icon.png">TOP</option>
				<option value="JG" data-icon="images/Jungle_icon.png">JG</option>
				<option value="MID" data-icon="images/Middle_icon.png">MID</option>
				<option value="SUP" data-icon="images/Support_icon.png">SUP</option>
				<option value="ADC" data-icon="images/Bottom_icon.png">ADC</option>
			</select> <select class="icons" name='lane2'>
				<option value="" disabled selected>Escolha sua Lane primaria</option>
				<option value="TOP" data-icon="images/Top_icon.png">TOP</option>
				<option value="JG" data-icon="images/Jungle_icon.png">JG</option>
				<option value="MID" data-icon="images/Middle_icon.png">MID</option>
				<option value="SUP" data-icon="images/Support_icon.png">SUP</option>
				<option value="ADC" data-icon="images/Bottom_icon.png">ADC</option>
			</select>
			<button class="btn black waves-effect waves-light" type="submit"
				name="atualizarjogador">
				Alterar Jogador <i class="material-icons right">send</i>
			</button>

		</form>
	</div>


<?php include_once 'layout/footer.php';?>
</body>
</html>
