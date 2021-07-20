<?php
include "Pesquisar.php";
include "conectar/conectar.php";
if(isset($_SESSION['login']))
if(isset($_POST['nome']))
if(isset($_POST['tipo']))
if(isset($_POST['quanti']))
if(isset($_POST['valor']))
$nome = $_POST["nome"];
$tipo = $_POST["tipo"];
$quant = $_POST["quanti"];
$preco = $_POST["valor"];
$cliente = $_SESSION["usuario"];
$pedido = "ABERTO";

$sql = "INSERT INTO pedido (id,nome,preco,quantidade,cliente,tipo,situacao)
VALUES ('','$nome', '$preco', '$quant', '$cliente', '$tipo', '$pedido')";
$query_cadastros = mysqli_query($conn,$sql);
  
if($query_cadastros){
   echo "
   <script>
   alert('Pedido enviados');
   location.href='Pesquisar.php';
   </script>";

   
}else{
   echo "
   <script>
   alert('Erro no pedido');
   location.href='Pesquisar.php';
   </script>";
   
   }
   
?>


