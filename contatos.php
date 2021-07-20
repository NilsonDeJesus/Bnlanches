<?php 
$nome = null;
$sobrenome = null;
$email = null;
$telefone = null;
$descricao = null;

include "conectar/conectar.php";

$nome = $_POST["Nome"];
$sobrenome = $_POST["SobreNome"];
$email = $_POST["Email"];
$telefone = $_POST["Telefone"];
$descricao = $_POST["Descricao"];

$sql = "INSERT INTO mensagem VALUES ('', '$nome', '$sobrenome', '$email', '$telefone', '$descricao')";
$query_cadastros = mysqli_query($conn, $sql);

if($query_cadastros){
    echo "
    <script>
    alert('Mensagem enviada com sucesso');
    location.href='Contato.php';

    </script>";
    
    
}else{
    echo "
    <script>
    alert('Erro ao cadastrar');
    location.href='Contato.php';

    </script>";

    }

?>