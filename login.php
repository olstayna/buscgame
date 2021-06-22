<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buscgame | Login</title>

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style2.css">

    
</head>
<body>


    <div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/ryu.gif" alt="sing up image"></figure>
                        <a href="cadastro.php" class="signup-image-link">Não tem conta? Cadastre-se</a>
                    </div>

                    <div class="signin-form">
                        <a class="btn btn-primary" href="index.php" role="button">← Voltar para página inicial</a>
                        <h2 class="form-title">Login</h2>
                            <form name="Login" action="php/validausuario.php" method="get">
                            <div class="form-group">
                                <label for="EMAIL"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="EMAIL"  placeholder="Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="SENHA"  placeholder="Senha"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="Botao"  class="form-submit" value="Logar"/>
                            </div>
                        </form>
            </div>
        </section>
        
    <script>
      
    
    </script>
</body>
</html>