<?php 
include "conectar/conectar.php";
$ID = $_POST["id"];
$nome = $_POST["nome"];
$cartao = $_POST["numero"];
$data = $_POST["data"];
$seguranca = $_POST["codigo"];
$parcelas = $_POST["parcelas"];
$produto = $_POST["produto"];
$valor = $_POST["valor"];
$comprastatus = "FECHADO";
$sqlCompra = "UPDATE compra SET statuscompra='$comprastatus' WHERE id='$ID'";

$sql = "INSERT INTO relatorio 
VALUES ('','$nome', '$cartao', '$data', 
'$seguranca', '$parcelas', '$produto', '$valor')";

$query_cadastros = mysqli_query($conn,$sql,);

$query_compra = mysqli_query($conn,$sqlCompra);


if($query_cadastros){
    echo "
    <script>
    alert('Compra feita com sucesso'); 
    location.href='Compra.php';
    </script>";
    
}else{
    echo "
    <script>
    alert('Erro na compra');
    location.href='Compra.php';
    </script>"; 
    }
?>