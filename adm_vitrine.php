<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos Vitrine</title>

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>


    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <a class="btn btn-primary" href="acesso_adm.php" role="button">← Voltar para página de acesso</a>
                        <h2 class="form-title">Gerenciamento: Inserção Vitrine</h2>
                        <form method="POST" action="vitrine/ImagemPHP.php" id="formIMG" enctype="multipart/form-data">
                             <div class="form-group">
                                <input type="number"  id="cd_prod" name="cd_prod" placeholder="Código do Produto"/>
                            </div>
                            <div class="form-group">
                                <input type="text"  id="nome" name="nome" placeholder="Nome do Jogo"/>
                            </div>
                            <div class="form-group">
                                <input type="text" id="categoria" name="categoria" placeholder="Categoria"/>
                            </div>
                            <div class="form-group">
                                <input type="text" id="plataformas" name="plataformas" placeholder="Plataformas (PS4, Xbox One, PC...)"/>
                            </div>
                            <br>
                            <div class="form-group">
                            <textarea id="descricao" name="descricao" rows="8" cols="95" placeholder="Descrição"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="text" id="marca" name="marca" placeholder="Marca"/>
                            </div>
                            <div class="form-group">
                                <input type="text" id="developer" name="developer" placeholder="Desenvolvedor"/>
                            </div>
                            <div class="form-group">
                                <input type="text" id="jogadores" name="jogadores" placeholder="Número de Jogadores (1, 2-4...)"/>
                            </div>
                            <div class="form-group">
                                <input type="text" id="classificacao" name="classificacao" placeholder="Classificação (Teen, Mature, Adults...)"/>
                            </div>

                            <br>
                            <h3 class="form-title">PREÇO LOJAS (Ex: 159.00, 49.99...)</h3>

                            <div class="form-group">
                                <input type="text" id="kabum" name="kabum" placeholder="Kabum"/>
                            </div>
                            <div class="form-group">
                                <input type="text" id="submarino" name="submarino" placeholder="Submarino"/>
                            </div>
                            <div class="form-group">
                                <input type="text" id="americanas" name="americanas" placeholder="Americanas"/>
                            </div>
                            <div class="form-group">
                                <input type="text" id="magalu" name="magalu" placeholder="Magazine Luiza"/>
                            </div>
                            <input type="file" id="Arquivo" name="Arquivo" >

                            <div class="form-group form-button">
                            <input type="submit" class="form-submit" name="Botao" id="Enviar" value="Enviar">
                            <input type="submit" class="form-submit" name="Botao" id="Consultar" value="Consultar">
                            <input type="reset" class="form-submit" name="Botao" value="Limpar"/>
                            </div>
                            
                        </form>
                    </div>
                   
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>