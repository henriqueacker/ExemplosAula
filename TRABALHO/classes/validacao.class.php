<?php
class Validacao{
	public static function validarEmail($email){
		return filter_var($email, FILTER_VALIDATE_EMAIL);
	}
	public static function validarNome($nome){
		$formato = '/^[a-zA-Z á-ü]+$/';
		return preg_match($formato, $nome);
	}
	public static function validarSenha($senha){
		$formato = '/^[a-zA-Z0-9]{4,255}$/';
		return preg_match($formato, $senha);
	}
	public static function criptografar($texto){
		return md5($texto);
	}
}
?>
