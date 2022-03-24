
<?php include_once 'layout/message.php' ?>
<?php include_once 'layout/header.php'?>
<?php include_once 'layout/menu.php'?>
<?php require_once 'php/conexaodb.php'; ?>
<script type="text/javascript">
  $(document).ready(function(){
	    $('select').formSelect();
	  });
  </script>
      <h1 class="header center purple-text">Rank ADC</h1>
	  <div class="container">
    <div class="section">
      <div class="row center">
	<!-- TABELA ADC -->
	<table class="responsive-table">
		<thead>
			<tr>
			<th class='purple-text'>NOME</th>
				<th class='purple-text'>LANE</th>
				<th><a class='purple-text' href="rankadc.php?buscaadc=vitoria">VITORIAS</a></th>
				<th class='purple-text'>JOGOS</th>
				<th><a class='purple-text'href="rankadc.php?buscaadc=participacao">PARTICI ABATES</a></th>
				<th><a class='purple-text'href="rankadc.php?buscaadc=farm">FARM</th>
				<th><a class='purple-text' href="rankadc.php?buscaadc=controle">CONTROLE DE VISAO</th>
				<th><a class='purple-text'href="rankadc.php?buscaadc=sentinela">SENT COMPRADAS</th>
				<th><a class='purple-text'href="rankadc.php?buscaadc=dano">DANO CAUSADO</th>
				<th><a class='purple-text'href="rankadc.php?buscaadc=abates">ABATES</th>
				<th><a class='purple-text'href="rankadc.php?buscaadc=mortes">MORTES</th>
				<th><a class='purple-text'href="rankadc.php?buscaadc=assist">ASSIST</th>
				<th><a class='purple-text'href="rankadc.php?buscaadc=kda">KDA</a></th>
				<th class='purple-text'>ULT SCRIM</th>
				<th><a class='purple-text' href="rankadc.php?buscaadc=status">	STATUS</th>
			</tr>
		</thead>
		<tbody>
	<?php
$sql = "SELECT * FROM adc";
if(isset($_GET['buscaadc'])){
	if($_GET['buscaadc'] == 'kda'){
	$sql = "SELECT * FROM adc ORDER by KDA DESC ";
	}else if($_GET['buscaadc'] == 'vitoria'){
		$sql = "SELECT * FROM adc ORDER by vitoria_porcentagem DESC ";
	}else if($_GET['buscaadc'] == 'participacao'){
		$sql = "SELECT * FROM adc ORDER by particicao_de_abates DESC ";
	}else if($_GET['buscaadc'] == 'farm'){
		$sql = "SELECT * FROM adc ORDER by farm DESC ";
	}else if($_GET['buscaadc'] == 'controle'){
		$sql = "SELECT * FROM adc ORDER by controle_visao DESC ";
	}else if($_GET['buscaadc'] == 'sentinela'){
		$sql = "SELECT * FROM adc ORDER by sentinelas_compradas DESC ";
	}else if($_GET['buscaadc'] == 'dano'){
		$sql = "SELECT * FROM adc ORDER by dano DESC ";
	}else if($_GET['buscaadc'] == 'abates'){
		$sql = "SELECT * FROM adc ORDER by abates DESC ";
	}else if($_GET['buscaadc'] == 'mortes'){
		$sql = "SELECT * FROM adc ORDER by mortes DESC ";
	}else if($_GET['buscaadc'] == 'status'){
		$sql = "SELECT * FROM adc ORDER by status = 'ATIVO' DESC ";
	}else if($_GET['buscaadc'] == 'assist'){
		$sql = "SELECT * FROM adc ORDER by assist DESC ";		
}else{
	$sql = "SELECT * FROM adc";
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
