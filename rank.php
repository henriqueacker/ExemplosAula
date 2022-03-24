
<?php include_once 'layout/message.php' ?>
<?php include_once 'layout/header.php'?>
<?php include_once 'layout/menu.php'?>
<?php require_once 'php/conexaodb.php'; ?>
<script type="text/javascript">
  $(document).ready(function(){
	    $('select').formSelect();
	  });
  </script>
      <h1 class="header center purple-text">Rank</h1>
	  <div class="container">
    <div class="section">
      <div class="row center">
	  <h3 class="header  left purple-text">TOP</h3>

	
        <!-- TABELA TOP-->
		
	<table class="responsive-table">
		<thead>
			<tr>
				<th class='purple-text'>NOME</th>
				<th class='purple-text'>LANE</th>
				<th><a class='purple-text' href="rank.php?buscatop=vitoria">VITORIAS</a></th>
				<th class='purple-text'>JOGOS</th>
				<th><a class='purple-text'href="rank.php?buscatop=participacao">PARTICI ABATES</a></th>
				<th><a class='purple-text'href="rank.php?buscatop=farm">FARM</th>
				<th><a class='purple-text' href="rank.php?buscatop=controle">CONTROLE DE VISAO</th>
				<th><a class='purple-text'href="rank.php?buscatop=sentinela">SENT COMPRADAS</th>
				<th><a class='purple-text'href="rank.php?buscatop=dano">DANO CAUSADO</th>
				<th><a class='purple-text'href="rank.php?buscatop=abates">ABATES</th>
				<th><a class='purple-text'href="rank.php?buscatop=mortes">MORTES</th>
				<th><a class='purple-text'href="rank.php?buscatop=assist">ASSIST</th>
				<th><a class='purple-text'href="rank.php?buscatop=kda">KDA</a></th>
				<th class='purple-text'>ULT SCRIM</th>
				<th><a class='purple-text' href="rank.php?buscatop=status">	STATUS</th>
			</tr>
		</thead>
		<tbody>
	<?php
	$sql = "SELECT * FROM top";
