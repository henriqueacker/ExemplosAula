<?php
include_once '../classes/usuario.class.php';
if(!Usuario::obterUsuarioLogado()){
	$_SESSION['mensagem']='Voce nao tem permissao para acessar este conteudo ou executar esta operacao';
	header('location:../guis/guimensagem.php');
	exit();
}
?>