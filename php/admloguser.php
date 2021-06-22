<?php

include "buscgame.php";

$EMAIL = $_GET["EMAIL"];
$SENHA = $_GET["SENHA"];
$Botao = $_GET["Botao"];


// ================== rotina de Consultar =======================================================
if ($Botao == "Consultar")
{
	//Consulta por bloco --------------------------
	try
	{
		if ($EMAIL == '')
		{
			$Matriz = $conexao->prepare("select * from login");
		}
		else
		{
			$Matriz = $conexao->prepare("select * from login where EMAIL = ?");
			$Matriz->bindParam(1, $EMAIL);
		}

		if ($Matriz->execute())
		{
			while ($Linha = $Matriz->fetch(PDO::FETCH_OBJ))
			{
				echo 'Email '   . $Linha->EMAIL . '<br>';
				echo 'Senha '    . $Linha->SENHA	 . '<br>';
				echo '<hr>';
			}
		}
		else
		{
			echo "<script> alert('Erro na Consulta') </script>";
		}

	}
	catch (PDOException $Erro)
	{
		echo 'Avisar equipe de TI ' . $Erro->getMessage();
	}

}

