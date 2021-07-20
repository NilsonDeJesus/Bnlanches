<?php 

include 'conectar/conectar.php';

$ID = $_POST['id'];
$sql = "DELETE FROM pedido WHERE id = $ID";


$query_cadastros = mysqli_query($conn, $sql) or die(mysqli_error($conn));


if($query_cadastros){
    echo "
    <script>
    alert('Pedido Deletado');
    location.href='Pedido.php';
    
    </script>";
 
    
    
}else{
    echo "
    <script>
   alert('Não foi possivel deletar o pedido');
   location.href='Pedido.php';
   </script>";
 
}
?>
