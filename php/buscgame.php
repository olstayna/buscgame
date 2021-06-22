<?php

$Bco = 	'buscgame';
$Usuario = 'root';
$Senha = '';

try
{
	$conexao = new PDO("mysql:host=localhost;dbname=$Bco", "$Usuario", "$Senha");
	$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conexao->exec("set names utf8");
}
catch (PDOExecption $Erro)
{
	echo 'Erro, entre em contato com nossa equipe' . $Erro->getMessage();
}


