<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Área do Anunciante</title>

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
                        <a class="btn btn-primary" href="index.php" role="button">← Voltar para página inicial</a>
                        <h2 class="form-title">Cadastrar sua Loja</h2>
                        <h4>Campos obrigatórios</h4>
                        <h3>Informações gerais</h3>
                        <form method="get" name="cadastroloja" action="php/cadastro_loja.php">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-store"></i></label>
                                <input type="text"  name="NomedaLoja"  placeholder="Nome da Loja" required=""/>
                            </div>
                            <div class="form-group">
                            <label for="RazãoSocial"><i class="zmdi zmdi-book"></i></label>
                            <input type="text"  name="RazaoSocial"  placeholder="Razão Social" required=""/>
                            </div>
                            <div class="form-group">             
                            <label for="NomeFantasia"><i class="zmdi zmdi-book"></i></label>
                            <input type="text"  name="NomeFantasia"  placeholder="Nome Fantasia" required=""/>
                            </div>
                            <div class="form-group">
                                <label for="CNPJ"><i class="zmdi zmdi-account-box-mail"></i></label>
                                <input type="number"  name="CNPJ" placeholder="CNPJ (apenas números, 14 caracteres)" required=""/>
                            </div>
                           
                            <br>

                            <h3>Endereço Comercial</h3>
                            <div class="form-group">                          
                                <label for="CEP"><i class="zmdi zmdi-pin"></i></label>
                                <input type="number" name="CEP"  placeholder="CEP (apenas números, 8 caracteres)" required=""/>
                            </div>
                            <div class="form-group">                           
                                <label for="Endereço"><i class="zmdi zmdi-pin"></i></label>
                                <input type="text" name="Endereco"  placeholder="Endereço" required=""/>
                            </div>
                            <div class="form-group">                           
                                <label for="Número"><i class="zmdi zmdi-format-list-numbered"></i></label>
                                <input type="number" name="Numero"  placeholder="Número" required=""/>
                            </div>
                            <div class="form-group">                           
                                <label for="Bairro"><i class="zmdi zmdi-gps-dot"></i></label>
                                <input type="text" name="Bairro"  placeholder="Bairro" required=""/>
                            </div>
                            <div class="form-group">
                                <label for="Cidade"><i class="zmdi zmdi-city"></i></label>
                                <input type="text" name="Cidade"  placeholder="Cidade" required=""/>
                            </div>
                            <div class="form-group">
                                <label for="Estado"><i class="zmdi zmdi-city-alt"></i></label>
                                <input type="text"  name="Estado"  placeholder="Estado (apenas sigla ex: SP)" required=""/>
                            </div>
                            <div class="form-group">                          	
                                <label for="TelefoneComercial"><i class="zmdi zmdi-phone"></i></label>
                                <input type="number" name="TelefoneComercial"  placeholder="Tel. Comercial (incluir DDD, 10 caracteres)" required=""/>
                            </div>
                            <div class="form-group">                          	
                                <label for="TelefoneCelular"><i class="zmdi zmdi-voicemail"></i></label>
                                <input type="number" name="TelefoneCelular" placeholder="Tel. Celular (incluir DDD, 11 caracteres)" required=""/>
                            </div>
                            <div class="form-group">
                                <label for="Email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="Email" placeholder="Email" required=""/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>Concordo com os <a href="privacidade.php" class="term-service">Termos de uso</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="Botao"  class="form-submit" value="Cadastrar"/>
                                <input type="reset" class="form-submit" value="Limpar"/>
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