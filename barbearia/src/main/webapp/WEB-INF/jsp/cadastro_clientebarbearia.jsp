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
		<div class="section" id="sobre">
			<h5 class="header center black-text">Sobre</h5>
			
<p>

A KING BARBER SHOP nasce do interesse maior das pessoas, em ser um fator referencial no ambiente masculino, que deve servir de motivação para nossos clientes. O homem contemporâneo no mercado se fortalece, 
a medida que a competitividade está aberta e mais oportunidades são geradas para diferentes tipos. 
A KING BARBER SHOP trabalha num mercado aquecido pela economia do setor e, por fim, dá mais opções ao consumidor.</p>

<p>
Para os homens, além de representar economia, há a comodidade de ser mais que um produto, 
mas que o atenda em diferentes momentos do seu dia a dia. As linhas de serviço da empresa são uma ótima porta de entrada ao público masculino,
conquistando clientes por meio da praticidade sem perder a eficácia.</p>
			
<p>
Diferente das antigas barbearias, nosso estabelecimento trabalha com produtos especializados e profissionais 
que trazem uma gama de conhecimentos ligados à qualidade e prestação de serviço, que demandam cuidados higiênicos e 
diários no manuseio com ceras, cremes, sprays e outra infinidade de itens que são indicados e vendidos pelos próprios barbeiros. 
Conte com um de nossos serviços de corte, barba ou sobrancelha. Agende já sua visita!</p>
			
<p>
KING BARBER SHOP, KING É SER CLIENTE</p>

		</div>
		<div class="section" id="galeria">
			<h5 class="header center black-text">Galeria</h5>
			<div class="row">
				<div class="left">
					<img class="materialboxed" width="650"
						src="https://www.lamafiabarbearia.com.br/wp-content/uploads/2018/05/gravatai2.jpg">
				</div>

				<div class="right">
					<img class="materialboxed" width="650"
						src="https://www.lamafiabarbearia.com.br/wp-content/uploads/2018/05/gravatai4.jpg">
				</div>
			</div>



		</div>
		<h5 class="header center black-text">Agendar</h5>
		<div class="section" id="agenda">
			<!-- FORMULARIO -->
			<fieldset>
				<form class="col s12" action="cadastrar_clientebarberia" method="post">

					<div class="row">
						<div class="input-field col s6">
							<input name="nome" type="text" class="validate"> <label
								for="nome">Nome</label>
						</div>

						<div class="input-field col s6">
							<input name="email" type="email" class="validate"> <label
								for="email">Email</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col s3">
							<input name="telefone" type="text" class="validate"> <label
								for="telefone">Telefone</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col s3">
							<select name='servico'>
								<option value="" disabled selected>Escolha o serviço</option>
								<option value="Barba">Barba</option>
								<option value="Cabelo">Cabelo</option>
								<option value="Sobrancelha">Sobrancelha</option>

							</select>
						</div>
					</div>

					<div class="row">
						<div class="input-field col s3">
							<input name="data" type="date" class="validate">

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
								<select name='hora'>
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
								Enviar <i class="material-icons right">send</i>
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