if(isset($_GET['buscatop'])):
	if($_GET['buscatop'] == 'kda'){
	$sql = "SELECT * FROM top ORDER by KDA DESC ";
	}else if($_GET['buscatop'] == 'vitoria'){
		$sql = "SELECT * FROM top ORDER by vitoria DESC ";
	}else if($_GET['buscatop'] == 'participacao'){
		$sql = "SELECT * FROM top ORDER by particicao_de_abates DESC ";
	}else if($_GET['buscatop'] == 'farm'){
		$sql = "SELECT * FROM top ORDER by farm DESC ";
	}else if($_GET['buscatop'] == 'controle'){
		$sql = "SELECT * FROM top ORDER by controle_visao DESC ";
	}else if($_GET['buscatop'] == 'sentinela'){
		$sql = "SELECT * FROM top ORDER by sentinelas_compradas DESC ";
	}else if($_GET['buscatop'] == 'dano'){
		$sql = "SELECT * FROM top ORDER by dano DESC ";
	}else if($_GET['buscatop'] == 'abates'){
		$sql = "SELECT * FROM top ORDER by abates DESC ";
	}else if($_GET['buscatop'] == 'mortes'){
		$sql = "SELECT * FROM top ORDER by mortes DESC ";
	}else if($_GET['buscatop'] == 'status'){
		$sql = "SELECT * FROM top ORDER by status = 'ATIVO' DESC ";
	}
	else if($_GET['buscatop'] == 'assist'){
	$sql = "SELECT * FROM top ORDER by assist DESC ";
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
				<td><?php echo $dados['vitoria']; ?></td>
				<td><?php echo $dados['jogos']; ?></td>
				<td><?php echo $dados['particicao_de_abates']; ?></td>
				<td><?php echo $dados['farm']; ?></td>
				<td><?php echo $dados['controle_visao']; ?></td>
				<td><?php echo $dados['sentinelas_compradas']; ?></td>
				<td><?php echo $dados['dano']; ?></td>
				<td><?php echo $dados['abates']; ?></td>
				<td><?php echo $dados['mortes']; ?></td>
				<td><?php echo $dados['assist']; ?></td>
				<td><?php echo $dados['KDA']; ?></td>
				<td><?php echo $dados['ultima_scrim']; ?></td>
				<td><?php echo $dados['status']; ?></td>
			</tr>
	<?php endwhile;?>
	</tbody>
	</table>
	
	
	<h3 class="header  left purple-text">JG</h3>
	<!-- TABELA JG -->
	<table class="responsive-table">
		<thead>
			<tr>
				<th class='purple-text'>NOME</th>
				<th class='purple-text'>LANE</th>
				<th><a class='purple-text' href="rank.php?buscajg=vitoria">VITORIAS</a></th>
				<th class='purple-text'>JOGOS</th>
				<th><a class='purple-text'href="rank.php?buscajg=participacao">PARTICI ABATES</a></th>
				<th><a class='purple-text'href="rank.php?buscajg=farm">FARM</th>
				<th><a class='purple-text' href="rank.php?buscajg=controle">CONTROLE DE VISAO</th>
				<th><a class='purple-text'href="rank.php?buscajg=sentinela">SENT COMPRADAS</th>
				<th><a class='purple-text'href="rank.php?buscajg=dano">DANO CAUSADO</th>
				<th><a class='purple-text'href="rank.php?buscajg=abates">ABATES</th>
				<th><a class='purple-text'href="rank.php?buscajg=mortes">MORTES</th>
				<th><a class='purple-text'href="rank.php?buscajg=assist">ASSIST</th>
				<th><a class='purple-text'href="rank.php?buscajg=kda">KDA</a></th>
				<th class='purple-text'>ULT SCRIM</th>
				<th><a class='purple-text' href="rank.php?buscatop=status">	STATUS</th>
			</tr>
		</thead>
		<tbody>
 		
	<?php
$sql = "SELECT * FROM jg";
if(isset($_GET['buscajg'])):
	if($_GET['buscajg'] == 'kda'){
	$sql = "SELECT * FROM jg ORDER by KDA DESC ";
	}else if($_GET['buscajg'] == 'vitoria'){
		$sql = "SELECT * FROM jg ORDER by vitoria DESC ";
	}else if($_GET['buscajg'] == 'participacao'){
		$sql = "SELECT * FROM jg ORDER by particicao_de_abates DESC ";
	}else if($_GET['buscajg'] == 'farm'){
		$sql = "SELECT * FROM jg ORDER by farm DESC ";
	}else if($_GET['buscajg'] == 'controle'){
		$sql = "SELECT * FROM top ORDER by controle_visao DESC ";
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
				<td><?php echo $dados['vitoria']; ?></td>
				<td><?php echo $dados['particicao_de_abates']; ?></td>
				<td><?php echo $dados['jogos']; ?></td>
				<td><?php echo $dados['farm']; ?></td>
				<td><?php echo $dados['controle_visao']; ?></td>
				<td><?php echo $dados['sentinelas_compradas']; ?></td>
				<td><?php echo $dados['dano']; ?></td>
				<td><?php echo $dados['abates']; ?></td>
				<td><?php echo $dados['mortes']; ?></td>
				<td><?php echo $dados['assist']; ?></td>
				<td><?php echo $dados['KDA']; ?></td>
				<td><?php echo $dados['ultima_scrim']; ?></td>
				<td><?php echo $dados['status']; ?></td>

			</tr>
	<?php endwhile;?>
	</tbody>
	</table>
	<h3 class="header left purple-text">MID</h3>
	<!-- TABELA MID -->

	<table class="responsive-table">
		<thead>
			<tr>
			<th class='purple-text'>NOME</th>
				<th class='purple-text'>LANE</th>
				<th><a class='purple-text' href="rank.php?buscamid=vitoria">VITORIAS</a></th>
				<th class='purple-text'>JOGOS</th>
				<th><a class='purple-text'href="rank.php?buscamid=participacao">PARTICI ABATES</a></th>
				<th><a class='purple-text'href="rank.php?buscamid=farm">FARM</th>
				<th><a class='purple-text' href="rank.php?buscamid=controle">CONTROLE DE VISAO</th>
				<th><a class='purple-text'href="rank.php?buscamid=sentinela">SENT COMPRADAS</th>
				<th><a class='purple-text'href="rank.php?buscamid=dano">DANO CAUSADO</th>
				<th><a class='purple-text'href="rank.php?buscamid=abates">ABATES</th>
				<th><a class='purple-text'href="rank.php?buscamid=mortes">MORTES</th>
				<th><a class='purple-text'href="rank.php?buscamid=assist">ASSIST</th>
				<th><a class='purple-text'href="rank.php?buscamid=kda">KDA</a></th>
				<th class='purple-text'>ULT SCRIM</th>
				<th><a class='purple-text' href="rank.php?buscamid=status">	STATUS</th>
			</tr>
		</thead>
		<tbody>
	<?php
$sql = "SELECT * FROM estatistica";
if(isset($_GET['buscamid'])){
	if($_GET['buscamid'] == 'kda'){
	$sql = "SELECT * FROM estatistica ORDER by KDA DESC ";
	}else if($_GET['buscamid'] == 'vitoria'){
		$sql = "SELECT * FROM estatistica  ORDER by vitoria DESC ";
		
	}else if($_GET['buscamid'] == 'participacao'){
		$sql = "SELECT * FROM estatistica ORDER by particicao_de_abates DESC ";
	}else if($_GET['buscamid'] == 'farm'){
		$sql = "SELECT * FROM estatistica ORDER by farm DESC ";
	}else if($_GET['buscamid'] == 'controle'){
		$sql = "SELECT * FROM top ORDER by controle_visao DESC ";
	}else if($_GET['buscamid'] == 'sentinela'){
		$sql = "SELECT * FROM estatistica ORDER by sentinelas_compradas DESC ";
	}else if($_GET['buscamid'] == 'dano'){
		$sql = "SELECT * FROM estatisticaORDER by dano DESC ";
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
				<td><?php echo number_format(($dados['vitoria']/$dados['jogos'])*100);?>%</td>
				<td><?php echo $dados['particicao_de_abates']; ?></td>
				<td><?php echo $dados['jogos']; ?></td>
				<td><?php echo $dados['farm']; ?></td>
				<td><?php echo $dados['controle_visao']; ?></td>
				<td><?php echo $dados['sentinelas_compradas']; ?></td>
				<td><?php echo $dados['dano']; ?></td>
				<td><?php echo $dados['abates']; ?></td>
				<td><?php echo $dados['mortes']; ?></td>
				<td><?php echo $dados['assist']; ?></td>
				<td><?php echo $dados['KDA']; ?></td>
				<td><?php echo $dados['ultima_scrim']; ?></td>
				<td><?php echo $dados['status']; ?></td>

			</tr>
	<?php endwhile;?>
	</tbody>
	</table>
	<h3 class="header left purple-text">SUP</h3>
	

	<!-- TABELA SUP -->

	<table class="responsive-table">
		<thead>
			<tr>
			<th class='purple-text'>NOME</th>
				<th class='purple-text'>LANE</th>
				<th><a class='purple-text' href="rank.php?buscasup=vitoria">VITORIAS</a></th>
				<th class='purple-text'>JOGOS</th>
				<th><a class='purple-text'href="rank.php?buscasup=participacao">PARTICI ABATES</a></th>
				<th><a class='purple-text'href="rank.php?buscasup=farm">FARM</th>
				<th><a class='purple-text' href="rank.php?buscasup=controle">CONTROLE DE VISAO</th>
				<th><a class='purple-text'href="rank.php?buscasup=sentinela">SENT COMPRADAS</th>
				<th><a class='purple-text'href="rank.php?buscasup=dano">DANO CAUSADO</th>
				<th><a class='purple-text'href="rank.php?buscasup=abates">ABATES</th>
				<th><a class='purple-text'href="rank.php?buscasup=mortes">MORTES</th>
				<th><a class='purple-text'href="rank.php?buscasup=assist">ASSIST</th>
				<th><a class='purple-text'href="rank.php?buscasup=kda">KDA</a></th>
				<th class='purple-text'>ULT SCRIM</th>
				<th><a class='purple-text' href="rank.php?buscasup=status">	STATUS</th>
			</tr>
		</thead>
		<tbody>
	<?php
$sql = "SELECT * FROM sup";
if(isset($_GET['buscasup'])){
	if($_GET['buscasup'] == 'kda'){
	$sql = "SELECT * FROM sup ORDER by KDA DESC ";
	}else if($_GET['buscasup'] == 'vitoria'){
		$sql = "SELECT * FROM sup  ORDER by vitoria DESC ";
	}else if($_GET['buscasup'] == 'participacao'){
		$sql = "SELECT * FROM sup ORDER by particicao_de_abates DESC ";
	}else if($_GET['buscasup'] == 'farm'){
		$sql = "SELECT * FROM sup ORDER by farm DESC ";
	}else if($_GET['buscasup'] == 'controle'){
		$sql = "SELECT * FROM top ORDER by controle_visao DESC ";
	}else if($_GET['buscasup'] == 'sentinela'){
		$sql = "SELECT * FROM sup ORDER by sentinelas_compradas DESC ";
	}else if($_GET['buscasup'] == 'dano'){
		$sql = "SELECT * FROM sup ORDER by dano DESC ";
	}else if($_GET['buscasup'] == 'abates'){
		$sql = "SELECT * FROM sup ORDER by abates DESC ";
	}else if($_GET['buscasup'] == 'mortes'){
		$sql = "SELECT * FROM sup ORDER by mortes DESC ";
	}else if($_GET['buscasup'] == 'status'){
		$sql = "SELECT * FROM sup ORDER by status = 'ATIVO' DESC ";
	}else if($_GET['buscasup'] == 'assist'){
			$sql = "SELECT * FROM sup ORDER by assist DESC ";	
		
	}else{
		$sql = "SELECT * FROM sup";
	}
}
$resultado = mysqli_query($connect, $sql);
while ($dados = mysqli_fetch_array($resultado)) :
    ?>
		<tr>
				<td><?php echo $dados['nick']; ?></td>
				<td><?php echo $dados['posicao']; ?></td>
				<td><?php echo $dados['vitoria']; ?></td>
				<td><?php echo $dados['particicao_de_abates']; ?></td>
				<td><?php echo $dados['jogos']; ?></td>
				<td><?php echo $dados['farm']; ?></td>
				<td><?php echo $dados['controle_visao']; ?></td>
				<td><?php echo $dados['sentinelas_compradas']; ?></td>
				<td><?php echo $dados['dano']; ?></td>
				<td><?php echo $dados['abates']; ?></td>
				<td><?php echo $dados['mortes']; ?></td>
				<td><?php echo $dados['assist']; ?></td>
				<td><?php echo $dados['KDA']; ?></td>
				<td><?php echo $dados['ultima_scrim']; ?></td>
				<td><?php echo $dados['status']; ?></td>

			</tr>
	<?php endwhile;?>
	</tbody>
	</table>
	<h3 class="header left purple-text">ADC</h3>


	<!-- TABELA ADC -->
	<table class="responsive-table">
		<thead>
			<tr>
			<th class='purple-text'>NOME</th>
				<th class='purple-text'>LANE</th>
				<th><a class='purple-text' href="rank.php?buscaadc=vitoria">VITORIAS</a></th>
				<th class='purple-text'>JOGOS</th>
				<th><a class='purple-text'href="rank.php?buscaadc=participacao">PARTICI ABATES</a></th>
				<th><a class='purple-text'href="rank.php?buscaadc=farm">FARM</th>
				<th><a class='purple-text' href="rank.php?buscaadc=controle">CONTROLE DE VISAO</th>
				<th><a class='purple-text'href="rank.php?buscaadc=sentinela">SENT COMPRADAS</th>
				<th><a class='purple-text'href="rank.php?buscaadc=dano">DANO CAUSADO</th>
				<th><a class='purple-text'href="rank.php?buscaadc=abates">ABATES</th>
				<th><a class='purple-text'href="rank.php?buscaadc=mortes">MORTES</th>
				<th><a class='purple-text'href="rank.php?buscaadc=assist">ASSIST</th>
				<th><a class='purple-text'href="rank.php?buscaadc=kda">KDA</a></th>
				<th class='purple-text'>ULT SCRIM</th>
				<th><a class='purple-text' href="rank.php?buscaadc=status">	STATUS</th>
			</tr>
		</thead>
		<tbody>
	<?php
$sql = "SELECT * FROM adc";
if(isset($_GET['buscaad'])){
	if($_GET['buscaadc'] == 'kda'){
	$sql = "SELECT * FROM adc ORDER by KDA DESC ";
	}else if($_GET['buscaadc'] == 'vitoria'){
		$sql = "SELECT * FROM adc ORDER by vitoria DESC ";
	}else if($_GET['buscaadc'] == 'participacao'){
		$sql = "SELECT * FROM adc ORDER by particicao_de_abates DESC ";
	}else if($_GET['buscaadc'] == 'farm'){
		$sql = "SELECT * FROM adc ORDER by farm DESC ";
	}else if($_GET['buscaadc'] == 'controle'){
		$sql = "SELECT * FROM top ORDER by controle_visao DESC ";
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
				<td><?php echo $dados['vitoria']; ?></td>
				<td><?php echo $dados['particicao_de_abates']; ?></td>
				<td><?php echo $dados['jogos']; ?></td>
				<td><?php echo $dados['farm']; ?></td>
				<td><?php echo $dados['controle_visao']; ?></td>
				<td><?php echo $dados['sentinelas_compradas']; ?></td>
				<td><?php echo $dados['dano']; ?></td>
				<td><?php echo $dados['abates']; ?></td>
				<td><?php echo $dados['mortes']; ?></td>
				<td><?php echo $dados['assist']; ?></td>
				<td><?php echo $dados['KDA']; ?></td>
				<td><?php echo $dados['ultima_scrim']; ?></td>
				<td><?php echo $dados['status']; ?></td>

			</tr>
	<?php endwhile;?>
	</tbody>
	</table>
      </div>


    </div>
  </div>
  </div>
  </div>
 <?php include_once 'layout/footer.php' ?>
