
<?php include_once 'layout/message.php' ?>
<?php include_once 'layout/header.php'?>
<?php include_once 'layout/menu.php'?>
<?php require_once 'php/conexaodb.php'; ?>
<script type="text/javascript">
  $(document).ready(function(){
	    $('select').formSelect();
	  });
  </script>
      <h1 class="header center purple-text">Rank MID</h1>
	  <div class="container">
    <div class="section">
      <div class="row center">
	<!-- TABELA MID -->

	<table class="responsive-table">
		<thead>
			<tr>
			<th class='purple-text'>NOME</th>
				<th class='purple-text'>LANE</th>
				<th><a class='purple-text' href="rankmid.php?buscamid=vitoria">VITORIAS</a></th>
				<th class='purple-text'>JOGOS</th>
				<th><a class='purple-text'href="rankmid.php?buscamid=participacao">PARTICI ABATES</a></th>
				<th><a class='purple-text'href="rankmid.php?buscamid=farm">FARM</th>
				<th><a class='purple-text' href="rankmid.php?buscamid=controle">CONTROLE DE VISAO</th>
				<th><a class='purple-text'href="rankmid.php?buscamid=sentinela">SENT COMPRADAS</th>
				<th><a class='purple-text'href="rankmid.php?buscamid=dano">DANO CAUSADO</th>
				<th><a class='purple-text'href="rankmid.php?buscamid=abates">ABATES</th>
				<th><a class='purple-text'href="rankmid.php?buscamid=mortes">MORTES</th>
				<th><a class='purple-text'href="rankmid.php?buscamid=assist">ASSIST</th>
				<th><a class='purple-text'href="rankmid.php?buscamid=kda">KDA</a></th>
				<th class='purple-text'>ULT SCRIM</th>
				<th><a class='purple-text' href="rankmid.php?buscamid=status">	STATUS</th>
			</tr>
		</thead>
		<tbody>
	<?php
$sql = "SELECT * FROM estatistica";
if(isset($_GET['buscamid'])){
	if($_GET['buscamid'] == 'kda'){
	$sql = "SELECT * FROM estatistica ORDER by KDA DESC ";
	}else if($_GET['buscamid'] == 'vitoria'){
		$sql = "SELECT * FROM estatistica  ORDER by vitoria_porcentagem DESC ";
		
	}else if($_GET['buscamid'] == 'participacao'){
		$sql = "SELECT * FROM estatistica ORDER by particicao_de_abates DESC ";
	}else if($_GET['buscamid'] == 'farm'){
		$sql = "SELECT * FROM estatistica ORDER by farm DESC ";
	}else if($_GET['buscamid'] == 'controle'){
		$sql = "SELECT * FROM estatistica ORDER by controle_visao DESC ";
	}else if($_GET['buscamid'] == 'sentinela'){
		$sql = "SELECT * FROM estatistica ORDER by sentinelas_compradas DESC ";
	}else if($_GET['buscamid'] == 'dano'){
		$sql = "SELECT * FROM estatistica ORDER by dano DESC ";
	}else if($_GET['buscamid'] == 'abates'){
		$sql = "SELECT * FROM estatistica ORDER by abates DESC ";
	}else if($_GET['buscamid'] == 'mortes'){
		$sql = "SELECT * FROM estatistica ORDER by mortes DESC ";
	}else if($_GET['buscamid'] == 'status'){
		$sql = "SELECT * FROM estatistica ORDER by status = 'ATIVO' DESC ";
	}else if($_GET['buscamid'] == 'assist'){
			$sql = "SELECT * FROM estatistica ORDER by assist DESC ";	
		
	}else{
		$sql = "SELECT * FROM estatistica";
	}
}
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
