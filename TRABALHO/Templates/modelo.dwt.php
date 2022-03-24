<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Title      : Eclipse
Version    : 1.0
Released   : 20070415
Description: A two-column fixed-width with dark eerie look and feel suitable for personal blogs and organization sites.

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<!-- TemplateBeginEditable name="doctitle" -->
<title></title>
<!-- TemplateEndEditable -->
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="../estilos/default.css" rel="stylesheet" type="text/css" />
<!-- TemplateBeginEditable name="head" --><!-- TemplateEndEditable -->
</head>
<body>
<div id="logo">
	<h1><a href="http://www.freecsstemplates.org/"></a>My photos</h1>
	</div>
<div id="menu">
	<ul>
		<li ><a href="../index.php" title="">Home</a></li>
		<li><a href="../guis/guiacesso.php" title="">Acesso</a></li>
		<li><a href="../guis/guiusuario.php" title="">Cadastra-se</a></li>
        <li><a href="../guis/guibusca.php" title="">Buscar</a></li>
        <li><a href="../controles/usuariocontrole.php?operacao=deslogar" title="">SAIR</a></li>
	</ul>
</div>
<!-- end #menu -->
<div id="page">
	<div id="content">
<div id="example" class="post">
			<div class="title">
				<h2><!-- TemplateBeginEditable name="titulo" -->Bem vindo!<!-- TemplateEndEditable --></h2>
	  </div>
			<div class="story"><!-- TemplateBeginEditable name="texto" -->
            <p>&nbsp;</p>
			<!-- TemplateEndEditable --></div>
	  </div>
	</div>
	<!-- end #content -->
	<div id="sidebar">
	  <!-- end #login -->
  <div class="boxed">
			<div class="title">
				<h2>MENU</h2>
                <?php
              include_once('../classes/usuario.class.php');
              $u = Usuario::obterUsuarioLogado();
              if($u){
              	echo "<p>Bem vindo(a) <strong>$u->nome</strong></p>";
              ?>
                  <ul>
                      <li class="noend"><a href="../guis/guimostrarfotos.php" title="">Minhas Fotos</a></li>
                      <li class="noend"><a href="../guis/guiadicionarfotos.php">Adicionar Fotos</a></li>
                      <li class="noend"><a href="../guis/guiexcluirfotos.php">Excluir Fotos</a></li>
                      <li class="noend"><a href="../guis/guialterarsenha.php">Alterar senha</a></li>            
                      <li class="noend"><a href="../guis/guilistausuarios.php">Listar Usuarios</a></li>
                      <li class="noend"><a href="../guis/guiexcluirusuarios.php">Excluir Usuarios</a></li>
                      
                      
                </ul>
                <?php
                }else
                	echo "<p>Nenhum usuário logado</p>";
                 ?> 
	  </div>
			<div class="content"></div>
	  </div>
	</div>
<!-- end #sidebar -->
	<div id="extra" style="clear: both;">&nbsp;</div>
</div>
<!-- end #page -->
<div id="footer">
  <h3 id="legal"><a href="../guis/guiacessoadmin.php">CPANEL</a></h3>
  <p>&nbsp;</p>
</div>
</body>
</html>
