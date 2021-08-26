<html>
<body>
<div class="container">
	Bem Vindo ${name} a página JSP!! 
	<br>
	
	<%
		out.println("<i>Código gerado por jsp.</i>");
		out.println("<br>meu nome é marcelo");
		
	%>
	
	<!--  aqui já é html -->
	
	<br>
	voltei a programar em HTML.
	<br>
	
	<%
		String nome = "Maria da Siva";
		int idade = 10;
		if(idade > 18){
			out.println(nome + " é maior de idade");
		}else{
			out.println(nome + " é menor de idade");
		}
	
		for(int i=0; i < 5; i++){
			out.println("<br>valor do contador = " + i);
		}
		
	%>
	<br>
	<a href="produtos">Produtos </a>
	
	
</div>


</body>
</html>