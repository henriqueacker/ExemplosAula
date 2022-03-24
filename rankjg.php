
<?php include_once 'layout/message.php' ?>
<?php include_once 'layout/header.php'?>
<?php include_once 'layout/menu.php'?>
<?php require_once 'php/conexaodb.php'; ?>
<script type="text/javascript">
  $(document).ready(function(){
	    $('select').formSelect();
	  });
  </script>
      <h1 class="header center purple-text">Rank JG</h1>
	  <div class="container">
    <div class="section">
      <div class="row center">

	<!-- TABELA JG -->
	<table class="responsive-table">
		<thead>
			<tr>
				<th class='purple-text'>NOME</th>
				<th class='purple-text'>LANE</th>
				<th><a class='purple-text' href="rankjg.php?buscajg=vitoria">VITORIAS</a></th>
				<th class='purple-text'>JOGOS</th>
				<th><a class='purple-text'href="rankjg.php?buscajg=participacao">PARTICI ABATES</a></th>
				<th><a class='purple-text'href="rankjg.php?buscajg=farm">FARM</th>
				<th><a class='purple-text' href="rankjg.php?buscajg=controle">CONTROLE DE VISAO</th>
				<th><a class='purple-text'href="rankjg.php?buscajg=sentinela">SENT COMPRADAS</th>
				<th><a class='purple-text'href="rankjg.php?buscajg=dano">DANO CAUSADO</th>
				<th><a class='purple-text'href="rankjg.php?buscajg=abates">ABATES</th>
				<th><a class='purple-text'href="rankjg.php?buscajg=mortes">MORTES</th>
				<th><a class='purple-text'href="rankjg.php?buscajg=assist">ASSIST</th>
				<th><a class='purple-text'href="rankjg.php?buscajg=kda">KDA</a></th>
				<th class='purple-text'>ULT SCRIM</th>
				<th><a class='purple-text' href="rankjg.php?buscatop=status">	STATUS</th>
			</tr>
		</thead>
		<tbody>
 		
	<?php
$sql = "SELECT * FROM jg";
if(isset($_GET['buscajg'])):
	if($_GET['buscajg'] == 'kda'){
	$sql = "SELECT * FROM jg ORDER by KDA DESC ";
	}else if($_GET['buscajg'] == 'vitoria'){
		$sql = "SELECT * FROM jg ORDER by vitoria_porcentagem DESC ";
	}else if($_GET['buscajg'] == 'participacao'){
		$sql = "SELECT * FROM jg ORDER by particicao_de_abates DESC ";
	}else if($_GET['buscajg'] == 'farm'){
		$sql = "SELECT * FROM jg ORDER by farm DESC ";
	}else if($_GET['buscajg'] == 'controle'){
		$sql = "SELECT * FROM jg ORDER by controle_visao DESC ";
	}else if($_GET['buscajg'] == 'sentinela'){
		$sql = "SELECT * FROM jg ORDER by sentinelas_compradas DESC ";
	}else if($_GET['buscajg'] == 'dano'){
		$sql = "SELECT * FROM jg ORDER by dano DESC ";
	}else if($_GET['buscajg'] == 'abates'){
		$sql = "SELECT * FROM jg ORDER by abates DESC ";
	}else if($_GET['buscajg'] == 'mortes'){
		$sql = "SELECT * FROM jg ORDER by mortes DESC ";
	}else if($_GET['buscajg'] == 'status'){
		$sql = "SELECT * FROM jg ORDER by status = 'ATIVO' DESC ";
	}	
	else if($_GET['buscajg'] == 'assist'){
		$sql = "SELECT * FROM jg ORDER by assist DESC ";	
	}
	else{
		$sql = "SELECT * FROM top";
	}
	endif;
$resultado = mysqli_query($connect, $sql);
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

			</tr>
	<?php endwhile;?>
	</tbody>
	</table>
      </div>


    </div>
  </div>
  </div>
  </div>
  <br><br>
  <div class="bloco"></div>
 <?php include_once 'layout/footer.php' ?>
