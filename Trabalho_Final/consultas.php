<title>CONSULTAS</title> 
<?php include_once 'layout/header.php'; //INCLUINDO O CONTEUDO DA PAGINA HEADER.PHP?>
<?php include_once 'layout/menu.php'; //INCLUINDO O CONTEUDO DA PAGINA MENU.PHP?>

<?php
//FAZENDO A CONEXAO COM BANCO DE DADOS
require_once 'php/conexao.php';
$sql = "SELECT * FROM consulta ORDER by data ASC"; //COMANDO SQL PARA LISTAR AS CONSULTAS EM ORDEM CRESCENTE
$resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
mysqli_close($conexao); //FECHANDO A CONEXAO
?>
<div id='container'>
	<fieldset>
		<legend>CONSULTAS</legend>		
	<?php
$dados = mysqli_num_rows($resultado);
//VERIFICANDO SE EXISTEM DADOS NA TABELA CONSULTAS
if ($dados == 0) {
    echo 'Nao exitem consultas marcadas';

} else {
    //IMPRIMINDO A TABELA CONSULTAS
    echo '<br>';
    echo "<table>";
    echo "<tr><td>DATA</td>";
    echo "<td>HORA</td>";
    echo "<td>MEDICO</td>";
    echo "<td>PACIENTE</td>";
    echo "<td>ESPECIALIDADE</td></tr>";
    while ($row = mysqli_fetch_array($resultado)) :
    echo "<tr><td>" . date('d-m-Y', strtotime($row["data"])) . '&nbsp' . '&nbsp' . '</td>'; // USANDO A FUNÇÃO DATE PARA IMPRIMIR A DATA NO PADRÃO BRASILEIRO
    echo "<td>" . $row["hora"] . '&nbsp' . '&nbsp' . '</td>';
    echo "<td>" . $row["medico"] . '&nbsp' . '&nbsp' . '</td>';
    echo "<td>" . $row["paciente"] . '&nbsp' . '&nbsp' . '</td>';
    echo "<td>" . $row["especialidade"] . '&nbsp' . '&nbsp' . '</td>';
        echo "<td>" . "<a href=editarconsulta.php?id=" . $row['id'] . ">EDITAR</a>" . '</td>';
        echo "<td>" . "<a href=php/deleteconsulta.php?id=" . $row['id'] . ">DELETAR</a>" . '</td></tr>';
    endwhile
    ;
    echo "</table>";
}
?>
</fieldset>
</div>

<?php include_once 'layout/footer.php'; //INCLUINDO O CONTEUDO DA PAGINA FOOTER.PHP?>

