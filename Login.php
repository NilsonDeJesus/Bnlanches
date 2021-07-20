<?php

include "conectar/conectar.php";



$usuario = htmlentities(addslashes($_POST["Login"]));

$pass = htmlentities(addslashes($_POST["Senha"]));

$query = "SELECT * FROM cliente WHERE cliente_login = '$usuario' and cliente_senha = '$pass'";

$consulta = mysqli_query($conn, $query);

if(mysqli_num_rows($consulta)==1){
   

    session_start();
	$_SESSION['login'] = true;
	$_SESSION['usuario'] = $usuario;
    header('location:TelaPrincipal.php');
    
   
}else{
    header('location:Plogin.php?erro=1');
    
}
?>