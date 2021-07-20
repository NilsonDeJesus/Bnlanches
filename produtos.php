<?php

include "conectar/conectar.php";

$nome=$_POST["nome"];
$tipo=$_POST["tipo"];
$quant=$_POST["quantidade"];
$preco=$_POST["valor"];
$descricao=$_POST["descricao"];

$sql = "INSERT INTO produto 
VALUES ('', '$nome', '$tipo', '$quant', '$preco', '$descricao')";

$query_cadastros = mysqli_query($conn,$sql);
if($query_cadastros){
    echo "
    <script>
    alert('Cadastramento feito com sucesso');
    header('location:CadastrarProdutos.php?');
    </script>";
    include "CadastrarProdutos.php";
   
}else{
    
    include "CadastrarProdutos.php";
}

?>

