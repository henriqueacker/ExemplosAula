<?php include_once 'layout/message.php' ?>
<?php include_once 'layout/header.php'?>
<?php include_once 'layout/menu.php'?>
<?php require_once 'php/conexaodb.php'; ?>

<?php
if (isset($_GET['id'])) :
    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql = "SELECT * FROM estatistica WHERE id = '$id'";

    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);

endif;

?>

</head>
<title>Scrim</title>
<body>
	<script type="text/javascript">
  $(document).ready(function(){
	    $('select').formSelect();
	  });
  </script>

<div class="row container">
<h1 class="header center purple-text">Atualizar Dados</h1>
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

<?php if(isset($_GET['id'])):?>
<form class="col s12" action="php/update.php" method="post">
			<input type="hidden" name="id" value="<?php echo $dados['id']?>" /> <select
				class="icons" name='nick'>
				<option><?php echo $dados['nick']; ?></option>
			</select> <select class="icons" name='lane'>
				<option><?php echo $dados['posicao']; ?></option>
			</select> Vitoria:
			<div class="input-field inline">
				<input id="vitoria" name='vitoria' type="text" class="validate"
					value="<?php echo $dados['vitoria']?>">
			</div>
			Participa em Abates:
			<div class="input-field inline">
				<input id="particicao_de_abates" name='particicao_de_abates'
					type="text" class="validate"
					value="<?php echo $dados['particicao_de_abates']?>">
			</div>
			Jogos:
			<div class="input-field inline">
				<input id="jogos" name='jogos' type="text" class="validate"
					value="<?php echo $dados['jogos']?>">
			</div>
			Farm:
			<div class="input-field inline">
				<input id="farm" name='farm' type="text" class="validate"
					value="<?php echo $dados['farm']?>" />
			</div>
			<br> Controle Visao:
			<div class="input-field inline">
				<input id="controle_visao" name='controle_visao' type="text"
					class="validate" value="<?php echo $dados['controle_visao']?>">
			</div>
			Sentinelas Compradas:
			<div class="input-field inline">
				<input id="sentinelas_compradas" name='sentinelas_compradas'
					type="text" class="validate"
					value="<?php echo $dados['sentinelas_compradas']?>">
			</div>
			Dano:
			<div class="input-field inline">
				<input id="dano" name='dano' type="text" class="validate"
					value="<?php echo $dados['dano']?>">
			</div>
			Abates:
			<div class="input-field inline">
				<input id="abates" name='abates' type="text" class="validate"
					value="<?php echo $dados['abates']?>">
			</div>
			<br> Mortes:
			<div class="input-field inline">
				<input id="mortes" name='mortes' type="text" class="validate"
					value="<?php echo $dados['mortes']?>">
			</div>
			Assist:
			<div class="input-field inline">
				<input id="assist" name='assist' type="text" class="validate"
					value="<?php echo $dados['assist']?>">
			</div>
			KDA:
			<div class="input-field inline">
				<input id="kda" name='kda' type="text" class="validate"
					value="<?php echo $dados['KDA']?>">
			</div>
			Ult Scrim:
			<div class="input-field inline">
				<input id="ultscrim" name='ultscrim' type="text" class="validate"
					value="<?php echo $dados['ultima_scrim']?>">
			</div>
			<br> Status:
			<!-- Switch -->
			<div class="switch">
				<label> Ativo <input type="checkbox" name='status'> <span
					class="lever"></span> Inativo
				</label>
			</div>
			<br>
			<button class="btn black  	waves-effect waves-light" type="submit"
				name="atualizarpartidamid">
				Atualizar Partida <i class="material-icons right">send</i>
			</button>

		</form>
   <?php endif;?>


	<!-- TABELA TOP-->
	<h3 class="header center purple-text">MID</h3>
	<table class="striped">
		<thead>
			<tr>
				<th>NOME</th>
				<th>LANE</th>
				<th>VITORIAS</th>
				<th>JOGOS</th>
				<th>PARTICI ABATES</th>
				<th>FARM</th>
				<th>CONTROLE DE VISAO</th>
				<th>SENT COMPRADAS</th>
				<th>DANO CAUSADO</th>
				<th>ABATES</th>
				<th>MORTES</th>
				<th>ASSIST</th>
				<th>KDA</th>
				<th>ULT SCRIM</th>
				<th>STATUS</th>
			</tr>
		</thead>
		<tbody>
	<?php
$sql = "SELECT * FROM estatistica";
$resultado = mysqli_query($connect, $sql);
if (mysqli_num_rows($resultado) > 0) :
    while ($dados = mysqli_fetch_array($resultado)) :
        ?>
		<tr>
		<td><?php echo $dados['nick']; ?></td>
				<td><?php echo $dados['posicao']; ?></td>
				<td><?php echo number_format($dados['vitoria_porcentagem']);?>%</td>
				<td><?php echo $dados['jogos']; ?></td>
				<td><?php echo $dados['particicao_de_abates']; ?></td>
				
				<td><?php echo $dados['farm']; ?></td>
				<td><?php echo $dados['controle_visao']; ?></td>
				<td><?php echo $dados['sentinelas_compradas']; ?></td>
				<td><?php echo $dados['dano']; ?></td>
				<td><?php echo $dados['abates']; ?></td>
				<td><?php echo $dados['mortes']; ?></td>
				<td><?php echo $dados['assist']; ?></td>
				<td><?php echo round($dados['KDA'],2); ?></td>
				<td><?php echo $dados['ultima_scrim']; ?></td>
				<?php if($dados['status'] == "ATIVO"):
					echo "<td class='green'>ATIVO</td>";
				else:
					echo "<td class='red'>INATIVO</td>";;
				endif;
				?>
				<td><a href="atualizarpartidamid.php?id=<?php echo $dados['id']; ?>"
					class="btn-floating orange"><i class="material-icons">edit</i></a></td>
				<td><a href="#modal<?php echo $dados['id']; ?>"
					class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

			</tr>
			<!-- Modal Structure -->
			<div id="modal<?php echo $dados['id']; ?>" class="modal">
				<div class="modal-content">
					<h6>Deseja excluir esse partida?</h6>
				</div>
				<div class="modal-footer">
					<form action="php/delete.php" method="POST">
						<input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
						<button type="submit" name="btn-deletarmid" class="btn red">Sim,
							quero deletar</button>
						<a href="#!"
							class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
					</form>
				</div>
			</div>
		
	<?php

endwhile
    ;
else :
    ?>

					<tr>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>

			</tr>
			   <?php
endif;
?>
	</tbody>
	</table>
	<div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <a href="login.php" ><h1 class="header center purple-text">Cadastro de Partida</h1></a>
      <div class="row center">
      
      </div>
      <br><br>

    </div>
  </div>
	</div>
<?php include_once 'layout/footer.php';?>
</body>
</html>
<?php if(!isset($_SESSION['logado'])):
	header('Location: login.php');
endif;
?>