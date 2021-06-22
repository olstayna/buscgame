<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buscgame | Cadastro</title>

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
                        <h2 class="form-title">Criar conta</h2>
                        <h4>Campos obrigatórios</h4>
                        <form name="cad_usuario" action="php/cadastrouser.php" method="get">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" required="" name="Nome" maxlength="10" placeholder="Nome"/> 
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" required="" name="Sobrenome" maxlength="50" placeholder="Sobrenome"/>
                            </div>
                            <div class="form-group">
                                <label for="EMAIL"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" required="" name="EMAIL"  maxlength="60" placeholder="Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" required="" name="SENHA" maxlength="8" placeholder="Senha (apenas números, max: 8)"/>
                            </div>
                            <div class="form-group">
                                <label for="CELULAR"><i class="zmdi zmdi-phone material-icons-name"></i></label>
                                <input type="tel" required="" name="CELULAR"  maxlength="11" placeholder="Celular (incluir DDD, 11 caracteres)"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>Concordo com os <a href="#" class="term-service">Termos de uso</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" class="form-submit" name="Botao" value="Cadastrar"/>
                                <input type="reset" class="form-submit" value="Limpar"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/mario.gif" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">Já tem uma conta? Faça Login</a>
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