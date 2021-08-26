<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Exercicio Aula 7</title>
</head>
<body>

<script>
function chamaControler1(){
	window.location.href  = "controlador1";
}

function chamaControler2(){
	window.location.href  = "controlador2";
}

</script>

Botão 1: 
<input type="button" onclick="chamaControler1()" value="controller 1"/>
<br>
Botão 2:
<input type="button" onclick="chamaControler2()" value="controller 2"/>


</body>
</html>