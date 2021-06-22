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
    <link rel="stylesheet" href="css/prettyPhoto.css">
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

   $cd_prod = $_GET['cd'];

   $consulta = $conexao->query("select * from vitrine where cd_prod='$cd_prod'");
   $exibe = $consulta->fetch(PDO::FETCH_ASSOC);

   $precos = $conexao->query("select kabum, submarino, americanas, magalu from vitrine where cd_prod='$cd_prod'");
   $exibes = $precos->fetch(PDO::FETCH_ASSOC);

   $outros = $conexao->query("select * from vitrine order by rand() limit 5");
   $exibou = $outros->fetch(PDO::FETCH_ASSOC);

    ?>

<head>
<title> <?php echo $exibe['nome']; ?></title>
</head>
        <section class="section db p120">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

        <section class="section">
            <div class="container">
                <div class=" ">
                    <div class="row">
                        <div class="col-md-6 shop-media pull-right">
                            <div class="row">
                                <div class="col-md-12 pull-right">
                                <div class="image-wrap entry">
                                    <img src="data:image/jpg;base64, <?php echo base64_encode ($exibe['Imagem']); ?>" alt="" class="img-responsive">
                                </div><!-- end image-wrap -->
                                </div>
                            </div><!-- end row -->

                            <hr class="invis">

                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                </div>
                            </div><!-- end row -->
                        </div><!-- end col -->

                        <div class="col-md-6">
                            <div class="shop-desc">
                                <h2><?php echo $exibe['nome']; ?></h2>
                                <small><?php echo $exibe['categoria']; ?></small>
                                <small>Plataformas: <?php echo $exibe['plataformas']; ?></small>
                                <a href="wishlist.php?cd=<?php echo $exibe['cd_prod']; ?>"><i class="fa fa-heart-o "></i> Salvar produto</a>
                                <br>
                                <br>
                                <p>a partir de</p>
                                <small>R$ <?php echo number_format (min ($exibes),2,',','.'); ?> </small>
                                </div>

                                <div class="row">  
                                <div class="col-md-12">
                                <div class="shop-extra">
                                <div class="shop-desc">
                                    <h4>Kabum</h4>
                                    <small>R$ <?php echo number_format ($exibe['kabum'],2,',','.'); ?></small>
                                    <a href="php/redirecionamento.php" class="btn btn-primary">Ir à loja</a>
                                </div><!-- end shop meta -->
                                <br>
                                <div class="shop-desc">
                                    <h4>Submarino</h4>
                                    <small>R$ <?php echo number_format ($exibe['submarino'],2,',','.'); ?></small>
                                    <a href="php/redirecionamento.php" class="btn btn-primary">Ir à loja</a>
                                </div><!-- end shop meta -->
                                <br>
                                <div class="shop-desc">
                                    <h4>Americanas</h4>
                                    <small>R$ <?php echo number_format ($exibe['americanas'],2,',','.'); ?></small>
                                    <a href="php/redirecionamento.php" class="btn btn-primary">Ir à loja</a>
                                </div><!-- end shop meta -->
                                <br>
                                <div class="shop-desc">
                                    <h4>Magazine Luiza</h4>
                                    <small>R$ <?php echo number_format ($exibe['magalu'],2,',','.'); ?></small>
                                    <a href="php/redirecionamento.php" class="btn btn-primary">Ir à loja</a>
                                    </div>
                                    </div>
                                </div><!-- end shop meta -->
                            </div><!-- end desc -->
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <hr class="invis">

                    <div class="row">   
                        <div class="col-md-12">
                            <div class="shop-extra">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#home">Descrição</a></li>
                                    <li><a data-toggle="tab" href="#menu1">Informações adicionais</a></li>
                                </ul>

                                <div class="tab-content">
                                    <div id="home" class="tab-pane fade in active">
                                        <p><?php echo $exibe['descricao']; ?></p>
                                    </div>
                                    <div id="menu1" class="tab-pane fade">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td><strong>Marca</strong></td>
                                                    <td><?php echo $exibe['marca']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Desenvolvedor</strong></td>
                                                    <td><?php echo $exibe['developer']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Número de Jogadores</strong></td>
                                                    <td><?php echo $exibe['jogadores']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Classificação ESRB</strong></td>
                                                    <td><?php echo $exibe['classificacao']; ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                        <hr class="invis">
                                    
                                       
                                    </div>
                                </div>
                            </div><!-- end shop-extra -->
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <hr class="invis">

                    <div class="related-products">
                        <div class="text-widget">
                            <h3>Outros produtos</h3>
                        </div><!-- end title -->        

                        <div class="row blog-grid shop-grid">
                        <?php while ($exibou = $outros->fetch(PDO::FETCH_ASSOC)){ ?>
                            <div class="col-md-3">
                                <div class="course-box shop-wrapper">
                                    <div class="image-wrap entry">
                                        <img src="data:image/jpg;base64, <?php echo base64_encode ($exibou['Imagem']); ?>" alt="" class="img-responsive">
                                        <div class="magnifier">
                                            <a href="produto.php?cd=<?php echo $exibou['cd_prod']; ?>" title=""><i class="fa fa-eye"></i></a>
                                        </div>
                                        </div>
                                    <!-- end image-wrap -->
                                    <div class="course-details shop-box text-center">
                                        <h4>
                                            <a href="produto.php?cd=<?php echo $exibou['cd_prod']; ?>" title=""><?php echo $exibou['nome']; ?></a>
                                            <small><?php echo $exibou['categoria']; ?></small>
                                        </h4>
                                    </div>
                                    <!-- end details -->
                                    <div class="course-footer clearfix">
                                        <div class="pull-left">
                                            <ul class="list-inline">
                                                <li><a href="wishlist.php?cd=<?php echo $exibou['cd_prod']; ?>"><i class="fa fa-heart-o "></i> Salvar produto</a></li>
                                            </ul>
                                        </div><!-- end left -->

                                        <div class="pull-right">
                                            <ul class="list-inline">
                                                <li><a href="produto.php?cd=<?php echo $exibou['cd_prod']; ?>"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div><!-- end left -->
                                    </div><!-- end footer -->
                                </div><!-- end box -->
                            </div><!-- end col -->
                            <?php  } ?>
                        </div><!-- end row -->
                    </div><!-- end related -->
                </div><!-- end boxed -->
            </div><!-- end container -->
        </section>

        <?php include 'php/rodape.php' ?>
        
    <!-- jQuery Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>