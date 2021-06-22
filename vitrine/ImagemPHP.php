<?php

include "buscgame.php";

echo 'Arquivo enviado ' . $_FILES['Arquivo']['name'] . '<br>';
echo 'Tipo do arquivo ' . $_FILES['Arquivo']['type'] . '<br>';
echo 'Extensao arquivo ' . pathinfo($_FILES['Arquivo']['name'], PATHINFO_EXTENSION) . '<br>';
echo 'Tempor. arquivo ' . $_FILES['Arquivo']['tmp_name'] . '<br>';
echo 'Tamanho arquivo ' . $_FILES['Arquivo']['size'] . '<br>';

$cd_prod = $_POST['cd_prod'];
$nome = $_POST['nome'];
$categoria = $_POST['categoria'];
$plataformas = $_POST['plataformas'];
$descricao = $_POST['descricao'];
$marca = $_POST['marca'];
$developer = $_POST['developer'];
$jogadores = $_POST['jogadores'];
$classificacao = $_POST['classificacao'];
$kabum = $_POST['kabum'];
$submarino = $_POST['submarino'];
$americanas = $_POST['americanas'];
$magalu = $_POST['magalu'];
$Botao = $_POST['Botao'];

$ArquivoAtual = $_FILES['Arquivo']['name'];
$ArquivoTmp = $_FILES['Arquivo']['tmp_name'];
$Destino = 'imagens/' . $ArquivoAtual;

//=== inclusao do registro com imagem no banco de dados + upload na pasta
if ($Botao == "Enviar")
{
  move_uploaded_file($ArquivoTmp, $Destino);
 
$Imagem = file_get_contents("http://localhost/buscgame/vitrine/imagens/" . $ArquivoAtual); 

$Comando=$conexao->prepare("insert into vitrine (cd_prod,nome,categoria,plataformas,descricao,marca,developer,jogadores,classificacao,kabum,submarino,americanas,magalu,NomeImg,Imagem) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$Comando->bindParam(1, $cd_prod);
$Comando->bindParam(2, $nome);
$Comando->bindParam(3, $categoria);
$Comando->bindParam(4, $plataformas);
$Comando->bindParam(5, $descricao);
$Comando->bindParam(6, $marca);
$Comando->bindParam(7, $developer);
$Comando->bindParam(8, $jogadores);
$Comando->bindParam(9, $classificacao);
$Comando->bindParam(10, $kabum);
$Comando->bindParam(11, $submarino);
$Comando->bindParam(12, $americanas);
$Comando->bindParam(13, $magalu);
$Comando->bindParam(14, $ArquivoAtual);
$Comando->bindParam(15, $Imagem);


$Comando->execute();
 
        if ($Comando->rowCount() > 0)
        {
            echo "<script> alert('Cadastro na vitrine efetuado!') </script>";
        }
 
}
 
if ($Botao == "Consultar")
{
    $Matriz = $conexao->prepare("select * from vitrine where cd_prod = ?");
    $Matriz->bindParam(1, $cd_prod);
 
    if ($Matriz->execute())
    {
        while ($Linha = $Matriz->fetch(PDO::FETCH_OBJ))
{
echo 'Código do Produto ' . $Linha->cd_prod . '<br>';
echo 'Nome do Jogo ' . $Linha->nome . '<br>';
echo 'Categoria ' . $Linha->categoria . '<br>';
echo 'Plataformas ' . $Linha->plataformas . '<br>';
echo 'Descrição ' . $Linha->descricao . '<br>';
echo 'Marca ' . $Linha->marca . '<br>';
echo 'Desenvolvedor ' . $Linha->developer . '<br>';
echo 'Número de Jogadores ' . $Linha->jogadores . '<br>';
echo 'Classificação ' . $Linha->classificacao . '<br>';
echo 'Kabum ' . $Linha->kabum . '<br>';
echo 'Submarino ' . $Linha->submarino . '<br>';
echo 'Americanas ' . $Linha->americanas . '<br>';
echo 'Magazine Luiza' . $Linha->magalu . '<br>';
echo 'NomeImg ' . $Linha->NomeImg . '<br>';
     
 
      //echo '<img src="Imagens/' . $Linha->Imagem . '">';
     //echo '<img src= "data:image/jpg;base64, "' . base64_encode($Linha->Imagem) . '>';
     echo '<img src="imagens/' . $Linha->NomeImg . '" width="65px" height="50px">' . 'Foto com publicidades <br>';
     echo '<img src= "data:image/jpg;base64, ' . base64_encode($Linha->Imagem) . '" width="65px" heigth= "50px"/ >'.
        'Foto dentro do BD';
    }
}
 
}
 
?>
