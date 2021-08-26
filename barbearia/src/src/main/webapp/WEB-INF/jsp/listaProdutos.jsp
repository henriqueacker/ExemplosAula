<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1" 
    import=com.aula.Produto,java.util.*
    %>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>

<%
	// A LISTA ABAIXO, DEVE SER INSERIDA NUMA VARIAVEL DE SESSAO OU APLICACAO	
	List<Produto> lista = new ArrayList<Produto>(); // VARIAVEL REQUEST.
	
	// PEGA AS INFOMRACOES DA TELA
	// CRIA O OBJETO
	Produto produto = new Produto();
	// SETA OS VALORES NO OBJETO
	// SALVA NA LISTA

	// MOSTRA A LISTA NUMA TABELA.
	
%>

</body>
</html>