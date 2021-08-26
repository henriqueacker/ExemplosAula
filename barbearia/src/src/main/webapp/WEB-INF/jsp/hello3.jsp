<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>

HELLO3

<%
	// CODIGO JSP
	String nome = request.getParameter("nome");
	out.println("O valor do parametro nome é: " + nome);

%>

</body>
</html>