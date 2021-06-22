<!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js " lang="en"> <!--<![endif]-->
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Site Meta -->
    <title>Sobre nós</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet"> 
    
    <!-- Custom & Default Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">

    <!--[if lt IE 9]>
        <script src="js/vendor/html5shiv.min.js"></script>
        <script src="js/vendor/respond.min.js"></script>
    <![endif]-->

</head>
<body>  

<?php 
    session_start();
    include 'php/buscgame.php';
    include 'php/nav.php';
    ?>

        <section class="section db p120">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tagline-message page-title text-center">
                            <hr class=invis>
                            <h3>Sobre nós</h3>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

        <section class="section gb nopadtop">
            <div class="container">
                <div class="boxed">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content blog-list">
                                <div class="blog-wrapper clearfix">
                                    <div class="blog-meta">
                                        <h3>Sobre o Buscgame</h3>
                                    </div><!-- end blog-meta -->

                                    <div class="blog-desc-big">
                                        <p>O Busccame é um comparador de preços voltado para a área gamer, nasceu através de um trabalho de conclusão de curso desenvolvido pelos integrantes Gabriel Zikan, Gabriel Lopes, Luan da Silva, Priscila Nogueira e Tayná Oliveira no curso técnico de Informática para o Internet do Centro Estadual de Educação Tecnológica Paula Souza Etec Lauro Gomes.</p>
                                        <br>
                                        <p>Com o crescimento e expansão na área Gamer, cresce também, a procura por seus produtos e consequentemente, a reflexão em relação aos preços. Nosso intuito é inserir no mercado um site buscador e comparador de preços  para produtos e acessórios Gamer que una praticidade, bons produtos e preços, bem como, fazer com que nossos clientes se sintam seguros em suas escolhas de produtos.</p>
                                    </div><!-- end desc -->
                                    <br>
                                    <div class="blog-desc-big">
                                        <p class="lead">Nossos valores</p>
                                        <p>Com a expansão do consumo no mercado Gamer, não só adolescentes e jovens são seus consumidores, mas também pessoas de outras faixas etárias. Nosso intuito é ajudar nossos consumidores dando-lhes diversas opções para sua escolha.</p>
                                        <br>
                                        <ol>
                                            <li>Detectar ofertas dos produtos;</li>
                                            <li>Permitir que os usuários marquem os seus produtos para acompanhar o valor em determinado período; </li>
                                            <li>Assegurar que os usuários façam uma pesquisa rápida e objetiva.</li>
                                        </ol>
                                        
                                    </div><!-- end desc -->
                                </div><!-- end blog -->
                            </div><!-- end content -->

                           
        </section>

        <?php include 'php/rodape.php' ?>

    <!-- jQuery Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>