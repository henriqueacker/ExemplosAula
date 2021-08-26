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
		<div class="section">
			<fieldset>
			<h5 class="header center black-text">Clientes</h5>
	<%
	ClienteBarbearia cliente = new ClienteBarbearia();

	
	List<ClienteBarbearia> listaClientes = ClienteServico.listar();
	
		out.println("<table class='striped'>");
		out.println ("<thead>");
		out.println ("<tr>");
		out.println (" <th>Nome</th>");
		out.println ("<th>Telefone</th>");
		out.println ("<th>Email</th>"); 
		out.println ("<th>Data</th>");
		out.println ("<th>Horario</th>");
		out.println ("<th>Servico</th>");
		out.println ("<th>ID</th>");
		out.println ("<th>Editar</th>");
		out.println ("<th>Deletar</th>"); 
		out.println ("</tr>");
 		out.println ("</thead>");
 		out.println ("<tbody>");
 		
 		for(ClienteBarbearia clientes : listaClientes){
			out.println("<tr>");
			out.println("<td>");
			out.println(clientes.nome);
			out.println("</td>");
			out.println("<td>");
			out.println(clientes.telefone);
			out.println("</td>");
			out.println("<td>");
			out.println(clientes.email);
			out.println("</td>");
			out.println("<td>");
			out.println(clientes.data);
			out.println("</td>");
			out.println("<td>");
			out.println(clientes.horario);
			out.println("</td>");
			out.println("<td>");
			out.println(clientes.servico);
			out.println("</td>");
			out.println("<td>");
			out.println(clientes.id);
			out.println("</td>");
			out.println("<td>");
			out.println("<a href='editar/"+clientes.id+ "'class='btn-floating orange'><i class='material-icons'>edit</i></a>");
			out.println("</td>");
			out.println("<td>");
			out.println("<a href='deletar/" +clientes.id+ "'class='btn-floating red modal-trigger'><i class='material-icons'>delete</i></a>");
			out.println("</td>");
			
			out.println("</tr>");
		}
 		out.println ("</tbody>");
		out.println("</table>");
	
	%>

			
		</div>
	</div>
	<div class="col l6 s12">
	
	</div>
<div style=" height:500px ;"></div>
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
			<div class="container">© 2021 Desenvolvido</div>
		</div>
	</footer>
	
	<script>
			M.AutoInit();
		</script>
</body>
</html>