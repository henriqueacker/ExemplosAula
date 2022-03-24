<?php

	if($_POST){
		include_once '../classes/upload.class.php';
		include_once '../classes/validacao.class.php';
		include_once '../classes/imagensdao.class.php';
		include_once '../classes/imagens.class.php';

		
		$erros=array();
		$up=new Upload($_FILES['foto']);
		$up->tamanhoMaximo= 1048576;
		$tipos=array('image/gif','image/png','image/jpeg','image/pjpeg');
		$up->tiposValidos=$tipos;
		
		if(!$up->verificarTamanho())
			$erros[]='Tamanho excede 1mb!!';
		if(!$up->verificarTipo())
			$erros[]='Tipo de imagem inválido!!';
		
				
		if(count($erros)>0){
			foreach($erros as $e)
				echo"<p>$e</p>";
		
			$ext=$up->obterExtensao();
			$destino="fotos/"."teste".".$ext";
			}
			if($up->upload ($destino)){
			echo'<p> arquivo enviado com sucesso!</p>';
		}
		else{
			echo '<p> falha ao enviar o arquivo !!</P>';
		}
		}

	
?>