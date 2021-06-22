<?php

include "buscgame.php";

$NomedaLoja = $_GET["NomedaLoja"];
$RazaoSocial = $_GET["RazaoSocial"];
$NomeFantasia = $_GET["NomeFantasia"];
$CNPJ = $_GET["CNPJ"];
$CEP = $_GET["CEP"];
$Endereco = $_GET["Endereco"];
$Numero = $_GET["Numero"];
$Bairro = $_GET["Bairro"];
$Cidade = $_GET["Cidade"];
$Estado = $_GET["Estado"];
$TelefoneComercial  = $_GET["TelefoneComercial"];
$TelefoneCelular = $_GET["TelefoneCelular"];
$Email = $_GET["Email"];
$Botao = $_GET["Botao"];


// ================== rotina de Inclusao =======================================================//
if ($Botao == "Cadastrar")
{
try 
	{
		$Comando=$conexao->prepare("insert into cadastroloja (NomedaLoja,RazaoSocial,NomeFantasia,CNPJ,CEP,Endereco,Numero,Bairro,Cidade,Estado,TelefoneComercial,TelefoneCelular,Email) values (?,?,?,?,?,?,?,?,?,?,?,?,?) ");
		$Comando->bindParam(1, $NomedaLoja);
		$Comando->bindParam(2, $RazaoSocial);
		$Comando->bindParam(3, $NomeFantasia);
        $Comando->bindParam(4, $CNPJ);
        $Comando->bindParam(5, $CEP);
		$Comando->bindParam(6, $Endereco);
		$Comando->bindParam(7, $Numero);
        $Comando->bindParam(8, $Bairro);
        $Comando->bindParam(9, $Cidade);
        $Comando->bindParam(10, $Estado);
		$Comando->bindParam(11, $TelefoneComercial);
        $Comando->bindParam(12, $TelefoneCelular);
        $Comando->bindParam(13, $Email);


        $Comando->execute();

		if ($Comando->rowCount() > 0)
		{
			echo "<script> alert('Cadastro da loja efetuado com sucesso!') </script>";
			echo "<script> location.href='../adm_loja.php'</script>";   


		}
		else
		{
			echo "<script> alert('Erro no Cadastro da sua loja!') </script>";
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
		$Comando=$conexao->prepare("delete from cadastroloja where NomedaLoja = ?");
		$Comando->bindParam(1, $NomedaLoja);
	

		$Comando->execute();

		if ($Comando->rowCount() > 0)
		{
			echo "<script> alert('Exclusao efetuada com sucesso!') </script>";
			echo "<script> location.href='../adm_loja.php'</script>";  
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
		if ($NomedaLoja == '')
		{
			$Matriz = $conexao->prepare("select * from cadastroloja");
		}
		else
		{
			$Matriz = $conexao->prepare("select * from cadastroloja where NomedaLoja = ?");
			$Matriz->bindParam(1, $NomedaLoja);
		}

		if ($Matriz->execute())
		{
			while ($Linha = $Matriz->fetch(PDO::FETCH_OBJ))
			{
				echo 'Nome da Loja '   . $Linha->NomedaLoja . '<br>';
				echo 'Razão Social '   . $Linha->RazaoSocial . '<br>';
				echo 'Nome Fantasia '    . $Linha->NomeFantasia	 . '<br>';
                echo 'CNPJ ' . $Linha->CNPJ . '<br>';
                echo 'CEP ' . $Linha->CEP. '<br>';
                echo 'Endereço  ' . $Linha->Endereco. '<br>';
                echo 'Número ' . $Linha->Numero. '<br>';
                echo 'Bairro ' . $Linha->Bairro. '<br>';
                echo 'Cidade ' . $Linha->Cidade. '<br>';
                echo 'Estado ' . $Linha->Estado. '<br>';
                echo 'Tel. Comercial ' . $Linha->TelefoneComercial. '<br>';
                echo 'Tel. Celular ' . $Linha->TelefoneCelular. '<br>';
                echo 'Email ' . $Linha->Email. '<br>';

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
		$Comando=$conexao->prepare("update cadastroloja set RazaoSocial=?,NomeFantasia=?,CNPJ=?,CEP=?,Endereco=?,Numero=?,Bairro=?,Cidade=?,Estado=?,TelefoneComercial=?,TelefoneCelular=?,Email=? where NomedaLoja = ?");
		$Comando->bindParam(1, $RazaoSocial);
		$Comando->bindParam(2, $NomeFantasia);
        $Comando->bindParam(3, $CNPJ);
        $Comando->bindParam(4, $CEP);
		$Comando->bindParam(5, $Endereco);
		$Comando->bindParam(6, $Numero);
        $Comando->bindParam(7, $Bairro);
        $Comando->bindParam(8, $Cidade);
        $Comando->bindParam(9, $Estado);
		$Comando->bindParam(10, $TelefoneComercial);
        $Comando->bindParam(11, $TelefoneCelular);
        $Comando->bindParam(12, $Email);
		$Comando->bindParam(13, $NomedaLoja);

		$Comando->execute();

		if ($Comando->rowCount() > 0)
		{
			echo "<script> alert('Alteracao efetuada com sucesso!') </script>";
			echo "<script> location.href='../adm_loja.php'</script>";  
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