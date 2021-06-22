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
    <title>Erro</title>
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
                            <h3></h3>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->



        <section class="section gb nopadtop">
            <div class="container">
                <div class="boxed boxedp4 text-center">   

				<h2>Nenhum produto foi encontrado.</h2>

				<a href="index.php" class="btn btn-primary" role="button"> Voltar para página inicial</a>
				
				
		</div>
	</div>
	</section>

	<?php include 'php/rodape.php' ?>
      <!-- jQuery Files -->
      <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>
	
	
</body>
</html>