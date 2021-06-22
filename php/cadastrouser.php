<?php

include "buscgame.php";

$Nome = $_GET["Nome"];
$Sobrenome = $_GET["Sobrenome"];
$EMAIL = $_GET["EMAIL"];
$SENHA = $_GET["SENHA"];
$CELULAR = $_GET["CELULAR"];
$Botao = $_GET["Botao"];


// ================== rotina de Inclusao =======================================================
if ($Botao == "Cadastrar")
{
try 
	{
		$Comando=$conexao->prepare("insert into cad_usuario (Nome,Sobrenome,EMAIL,SENHA,CELULAR) values (?,?,?,?,?) ");
		$Comando->bindParam(1, $Nome);
		$Comando->bindParam(2, $Sobrenome);
		$Comando->bindParam(3, $EMAIL);
		$Comando->bindParam(4, $SENHA);
        $Comando->bindParam(5, $CELULAR);

        $Comando->execute();

		if ($Comando->rowCount() > 0)
		{
			echo "<script> alert('Cadastro efetuado com sucesso!') </script>";
			echo "<script> location.href='../login.php'</script>";   


		}
		else
		{
			echo "<script> alert('Erro na gravacao do Cadastro!') </script>";
		}

	}
	catch (PDOException $Erro)
	{
		echo "Erro, avisar nossa equipe " . $Erro->getMessage();
	}
}