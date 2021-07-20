<?php 

include 'conectar/conectar.php';

$ID = $_POST['id'];
$sql = "DELETE FROM cliente WHERE cliente_id = $ID";


$query_cadastros = mysqli_query($conn, $sql) or die(mysqli_error($conn));


if($query_cadastros){
    echo "
    <script>
    alert('apagado com sucesso');
    location.href='Perfil.php';
    </script>";
   
    
}else{
    echo "
    <script>
   alert('Não foi possivel deletar o usuário');
   location.href='Perfil.php';
   </script>";
 
}
?>
