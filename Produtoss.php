<?php

include "conectar/conectar.php";
$ID = $_POST['id'];
$cliente = $_POST['nome'];
$tipo = $_POST['produto'];
$quant = $_POST['quanti'];
$preco = $_POST['valor'];
$comprastatus = "ABERTO";
$compras = "FECHADO";
$Banco = "UPDATE pedido SET situacao='$compras' WHERE id='$ID'";



$sql = "INSERT INTO compra (id, produto, quant, cliente,valor_total,statuscompra) VALUES ('','$tipo', '$quant', '$cliente','$preco', '$comprastatus')";
$query_cadastros = mysqli_query($conn,$sql);
$query_compra = mysqli_query($conn,$Banco);

if($query_cadastros){
  echo "
  <script>
 alert('Compra enviada');
 </script>";
 header('location:Pedido.php');
}else{
  echo "
  <script>
  alert('erro na compra');

 </script>"; 
  }
  header('location:Pedido.php');

?>

