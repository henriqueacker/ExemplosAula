<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"
    import="com.aula.Produto,java.util.ArrayList"
    %>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Cadastro</title>
</head>
<body>

<%
	String nome = request.getParameter("nome");
	String preco = request.getParameter("preco");
	
	Produto produto = new Produto();
	produto.nome = nome;
	produto.preco = Float.parseFloat(preco);
	
	
	ArrayList<Produto> listaProdutos = (ArrayList<Produto>)  application.getAttribute("lista_produtos");//BUSCA
	if(listaProdutos == null){	
		 listaProdutos = new ArrayList<Produto>(); // CRIA LISTA
		application.setAttribute("lista_produtos", listaProdutos); // 
	}
	
	listaProdutos.add(produto);
	
	for(Produto p : listaProdutos){
		out.println("<br>Nome Produto: " + p.nome + ", Preço R$ " + p.preco);
		out.println("<br>--------------------------------------------------------------");
	}
	
	

%>

</body>
</html>