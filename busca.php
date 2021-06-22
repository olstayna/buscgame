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
    <title>Buscgame | Pesquisa</title>
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

    $pesquisa = $_GET['txtBuscar'];
    $consulta = $conexao->query("select * from vitrine where nome like concat ('%','$pesquisa','%')");
    $exiber = $consulta->fetch(PDO::FETCH_ASSOC);
    If ($consulta->rowCount() == 0) {
        echo "<html><script>location.href='erro.php'</script></html>";
    }

    ?>


        <section class="section db p120">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <div class="tagline-message page-title text-center">
                            <hr class=invis>
                            <h3></h3>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->


        <section class="section gb nopadtop">
            <div class="container">
                <div class="boxed boxedp4">

                    <div class="row blog-grid shop-grid">
                        <div class="col-md-3">
                            <div class="course-box shop-wrapper">
                                <div class="image-wrap entry">
                                    <img src="data:image/jpg;base64, <?php echo base64_encode ($exiber['Imagem']); ?>" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <a href="produto.php?cd=<?php echo $exiber['cd_prod']; ?>" title=""><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                                <!-- end image-wrap -->
                                <div class="course-details shop-box text-center">
                                    <h4>
                                        <a href="produto.php?cd=<?php echo $exiber['cd_prod']; ?>" title=""><?php echo $exiber['nome']; ?></a>
                                        <small><?php echo $exiber['categoria']; ?></small>
                                    </h4>
                                </div>
                                <!-- end details -->
                                <div class="course-footer clearfix">
                                    <div class="pull-left">
                                        <ul class="list-inline">
                                            <li><a href="wishlist.php?cd=<?php echo $exiber['cd_prod']; ?>"><i class="fa fa-heart-o "></i> Salvar produto</a></li>
                                        </ul>
                                    </div><!-- end left -->
                                    <div class="pull-right">
                                        <ul class="list-inline">
                                            <li><a href="produto.php?cd=<?php echo $exiber['cd_prod']; ?>"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div><!-- end left -->
                                </div><!-- end footer -->
                            </div><!-- end box -->
                        </div><!-- end col -->
                    </div><!-- end row -->


        </section>
        <footer class="section footer noover">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="social">
                            <h3 class="widget-title">Nos siga</h3>
                            <a class="linkedin" href="https://www.linkedin.com/in/olstayna/" data-tooltip="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin"></i></a>              
                            <a class="linkedin" href="https://www.linkedin.com/in/luan-silva-50a823159/" data-tooltip="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                            <a class="linkedin" href="https://www.linkedin.com/in/ana-paula-nunes-444a58155/" data-tooltip="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                            <a class="linkedin" href="https://www.linkedin.com/in/priscila-nogueira-12640a211/" data-tooltip="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                        </div><!-- end social -->
                    </div><!-- end col -->

            
                    <div class="col-lg-2 col-md-2">
                        <div class="widget clearfix">
                            <h3 class="widget-title">Sobre</h3>
                            <div class="list-widget">   
                                <ul>
                                    <li><a href="sobre.php">Sobre nós</a></li>
                                    <li><a href="faq.php">FAQ</a></li>
                                    <li><a href="privacidade.php">Privacidade</a></li>
                                    <li><a href="desenvolvimento.php">Desenvolvimento</a></li>
                                    <li><a href="login_adm.php">Administrador</a></li>
                                </ul>
                            </div><!-- end list-widget -->
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-lg-2 col-md-2">
                        <div class="widget clearfix">
                            <h3 class="widget-title">Marcas e Lojas</h3>
                            <div class="list-widget">   
                                <ul>
                                    <li><a href="anunciar.php">Como anunciar</a></li>
                                    <li><a href="cadastroloja.php">Área do anunciante</a></li>
                                </ul>
                            </div><!-- end list-widget -->
                        </div><!-- end widget -->
                    </div><!-- end col -->
                    <div class="col-lg-2 col-md-2">
                        <div class="widget clearfix">
                            <h3 class="widget-title">Precisa de ajuda?</h3>
                            <div class="list-widget">   
                                <ul>
                                    <li><a href="faleconosco.php">Fale conosco</a></li>
                                </ul>
                            </div><!-- end list-widget -->
                        </div><!-- end widget -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </footer><!-- end footer -->

        <div class="copyrights">
            <div class="container">
                <div class="clearfix">
                    <div class="pull-left">
                        <div class="cop-logo">
                            <a href="#"><img src="images/logo.png" alt=""></a>
                        </div>
                    </div>

                    <div class="pull-right">
                        <div class="footer-links">
                            <ul class="list-inline">
                                <li>ETEC LAURO GOMES </li>
                                <li>INFORMÁTICA PARA INTERNET </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- end container -->
        </div><!-- end copy -->
    </div><!-- end wrapper -->

    <!-- jQuery Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>