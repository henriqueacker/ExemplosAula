
<?php include_once 'layout/message.php' ?>
<?php include_once 'layout/header.php'?>
<?php include_once 'layout/menu.php'?>
<?php require_once 'php/conexaodb.php'; ?>

<div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center purple-text">Login</h1>
      <div class="row center">

        <form action="php/login.php" method="post">
			<div class="input-field inline">
				<input id="email" name='email' type="email" class="validate"> <label
					for='email'>Email</label>
			</div>
			<div class="input-field inline">
				<input id="senha" name='senha' type="password" class="validate"> <label
					for='senha'>Senha</label>
			</div>
			<button class="btn black waves-effect waves-light" type="submit"
				name="logar">
				Logar <i class="material-icons right">send</i>
			</button>
			<a href="php/logout.php"><button class="btn black waves-effect waves-light"
				name="logout">Sair <i class="material-icons right">exit_to_app</i>			</button>
				
	</a>
			<br>
		</form>
      </div>
      <div class="row center">
     
	
      </div>
      <br><br>

	</div>
	<script type="text/javascript">
  $(document).ready(function(){
	    $('select').formSelect();
	  });
  </script>
  <?php 
  if(isset($_SESSION['logado'])):
	?>
	
	<div class="row container">
	
	<h1 class="header center purple-text">Editar Jogadores</h1>
		<!-- TABELA DE JOGADORES -->
	<table class="striped">
		<thead>
			<tr>
				<th>NOME</th>
				<th>LANE</th>
				<th>LANE SEGUNDARIA</th>
			</tr>
		</thead>
		<tbody>
	<?php
$sql = "SELECT * FROM jogador";
$resultado = mysqli_query($connect, $sql);
if (mysqli_num_rows($resultado) > 0) :

    while ($dados = mysqli_fetch_array($resultado)) :
        ?>
		<tr>
				<td><?php echo $dados['nick']; ?></td>
				<td><?php echo $dados['lane']; ?></td>
				<td><?php echo $dados['lanesegundaria']; ?></td>
				<td><a href="editar.php?id=<?php echo $dados['id']; ?>"
					class="btn-floating orange"><i class="material-icons">edit</i></a></td>
				<td><a href="#modal<?php echo $dados['id']; ?>"
					class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

			</tr>
			<!-- Modal Structure -->
			<div id="modal<?php echo $dados['id']; ?>" class="modal">
				<div class="modal-content">
					<h6>Deseja excluir esse jogador?</h6>
				</div>
				<div class="modal-footer">
					<form action="php/delete.php" method="POST">
						<input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
						<button type="submit" name="btn-deletarjogador" class="btn red">Sim,
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
			</tr>

			   <?php
endif;
?>

	</tbody>

</table>

<h1 class="header center purple-text">Adicionar Data</h1>
<div class="row center">
	<form  action="php/insert.php" method="post">
			Data:
			<div class="input-field inline">
				<input id="data" name='data' type="date" class="validate">
			</div>
			Hora:
			<div class="input-field inline">
				<input id="hora" name='hora' type="time" class="validate">
			</div>
			<button class="btn black waves-effect waves-light" type="submit"
				name="cadastrodata">
				Cadastrar <i class="material-icons right">send</i>
			</button>
		</form>
</div>		
<h1 class="header center purple-text">Editar Calendario</h1>
	<table class="striped">
		<thead>
			<tr>
				<th>DATA</th>
				<th>HORA</th>
			</tr>
		</thead>
		<tbody>
	<?php
$sql = "SELECT * FROM partidas";
$resultado = mysqli_query($connect, $sql);
if (mysqli_num_rows($resultado) > 0) :

    while ($dados = mysqli_fetch_array($resultado)) :
        ?>
		<tr>
				<td><?php echo date('d-m-Y', strtotime($dados["data"])); ?></td>
				<td><?php echo $dados['hora']; ?></td>
				<td><?php echo $dados['status']; ?></td>

					
				<td><a href="editarcalendario.php?id=<?php echo $dados['id']; ?>"
					class="btn-floating orange"><i class="material-icons">edit</i></a></td>
				<td><a href="#modal<?php echo $dados['id']; ?>"
					class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

			</tr>
		
			<!-- Modal Structure -->
			<div id="modal<?php echo $dados['id']; ?>" class="modal">
				<div class="modal-content">
					<h6>Deseja excluir essa data?</h6>
				</div>
				<div class="modal-footer">
					<form action="php/delete.php" method="POST">
						<input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
						<button type="submit" name="btn-deletardata" class="btn red">Sim,
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
			</tr>

			   <?php
endif;
?>

	</tbody>
	</table>
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

	<h1 class="header center purple-text">Adicionar Partida</h1>

		<form class="col s12	" action="php/insert.php" method="post">

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
	<?php 
	
		endif;?>
  </div>
	<div class="bloco"></div>
  <?php include_once 'layout/footer.php' ?>