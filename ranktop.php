
<?php include_once 'layout/message.php' ?>
<?php include_once 'layout/header.php'?>
<?php include_once 'layout/menu.php'?>
<?php require_once 'php/conexaodb.php'; ?>
<script type="text/javascript">
  $(document).ready(function(){
	    $('select').formSelect();
	  });
  </script>
      <h1 class="header center purple-text">Rank TOP</h1>
	  <div class="container">
    <div class="section">
      <div class="row center">
	
        <!-- TABELA TOP-->
		
	<table class="responsive-table">
		<thead>
			<tr>
				<th class='purple-text'>NOME</th>
				<th class='purple-text'>LANE</th>
				<th><a class='purple-text' href="ranktop.php?buscatop=vitoria">VITORIAS</a></th>
				<th class='purple-text'>JOGOS</th>
				<th><a class='purple-text'href="ranktop.php?buscatop=participacao">PARTICI ABATES</a></th>
				<th><a class='purple-text'href="ranktop.php?buscatop=farm">FARM</th>
				<th><a class='purple-text' href="ranktop.php?buscatop=controle">CONTROLE DE VISAO</th>
				<th><a class='purple-text'href="ranktop.php?buscatop=sentinela">SENT COMPRADAS</th>
				<th><a class='purple-text'href="ranktop.php?buscatop=dano">DANO CAUSADO</th>
				<th><a class='purple-text'href="ranktop.php?buscatop=abates">ABATES</th>
				<th><a class='purple-text'href="ranktop.php?buscatop=mortes">MORTES</th>
				<th><a class='purple-text'href="ranktop.php?buscatop=assist">ASSIST</th>
				<th><a class='purple-text'href="ranktop.php?buscatop=kda">KDA</a></th>
				<th class='purple-text'>ULT SCRIM</th>
				<th><a class='purple-text' href="ranktop.php?buscatop=status">	STATUS</th>
			</tr>
		</thead>
		<tbody>
	<?php
	$sql = "SELECT * FROM top";
if(isset($_GET['buscatop'])):
	if($_GET['buscatop'] == 'kda'){
	$sql = "SELECT * FROM top ORDER by KDA DESC ";
	}else if($_GET['buscatop'] == 'vitoria'){
		$sql = "SELECT * FROM top ORDER by vitoria_porcentagem DESC ";
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
