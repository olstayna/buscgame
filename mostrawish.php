<section class="section db p120">
            <div class="container">
                    <div class="tagline-message page-title text-center">
                        </div>
            </div><!-- end container -->
        </section><!-- end section -->
<div class="container-fluid">
	
	<div class="row text-center" style="margin-top: 10px;">
		<h1>Wishlist</h1>
	</div>
	
	
	<?php

    if(!isset($_SESSION['carrinho'])){
        $_SESSION['carrinho'] = array ();

    }

    // criando um loop para sessão carrinho recebe o $cd e a quantidade
    foreach ($_SESSION['carrinho'] as $cd => $qnt)  {
    $consulta = $conexao->query("SELECT * FROM vitrine WHERE cd_prod='$cd'");
    $exibe = $consulta->fetch(PDO::FETCH_ASSOC);

    $produto = $exibe['nome'];  // variável que recebe o livro
    
	?>
	
	
	
	
	
	<div class="row" style="margin-top: 15px;">
		
		
		
		<div class="col-sm-1 col-sm-offset-1">
			<img src="data:image/jpg;base64, <?php echo base64_encode ($exibe['Imagem']); ?>" class="img-responsive">
		</div>
		
		
		<div class="col-sm-4">
			<h4 style="padding-top:20px"><?php echo $produto; ?></h4>
		</div>	
		
		
		<div class="col-sm-1 col-xs-offset-right-1" style="padding-top:20px">
		
		<!--remove o item do carrinho pelo id -->
		<a href="removeprod.php?cd=<?php echo $cd;?>">	
		<button class="btn-lg btn-block btn-danger">
		<span class="glyphicon glyphicon-remove"></span>		
		</button>
			</a>
		</div> 
				
	</div>	
	
	
	<?php } ?>