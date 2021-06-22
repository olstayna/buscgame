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
    <title>Fale Conosco</title>
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
                            <h3>Fale conosco</h3>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

        <section class="section gb nopadtop">
            <div class="container">
                <div class="boxed boxedp4">


                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="section-title text-center">
                                <h3>Contato</h3>
                            </div><!-- end title -->

                            <a  href="index.php" role="button">← Voltar para página inicial</a><br><br>

                                <center><h4 class="sent-notification"></h4></center>

                                <form id="myForm" class="big-contact-form" role="search"  method="POST">
                                <input id="name" type="text" class="form-control" placeholder="Nome..." required/>
                                <input id="email" type="email" class="form-control" placeholder="Email..." required/>
                                <input id="subject" type="text" class="form-control" placeholder="Assunto...">
                                <textarea id="body" class="form-control" placeholder="Mensagem..." required></textarea>
                                <button type="button" class="btn btn-primary" onclick="sendEmail()" value="Send An Email">Enviar</button>
                                <button type="reset" class="btn btn-primary">Limpar</button>
                            </form>


                                  <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	                              <script type="text/javascript">
                                  function sendEmail() {
                                  var name = $("#name");
                                  var email = $("#email");
                                  var subject = $("#subject");
                                  var body = $("#body");

                                  if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                                  $.ajax({
                                  url: 'sendEmail.php',
                                  method: 'POST',
                                  dataType: 'json',
                                  data: {
                                  name: name.val(),
                                  email: email.val(),
                                  subject: subject.val(),
                                  body: body.val()
                                  }, success: function (response) {
                                  $('#myForm')[0].reset();
                                  $('.sent-notification').text("Mensagem enviada com sucesso!");
                                     }
                                      });
                                         }
                                           }

                                  function isNotEmpty(caller) {
                                  if (caller.val() == "") {
                                  caller.css('border', '1px solid red');
                                  return false;
                                  } else
                                  caller.css('border', '');

                                   return true;
                                    }
                                 </script>

                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end container -->
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