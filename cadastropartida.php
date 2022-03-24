<?php include_once 'layout/message.php' ?>
<?php include_once 'layout/header.php'?>
<?php include_once 'layout/menu.php'?>
<?php require_once 'php/conexaodb.php'; ?>
<?php if(!isset($_SESSION['logado'])):
	header('Location: login.php');
endif;
?>
<title>CADASTRO DE PARTIDA</title>
<body>
	<script type="text/javascript">
  $(document).ready(function(){
	    $('select').formSelect();
	  });
  </script>

<div class="row container">
<h1>ATUALIZAR OS DADOS</h1>
	<table>
		<tr>
			<td><a href='atualizarpartidatop.php'><img src='images/Top_icon.png'
					width="40px" height="40px"></a></td>
			<td><a href='atualizarpartidajg.php'><img
					src='images/Jungle_icon.png' width="40px" height="40px"></a></td>
			<td><a href='atualizarpartidamid.php'><img
					src='images/Middle_icon.png' width="40px" height="40px"></a></td>
			<td><a href='atualizarpartidasup.php'><img
					src='images/Support_icon.png' width="40px" height="40px"></a></td>
			<td><a href='atualizarpartidaadc.php'><img
					src='images/Bottom_icon.png' width="40px" height="40px"></a></td>
		</tr>
	</table>

	<h1>ADICIONAR PARTIDA</h1>

		<form class="col s12" action="php/insert.php" method="post">

			<select class="icons" name='nick'>
  <?php
$sql = "SELECT * FROM jogador";
$resultado = mysqli_query($connect, $sql);
while ($dados = mysqli_fetch_array($resultado)) :
    ?>
    <option><?php echo $dados['nick']; ?></option><?php endwhile;?>
  </select> <select class="icons" name='lane'>
				<option value="" disabled selected>Lane</option>
				<option value="TOP" data-icon="images/Top_icon.png">TOP</option>
				<option value="JG" data-icon="images/Jungle_icon.png">JG</option>
				<option value="MID" data-icon="images/Middle_icon.png">MID</option>
				<option value="SUP" data-icon="images/Support_icon.png">SUP</option>
				<option value="ADC" data-icon="images/Bottom_icon.png">ADC</option>
			</select> Vitoria:
			<div class="input-field inline">
				<input id="vitoria" name='vitoria' type="text" class="validate">
			</div>
			Participa em Abates:
			<div class="input-field inline">
				<input id="particicao_de_abates" name='particicao_de_abates'
					type="text" class="validate">
			</div>
			Jogos:
			<div class="input-field inline">
				<input id="jogos" name='jogos' type="text" class="validate">
			</div>
			Farm:
			<div class="input-field inline">
				<input id="farm" name='farm' type="text" class="validate">
			</div>
			<br> Controle Visao:
			<div class="input-field inline">
				<input id="controle_visao" name='controle_visao' type="text"
					class="validate">
			</div>
			Sentinelas Compradas:
			<div class="input-field inline">
				<input id="sentinelas_compradas" name='sentinelas_compradas'
					type="text" class="validate">
			</div>
			Dano:
			<div class="input-field inline">
				<input id="dano" name='dano' type="text" class="validate">
			</div>
			Abates:
			<div class="input-field inline">
				<input id="abates" name='abates' type="text" class="validate">
			</div>
			<br> Mortes:
			<div class="input-field inline">
				<input id="mortes" name='mortes' type="text" class="validate">
			</div>
			Assist:
			<div class="input-field inline">
				<input id="assist" name='assist' type="text" class="validate">
			</div>
			KDA:
			<div class="input-field inline">
				<input id="kda" name='kda' type="text" class="validate">
			</div>
			Ult Scrim:
			<div class="input-field inline">
				<input id="ultscrim" name='ultscrim' type="text" class="validate">
			</div>
			<br> Status:
			<!-- Switch -->
			<div class="switch">
				<label> Ativo <input type="checkbox" name='status'> <span
					class="lever"></span> Inativo
				</label>
			</div>
			<br>
			<button class="btn black waves-effect waves-light" type="submit"
				name="cadastropartida">
				Cadastrar Partida <i class="material-icons right">send</i>
			</button>

		</form>
	</div>
  
	
<?php include_once 'layout/footer.php';?>
