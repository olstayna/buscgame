<div id="wrapper">
        <!-- BEGIN # MODAL LOGIN -->
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Begin # DIV Form -->
                    <div id="div-forms">
                        <form id="login-form" name="frmpesquisa" method="get" action="busca.php">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="fa fa-plus" aria-hidden="true"></span>
                            </button>
                            <div class="modal-body">
                                <input class="form-control" type="text" placeholder="Digite sua busca..." name="txtBuscar" required>
                            </div>
                            <div class="section-button text-center">
                        <button type="submit" class="btn btn-primary">Pesquisar</button>
                        </div>
                        </form><!-- End # Login Form -->
                    </div><!-- End # DIV Form -->
                </div>
            </div>
        </div>
        <!-- END # MODAL LOGIN -->

        <header class="header">
            <div class="topbar clearfix">
                <div class="container">
                        <div class="col-md-6 col-sm-6 hidden-xs text-right">
                        </div><!-- end left -->
                </div><!-- end container -->
            </div><!-- end topbar -->

            <div class="container">
                <nav class="navbar navbar-default yamm">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="logo-normal">
                            <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt=""></a>
                        </div>
                    </div>

                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">

                        <?php if(empty ($_SESSION['ID'])) { ?>
                            <li><a href="login.php">Entrar</a></li>
                            
                            <?php } 
                            
                            else {

                                $consulta_usuario = $conexao->query("select EMAIL from login where EMAIL = '$_SESSION[ID]'");
                                $exibe_usuario = $consulta_usuario->fetch(PDO::FETCH_ASSOC);
                               
                                ?>
                                <li><a>Olá, <?php echo ($exibe_usuario ['EMAIL']);?> </a></li>
                                <li class="iconitem"><a class="shopicon" href="php/sair.php"><i class="fa fa-sign-out"></i> Sair</a></li>
                                <li class="iconitem"><a class="shopicon" href="wishlist.php"><i class="fa fa-heart"></i></a></li>
                                <?php }  ?>

                            <li class="iconitem"><a href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-search"></i></a></li>
                        </ul>
                    </div>
                </nav><!-- end navbar -->
            </div><!-- end container -->
        </header>