<?php
include 'buscgame.php';

session_start();

$Vemail = $_GET['EMAIL'];
$Vsenha = $_GET['SENHA'];

//echo  $Vemail.'<br>';
//echo  $Vsenha.'<br>';

   $consulta = $conexao->query ("select * from login where EMAIL = '".$Vemail."' and SENHA = '" .$Vsenha."' ");
if ($consulta->rowCount() == 1){
   $exibeUsuario = $consulta->fetch(PDO::FETCH_ASSOC);
   $_SESSION['ID'] = $exibeUsuario['EMAIL'];
   header ('location:../index.php');
}

else{
    echo "<script> alert('Usuário não cadastrado') </script>";
	echo "<script> location.href='../login.php'</script>";   
}
?>
