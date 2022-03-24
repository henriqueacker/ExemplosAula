
<?php include_once 'layout/message.php';?>
<?php include_once 'layout/header.php';?>
<?php include_once 'layout/menu.php';?>
<?php if(!isset($_SESSION['logado'])):
	header('Location: login.php');
endif;
?>
<body >

<script type="text/javascript">
  $(document).ready(function(){
	    $('select').formSelect();
	  });
  </script>
	<div class="row container">

		
	<form class="col s3" action="php/insert.php" method="post">
			<div class="input-field inline">
				<input id="nick" name='nick' type="text" class="validate"> <label
					for='nick'>Nick</label>
			</div>
			<div class="input-field inline">
				<input id="email" name='email' type="email" class="validate"> <label
					for='email'>Email</label>
			</div>
			<div class="input-field inline">
				<input id="senha" name='senha' type="password" class="validate"> <label
					for='senha'>Senha</label>
			</div>
			<button class="btn black waves-effect waves-light" type="submit"
				name="cadastrouser">
				Cadastrar <i class="material-icons right">send</i>
			</button>
			
		</form>

<a href="login.php">Entrar</a>
<table class="striped">
		<thead>
			<tr>
				<th>NICK</th>
				<th>EMAIL</th>
				<th>SENHA</th>
			</tr>
		</thead>
		<tbody>
	<?php 

require_once 'php/conexaodb.php';	
$sql = "SELECT * FROM usuario";
$resultado = mysqli_query($connect, $sql);
if (mysqli_num_rows($resultado) > 0) :

    while ($dados = mysqli_fetch_array($resultado)) :
        ?>
		<tr>
				<td><?php echo $dados['nick']; ?></td>
				<td><?php echo $dados['email']; ?></td>
				<td><?php echo $dados['senha']; ?></td>
				<td><a href="editarindex.php?id=<?php echo $dados['id']; ?>"
					class="btn-floating orange"><i class="material-icons">edit</i></a></td>
				<td><a href="#modal<?php echo $dados['id']; ?>"
					class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

			</tr>
			<!-- Modal Structure -->
			<div id="modal<?php echo $dados['id']; ?>" class="modal">
				<div class="modal-content">
					<h6>Deseja excluir esse usuario?</h6>
				</div>
				<div class="modal-footer">
					<form action="php/delete.php" method="POST">
						<input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
						<button type="submit" name="btn-deletaruser" class="btn red">Sim,
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

	</div>
	
	<div style=" height:207px ;"></div>
	<?php include_once 'layout/footer.php';?>
</body>
</html>