<?php

include "buscgame.php";

$Nome = $_GET["Nome"];
$Sobrenome = $_GET["Sobrenome"];
$EMAIL = $_GET["EMAIL"];
$SENHA = $_GET["SENHA"];
$CELULAR = $_GET["CELULAR"];
$Botao = $_GET["Botao"];


// ================== rotina de Inclusao =======================================================//
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
			echo "<script> location.href='../adm_caduser.php'</script>";  

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

// ================== rotina de Exclusao =======================================================//
if ($Botao == "Excluir")
{
	try 
	{
		$Comando=$conexao->prepare("delete from cad_usuario where EMAIL = ?");
		$Comando->bindParam(1, $EMAIL);
	

		$Comando->execute();

		if ($Comando->rowCount() > 0)
		{
			echo "<script> alert('Exclusao efetuada com sucesso!') </script>";
			echo "<script> location.href='../adm_caduser.php'</script>";  
		}
		else
		{
			echo "<script> alert('Erro na Exclusao do registro!') </script>";
		}

	}
	catch (PDOException $Erro)
	{
		echo "Erro, avisar equipe de TI " . $Erro->getMessage();
	}

}



// ================== rotina de Consultar =======================================================//
if ($Botao == "Consultar")
{
	//Consulta por bloco --------------------------
	try
	{
		if ($Nome == '')
		{
			$Matriz = $conexao->prepare("select * from cad_usuario");
		}
		else
		{
			$Matriz = $conexao->prepare("select * from cad_usuario where Nome = ?");
			$Matriz->bindParam(1, $Nome);
		}

		if ($Matriz->execute())
		{
			while ($Linha = $Matriz->fetch(PDO::FETCH_OBJ))
			{
				echo 'Nome '   . $Linha->Nome . '<br>';
				echo 'Sobrenome '   . $Linha->Sobrenome . '<br>';
				echo 'Email '    . $Linha->EMAIL	 . '<br>';
                echo 'Senha ' . $Linha->SENHA . '<br>';
                echo 'Celular ' . $Linha->CELULAR. '<br>';

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



// ================== rotina de Alteracao =======================================================//
if ($Botao == "Alterar")
{
	try 
	{
		$Comando=$conexao->prepare("update cad_usuario set Sobrenome=?,EMAIL=?,SENHA=?,CELULAR=? where Nome = ?");
		$Comando->bindParam(1, $Sobrenome);
		$Comando->bindParam(2, $EMAIL);
		$Comando->bindParam(3, $SENHA);
        $Comando->bindParam(4, $CELULAR);
		$Comando->bindParam(5, $Nome);

		$Comando->execute();

		if ($Comando->rowCount() > 0)
		{
			echo "<script> alert('Alteracao efetuada com sucesso!') </script>";
			echo "<script> location.href='../adm_caduser.php'</script>";  
		}
		else
		{
			echo "<script> alert('Erro na Alteracao do registro!') </script>";
		}

	}
	catch (PDOException $Erro)
	{
		echo "Erro, avisar equipe de TI " . $Erro->getMessage();
	}

}