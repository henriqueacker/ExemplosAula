
<?php include_once 'layout/message.php' ?>
<?php include_once 'layout/header.php'?>
<?php include_once 'layout/menu.php'?>
<?php require_once 'php/conexaodb.php'; ?>
<script type="text/javascript">
  $(document).ready(function(){
	    $('select').formSelect();
	  });
  </script>
      <h1 class="header center purple-text">Rank SUP</h1>
	  <div class="container">
    <div class="section">
      <div class="row center">
	<!-- TABELA SUP -->

	<table class="responsive-table">
		<thead>
			<tr>
			<th class='purple-text'>NOME</th>
				<th class='purple-text'>LANE</th>
				<th><a class='purple-text' href="ranksup.php?buscasup=vitoria">VITORIAS</a></th>
				<th class='purple-text'>JOGOS</th>
				<th><a class='purple-text'href="ranksup.php?buscasup=participacao">PARTICI ABATES</a></th>
				<th><a class='purple-text'href="ranksup.php?buscasup=farm">FARM</th>
				<th><a class='purple-text' href="ranksup.php?buscasup=controle">CONTROLE DE VISAO</th>
				<th><a class='purple-text'href="ranksup.php?buscasup=sentinela">SENT COMPRADAS</th>
				<th><a class='purple-text'href="ranksup.php?buscasup=dano">DANO CAUSADO</th>
				<th><a class='purple-text'href="ranksup.php?buscasup=abates">ABATES</th>
				<th><a class='purple-text'href="ranksup.php?buscasup=mortes">MORTES</th>
				<th><a class='purple-text'href="ranksup.php?buscasup=assist">ASSIST</th>
				<th><a class='purple-text'href="ranksup.php?buscasup=kda">KDA</a></th>
				<th class='purple-text'>ULT SCRIM</th>
				<th><a class='purple-text' href="ranksup.php?buscasup=status">	STATUS</th>
			</tr>
		</thead>
		<tbody>
	<?php
$sql = "SELECT * FROM sup";
if(isset($_GET['buscasup'])){
	if($_GET['buscasup'] == 'kda'){
	$sql = "SELECT * FROM sup ORDER by KDA DESC ";
	}else if($_GET['buscasup'] == 'vitoria'){
		$sql = "SELECT * FROM sup  ORDER by vitoria_porcentagem DESC ";
	}else if($_GET['buscasup'] == 'participacao'){
		$sql = "SELECT * FROM sup ORDER by particicao_de_abates DESC ";
	}else if($_GET['buscasup'] == 'farm'){
		$sql = "SELECT * FROM sup ORDER by farm DESC ";
	}else if($_GET['buscasup'] == 'controle'){
		$sql = "SELECT * FROM sup ORDER by controle_visao DESC ";
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
