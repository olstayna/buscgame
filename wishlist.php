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
    <title>Produtos salvos</title>
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
	
	session_start(); // iniciando sessão
	
	// verificando se usuário está logado
	if(empty($_SESSION['ID'])){
		
		header('location:login.php'); // enviando para formlogon.php
		
	}

	
	include 'php/buscgame.php';	// incluindo arquivo de conexão
    include 'php/nav.php';


	
	// verificando se o codigo do produto NÃO está vazio
	if (!empty($_GET['cd'])) {
	
	// inserindo o código do produto na variável $cd_prod
	$cd_prod=$_GET['cd'];
	
	// se a sessão carrinho não estiver preenchida(setada)
	if (!isset($_SESSION['carrinho'])) {
		  // será criado uma sessão chamado carrinho para receber um vetor
		  $_SESSION['carrinho'] = array();
	}


	
	// se a variavel $cd_prod não estiver setado(preenchida)
	if (!isset($_SESSION['carrinho'][$cd_prod])) {
		
		// será adicionado um produto ao carrinho
		$_SESSION['carrinho'][$cd_prod]=1;
	}
	
	// caso contrario, se ela estiver setada, adicione novos produtos
	else {
		  $_SESSION['carrinho'][$cd_prod]+=1;

	}
		// incluindo o arquivo 'mostraCarrinho.php'
		include 'mostrawish.php';
		
	} else {
		
		//mostrando o carrinho	vazio	
		include 'mostrawish.php';
		
		
	}	
	
	?>
	
	
    
	<div class="row text-center" style="margin-top: 15px;">
		<a href="index.php"><button class="btn btn-lg btn-primary">Continue sua busca</button></a>
        
        <hr class="invis">
	</div>

	
</div>

<?php include 'php/rodape.php' ?>

<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>
 
</body>
</html>