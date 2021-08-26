<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Calculadora</title>
</head>
<body>

<form action="calcular" method="post">
	valor 1: <input type="text" name="valor1"/> <br>
	valor 2: <input type="text" name="valor2"/> <br>
	Operação<select name="operacao">
		<option value="soma">Somar</option>
		<option value="subtrair">Subtrair</option>
	</select><br>
	<input type="submit" value="enviar"/>
</form>


</body>
</html>