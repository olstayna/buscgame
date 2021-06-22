<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CadUser Admin</title>

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
                        <h2 class="form-title">Gerenciamento: Cadastro de Usuários</h2>
                        <form name="cad_usuario" action="php/admcaduser.php" method="get">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="Nome" maxlength="10" placeholder="Nome"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="Sobrenome" maxlength="50" placeholder="Sobrenome"/>
                            </div>
                            <div class="form-group">
                                <label for="EMAIL"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="EMAIL"  maxlength="60" placeholder="Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="SENHA" maxlength="8" placeholder="Senha (apenas números, max: 8)"/>
                            </div>
                            <div class="form-group">
                                <label for="CELULAR"><i class="zmdi zmdi-phone material-icons-name"></i></label>
                                <input type="tel" name="CELULAR"  maxlength="11" placeholder="Celular (incluir DDD)"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" class="form-submit" name="Botao" value="Cadastrar"/>
                                <input type="submit" class="form-submit" name="Botao" value="Consultar"/>
                                <input type="submit" class="form-submit" name="Botao" value="Excluir"/>
                                <input type="submit" class="form-submit" name="Botao" value="Alterar"/>
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