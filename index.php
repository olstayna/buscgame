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
    <title>Buscgame | Home</title>
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

    $consulta = $conexao->query('select * from vitrine');

    ?>

        <section id="home" class="video-section js-height-full">
            <div class="overlay"></div>
            <div class="home-text-wrapper relative container">
                <div class="home-message">
                    <p>Buscgame: um mar de possibilidades</p>
                </div>
            </div>
            <div class="slider-bottom">
                <span>Role para ver mais <i class="fa fa-angle-down"></i></span>
            </div>
        </section>


        
        <section class="section gb">
            <div class="container">
                <div class="section-title text-center">
                    <h3>Novos Produtos</h3>
                </div><!-- end title -->

        </section>

        <section class="section gb nopadtop">
            <div class="container">
                <div class="boxed boxedp4">

                    <div class="row blog-grid shop-grid">
                    <?php while ($exibe = $consulta->fetch(PDO::FETCH_ASSOC)){ ?>
                        <div class="col-md-3">
                            <div class="course-box shop-wrapper">
                                <div class="image-wrap entry">
                                    <img src="data:image/jpg;base64, <?php echo base64_encode ($exibe['Imagem']); ?>" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <a href="produto.php?cd=<?php echo $exibe['cd_prod']; ?>" title=""><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                                <!-- end image-wrap -->
                                <div class="course-details shop-box text-center">
                                    <h4>
                                        <a href="produto.php?cd=<?php echo $exibe['cd_prod']; ?>"><?php echo mb_strimwidth ($exibe['nome'],0,24,'...'); ?></a>
                                        <small><?php echo $exibe['categoria']; ?></small>
                                    </h4>
                                </div>
                                <!-- end details -->
                                <div class="course-footer clearfix">
                                    <div class="pull-left">
                                        <ul class="list-inline">
                                            <li><a href="wishlist.php?cd=<?php echo $exibe['cd_prod']; ?>"><i class="fa fa-heart-o "></i> Salvar produto</a></li>
                                        </ul>
                                    </div><!-- end left -->

                                    <div class="pull-right">
                                        <ul class="list-inline">
                                            <li><a href="produto.php?cd=<?php echo $exibe['cd_prod']; ?>"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div><!-- end left -->
                                </div><!-- end footer -->
                            </div><!-- end box -->
                        </div><!-- end col -->
                        <?php  } ?>
                    </div><!-- end row -->
                    </div><!-- end container -->

                    <hr class="invis">

    
        </section>
        <section class="section bgcolor1">
            <div class="container">
                <a href="anunciar.php">
                <div class="row callout">
                    <div class="col-md-12">
                       <center> <p class="lead">Não perca essa oportunidade, anuncie aqui! Estamos esperando por você ;)</p>  <center>
                    </div>
                </div><!-- end row -->
                </a>
            </div><!-- end container -->  
        </section>

        <?php include 'php/rodape.php' ?>

    <!-- jQuery Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>
    <!-- VIDEO BG PLUGINS -->
    <script src="js/videobg.js"></script>

</body>
</html>