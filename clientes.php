<?php 

include "conectar/conectar.php";

$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$cpf = $_POST["cpf"];
$logradouro = $_POST["logradouro"];
$cep = $_POST["cep"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$login = $_POST["login"];
$senha = $_POST["senha"];
$sexo = $_POST["sexo"];

$sql = "INSERT INTO cliente 
VALUES ('','$nome', '$sobrenome', '$cpf', 
'$logradouro', '$cep', '$bairro', '$cidade', 
'$estado', '$email', '$telefone', '$login', '$senha', '$sexo')";

$query_cadastros = mysqli_query($conn,$sql);


if($query_cadastros){
    echo "
    <script>
    alert('cadastrado com sucesso');
    location.href='Cadastramento.php';
  </script>";
  
    
}else{
    echo "
    <script>
    alert('Erro ao cadastrar');
    location.href='Cadastramento.php';

    </script>";
    
    
    }

?>

