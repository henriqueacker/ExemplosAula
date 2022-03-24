<?php
session_start(); //deve ser o primeiro comando do script
include_once '../classes/usuariodao.class.php';
include_once '../classes/validacao.class.php';
switch($_GET['operacao']){
	case 'inserir':
		if($_POST){
			//INICIO DAS VALIDACOES
			$erros=array();
			if(!Validacao::validarNome($_POST['txtnome']))
				$erros[]='Nome incorreto!';
			if(!Validacao::validarEmail($_POST['txtemail']))
				$erros[]='Email incorreto!';
			if(!Validacao::validarSenha($_POST['txtsenha']))
				$erros[]='Senha incorreta!';
			if($_POST['txtsenha']!=$_POST['txtconfirmarsenha'])
				$erros[]='As senhas digitadas diferem!';
			//FIM DAS VALIDAÇÕES
			
			if(count($erros)>0){ //se ocorreu algum erro
				$_SESSION['erros'] = $erros;
				$_SESSION['form']=$_POST;
				header('location:../guis/guiusuario.php');//redireciona para o formulário
			}else{//caso não tenha ocorrido erro, cadastra o usuario
				$u = new Usuario;
				$u->nome = $_POST['txtnome'];
				$u->email = $_POST['txtemail'];
				mkdir("../fotos/".$_POST['txtemail'], 0700);
				$u->senha = Validacao::criptografar($_POST['txtsenha']);
				
				$dao = new UsuarioDAO;
				if($dao->inserir($u))
					$_SESSION['mensagem'] = 'User add com sucesso';
				else
					$_SESSION['mensagem'] = 'Falha ao add user';
				header('location:../guis/guimensagem.php');
			}//fecha else
		}//fecha if($_POST)
		break;	
		case 'listar':
			$dao = new UsuarioDAO;
			$usuarios = $dao->getUsuarios();
			if(count($usuarios)==0){
				$_SESSION['mensagem']='Nenhum user localizado';
				header('location:../guis/guimensagem.php');
			}else{
				$_SESSION['listausuarios']=serialize($usuarios);
				header('location:../guis/guilistausuarios.php');
			}
		break;
		case 'excluir':
			$dao = new UsuarioDAO;
			rmdir("../fotos");
			if($dao->excluir($_POST['cbusuarios']))
				$_SESSION['mensagem']='Usuario excluido com sucesso';
			else
				$_SESSION['mensagem']='Erro ao excluir usuario';
			header('location:../guis/guimensagem.php');
		break;
		case 'excluirfotos':
			$dao = new ImagensDAO;
			rmdir("../fotos");
			if($dao->excluir($_POST['txtexcluir']))
				$_SESSION['mensagem']='Usuario excluido com sucesso';
			else
				$_SESSION['mensagem']='Erro ao excluir usuario';
			header('location:../guis/guimensagem.php');
		break;
		case 'logar':
			if($_POST){
				if(Validacao::validarEmail($_POST['txtemail']) and
				   Validacao::validarSenha($_POST['txtsenha'])){
				   	$dao = new UsuarioDAO;
					$usuario = $dao->consultarUsuario($_POST['txtemail'], Validacao::criptografar($_POST['txtsenha']));
					if($usuario){
						$usuario->logar();
						$_SESSION['mensagem']='Usuario logado com sucesso';
					}else
						$_SESSION['mensagem']='Usuario desconhecido';						
				}else
					$_SESSION['mensagem']='Tentativa de acesso bloqueada, dados incorretos';
			}
			header('location:../guis/guimensagem.php');
		break;
		case 'deslogar':
			Usuario::deslogar();
			$_SESSION['mensagem']='Usuario deslogado com sucesso';
			header('location:../guis/guimensagem.php');
		break;
		case 'alterarsenha':
			if($_POST){
				if(Validacao::validarSenha($_POST['txtsenhaantiga'])and
					Validacao::validarSenha($_POST['txtnovasenha'])and
					$_POST['txtnovasenha']==$_POST['txtconfirmacao']){
					$u=Usuario::obterUsuarioLogado();
					$dao = new UsuarioDAO;
					if($dao->alterarSenha($u->id, Validacao::criptografar($_POST['txtsenhaantiga']),
						Validacao::criptografar($_POST['txtnovasenha']))){
						Usuario::deslogar();
						$_SESSION['mensagem']='Senha alterda com sucesso! Efetua login novamente';
					}else
						$_SESSION['mensagem']='Não foi possivel alterar a senha verifique os dados';
					}else
					$_SESSION['mensagem']='Dados invalidos';
				}
				header('location:../guis/guimensagem.php');
				break;
		case 'buscar':
			if($_POST){
			if(Validacao::validarNome($_POST['txtnome'])){
			$dao=new UsuarioDAO;
			$usuarios=$dao->buscarPorNome($_POST['txtnome']);
			if(count($usuarios)==0){
			$_SESSION['mensagem']='Nenhum user localizado';
			header('location:../guis/guimensagem.php');
			}else{
				$_SESSION['listausuarios']=serialize($usuarios);
				header('location:../guis/guilistausuarios.php');
			}
			}else{
				$_SESSION['mensagem']='Nome incorreto,busca interropida';
				header('location:../guis/guimensagem.php');
				}
			}
			break;		
}
?>