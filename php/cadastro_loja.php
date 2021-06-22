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
			echo "<script> location.href='../index.php'</script>";   


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