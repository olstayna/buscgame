<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CadLoja Admin</title>

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
                        <h2 class="form-title">Gerenciamento: Cadastro de Lojas</h2>
                        <form name="cad_usuario" action="php/admcadloja.php" method="get">
                        <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-store"></i></label>
                                <input type="text"  name="NomedaLoja"  placeholder="Nome da Loja" />
                            </div>
                            <div class="form-group">
                            <label for="RazãoSocial"><i class="zmdi zmdi-book"></i></label>
                            <input type="text"  name="RazaoSocial"  placeholder="Razão Social" />
                            </div>
                            <div class="form-group">             
                            <label for="NomeFantasia"><i class="zmdi zmdi-book"></i></label>
                            <input type="text"  name="NomeFantasia"  placeholder="Nome Fantasia" />
                            </div>
                            <div class="form-group">
                                <label for="CNPJ"><i class="zmdi zmdi-account-box-mail"></i></label>
                                <input type="number"  name="CNPJ"  placeholder="CNPJ (apenas números, 14 caracteres)"/>
                            </div>
                           
                            <br>

                            <h3>Endereço Comercial</h3>
                            <div class="form-group">                          
                                <label for="CEP"><i class="zmdi zmdi-pin"></i></label>
                                <input type="number" name="CEP"  placeholder="CEP (apenas números, 8 caracteres)" />
                            </div>
                            <div class="form-group">                           
                                <label for="Endereço"><i class="zmdi zmdi-pin"></i></label>
                                <input type="text" name="Endereco"  placeholder="Endereço" />
                            </div>
                            <div class="form-group">                           
                                <label for="Número"><i class="zmdi zmdi-format-list-numbered"></i></label>
                                <input type="number" name="Numero"  placeholder="Número" />
                            </div>
                            <div class="form-group">                           
                                <label for="Bairro"><i class="zmdi zmdi-gps-dot"></i></label>
                                <input type="text" name="Bairro"  placeholder="Bairro" />
                            </div>
                            <div class="form-group">
                                <label for="Cidade"><i class="zmdi zmdi-city"></i></label>
                                <input type="text" name="Cidade"  placeholder="Cidade"/>
                            </div>
                            <div class="form-group">
                                <label for="Estado"><i class="zmdi zmdi-city-alt"></i></label>
                                <input type="text"  name="Estado"  placeholder="Estado (apenas sigla ex: SP)"/>
                            </div>
                            <div class="form-group">                          	
                                <label for="TelefoneComercial"><i class="zmdi zmdi-phone"></i></label>
                                <input type="number" name="TelefoneComercial"  placeholder="Tel. Comercial (incluir DDD, 10 caracteres)"/>
                            </div>
                            <div class="form-group">                          	
                                <label for="TelefoneCelular"><i class="zmdi zmdi-voicemail"></i></label>
                                <input type="number" name="TelefoneCelular"  placeholder="Tel. Celular (incluir DDD, 11 caracteres)"/>
                            </div>
                            <div class="form-group">
                                <label for="Email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="Email" placeholder="Email"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" class="form-submit" name="Botao" value="Cadastrar"/>
                                <input type="submit" class="form-submit" name="Botao" value="Consultar"/>
                                <input type="submit" class="form-submit" name="Botao" value="Excluir"/>
                                <input type="submit" class="form-submit" name="Botao" value="Alterar"/>
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