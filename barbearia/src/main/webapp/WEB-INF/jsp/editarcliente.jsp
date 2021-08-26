<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
	import="java.util.*,com.aula.dados.ClienteBarbeariaRepositorio,
	com.aula.modelos.ClienteBarbearia, com.aula.negocio.ClienteServico"
	pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>

<!--  Scripts-->
<script type="text/javascript"
	src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
	rel="stylesheet">
<!-- Compiled and minified CSS -->
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<body>
	<script type="text/javascript">
		$(document).ready(function() {
			$('select').material_select();
		});
		$(document).ready(function(){
			$('.materialboxed').materialbox(); }); 
	</script>

	<nav class="#42a5f5 blue lighten-1" role="navigation">
		<div class="nav-wrapper container">
			<a id="logo-container" href="cadastro_clientes" class="brand-logo">KING
				BARBER SHOP</a>
			<ul class="right hide-on-med-and-down">
				<li><a href="#sobre">SOBRE</a></li>
				<li><a href="#agenda">AGENDAR</a></li>
				<li><a href="#galeria">GALERIA</a></li>

			</ul>


		</div>
	</nav>


	<div class="container">
		<h5 class="header center black-text">Editar Cliente</h5>
		<div class="section" id="agenda">
			<!-- FORMULARIO -->
			<fieldset>
					<form class="col s12" action="/editar" method="post">
							<input name="id" type="hidden" value='${id}' class="validate">
					<div class="row">
						<div class="input-field col s6">
							<input value='${nome}' name="nome" type="text" class="validate"> <label
								for="nome">Nome</label>
						</div>

						<div class="input-field col s6">
							<input value="${email}" name="email" type="email" class="validate"> <label
								for="email">Email</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col s3">
							<input value="${telefone}" name="telefone" type="text" class="validate"> <label
								for="telefone">Telefone</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col s3">
							<select value="${servico}" name='servico'>
								<option value="" disabled selected>Escolha o serviço</option>
								<option value="Barba">Barba</option>
								<option value="Cabelo">Cabelo</option>
								<option value="Sobrancelha">Sobrancelha</option>

							</select>
						</div>
					</div>

					<div class="row">
						<div class="input-field col s3">
							<input value="${data}" name="data" type="date" class="validate">

						</div>
						<% 
							ArrayList<String> hora = new ArrayList<>();
							hora.add("09:30");hora.add("10:00");
							hora.add("10:30");hora.add("11:00");
							hora.add("11:30");hora.add("14:00");
							hora.add("14:30");hora.add("15:00");
							hora.add("15:30");hora.add("16:00");
							hora.add("16:30");hora.add("17:00");
							hora.add("17:30");hora.add("18:00");
							hora.add("18:30");
						%>
						<div class="row">
							<div class="input-field col s3">
								<select value="${hora}" name='hora'>
								<option value="" disabled selected>Escolha o Horario</option>
							<% 
							for(String horario : hora){
							out.print("<option>"+horario+"</option>");
							}
							%>
						
							</select>
							</div>

					</div>
						<div class="row col s3">
							<button
								class="btn #42a5f5 blue lighten-1 waves-effect waves-light"
								type="submit" name="enviar">
								Alterar <i class="material-icons right">send</i>
							</button>
						</div>
				</form>
				
			</fieldset>
			<script>
			if('${MENSAGEM}' == ""){
				
			}else{
				alert('${MENSAGEM}')
			}
				
			</script>
		
	

		</div>
	</div>


<div style=" height:83px ;"></div>
	<!-- FOOTER -->
	<footer class="page-footer #42a5f5 blue lighten-1">
		<div class="container">
			<div class="row">
				<div class="col l6 s12">
					<h5 class="white-text">Endereco</h5>
					<p class="grey-text text-lighten-4">Av. Assis Brasil, 8787 -
						Sarandi, Porto Alegre - RS, 91140-001.</p>
					<p class="grey-text text-lighten-4">Telefones: 985934251 |
						34231967.</p>
				</div>
				<div class="col l4 offset-l2 s12">
					<h5 class="white-text">Horario de Funcionamento</h5>
					<table>

						<tr>
							<th>Seg a Sex:</th>
							<th>09:30 - 12:00 | 14:00 - 19:00</th>

						</tr>
						<tr>
							<th>Sabado:</th>
							<th>09:30 - 12:00 | 13:30 - 18:00</th>
						</tr>

					</table>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">Â© 2021 Desenvolvido</div>
		</div>
	</footer>

	<script>
			M.AutoInit();
		</script>
</body>
</html>