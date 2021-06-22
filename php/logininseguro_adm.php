<?php

$conexao = mysqli_connect("localhost", "root", "", "buscgame");

$EMAIL = $_GET["EMAIL"];
$SENHA = $_GET["SENHA"];

$Sql = "select * from login_adm where EMAIL = '".$EMAIL."' and SENHA = '" .$SENHA."' ";
                        
$dados = mysqli_query ($conexao, $Sql);

$Linha = mysqli_fetch_array($dados);

if ($Linha > 0)
{
    echo "<script> alert('Acesso liberado!') </script>";
    echo "<script> location.href='../acesso_adm.php'</script>";  

}
else
{
    echo "<script> alert('Acesso negado!') </script>";
}