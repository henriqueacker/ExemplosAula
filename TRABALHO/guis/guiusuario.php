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
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/modelo.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Eclipse by Free Css Templates</title>
<!-- InstanceEndEditable -->
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="../estilos/default.css" rel="stylesheet" type="text/css" />
<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
</head>
<body>
<div id="logo">
	<h1><a href="http://www.freecsstemplates.org/"></a>My photos</h1>
	</div>
<div id="menu">
	<ul>
		<li ><a href="../index.php" title="">Home</a></li>
		<li><a href="guiacesso.php" title="">Acesso</a></li>
		<li><a href="guiusuario.php" title="">Cadastra-se</a></li>
        <li><a href="guibusca.php" title="">Buscar</a></li>
        <li><a href="../controles/usuariocontrole.php?operacao=deslogar" title="">SAIR</a></li>
	</ul>
</div>
<!-- end #menu -->
<div id="page">
	<div id="content">
<div id="example" class="post">
			<div class="title">
				<h2><!-- InstanceBeginEditable name="titulo" -->Informe seus dados<!-- InstanceEndEditable --></h2>
	  </div>
			<div class="story"><!-- InstanceBeginEditable name="texto" -->
            <?php
//	SCRIPT PARA EXIBIÇÃO DAS MENSGENS DE ERRO - VEM DO CONTROLE
if(isset($_SESSION['erros'])){//se existe a sessão de erros
	foreach($_SESSION['erros'] as $e)//percorre a lista de erros
		echo "<p>$e</p>";//exibe cada erro dentro de um parágrafo
	unset($_SESSION['erros']);//após exibir,apaga os erros
}
?>
                    <form id="form1" method="post" action="../controles/usuariocontrole.php?operacao=inserir">
                      <label><br />
                      Seu Nome<br />
                      <input type="text" name="txtnome" id="txtnome" value="<?php if(isset($_SESSION['form'])) echo $_SESSION['form']['txtnome']?>"/>
                      </label>
                      <p>
                        <label>Seu e-mail<br />
                        <input type="text" name="txtemail" id="txtemail" value="<?php if(isset($_SESSION['form'])) echo $_SESSION['form']['txtemail']?>"/>
                        </label>
                      </p>
                      <p>
                        <label>Senha<br />
                        <input type="text" name="txtsenha" id="txtsenha" value="<?php if(isset($_SESSION['form'])) echo $_SESSION['form']['txtsenha']?>" /></label> 
                        Mín. 4 caracteres - letras e números</p>
                      <p>
                        <label>Confirmar senha <br />
                        <input type="text" name="txtconfirmarsenha" id="txtconfirmarsenha"  value="<?php if(isset($_SESSION['form'])) echo $_SESSION['form']['txtconfirmarsenha']?>"/>
                        </label>
                      </p>
                      <p>
                        <label>
                        <input type="submit" name="button" id="button" value="Cadastrar" />
                        </label>
                      </p>
                      
                     <?php unset($_SESSION['form']); ?> 
                    </form>
            <p>&nbsp;</p>
			<!-- InstanceEndEditable --></div>
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
                      <li class="noend"><a href="guimostrarfotos.php" title="">Minhas Fotos</a></li>
                      <li class="noend"><a href="guiadicionarfotos.php">Adicionar Fotos</a></li>
                      <li class="noend"><a href="guiexcluirfotos.php">Excluir Fotos</a></li>
                      <li class="noend"><a href="guialterarsenha.php">Alterar senha</a></li>
             
                      <li class="noend"><a href="guilistausuarios.php">Listar Usuarios</a></li>
                      <li class="noend"><a href="guiexcluirusuarios.php">Excluir Usuarios</a></li>
                      
                      
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
  <h3 id="legal"><a href="guiacessoadmin.php">CPANEL</a></h3>
  <p>&nbsp;</p>
</div>
</body>
<!-- InstanceEnd --></html>
