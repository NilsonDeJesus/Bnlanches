<?php

include 'conectar/conectar.php';

$ID = $_POST['id'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$cpf = $_POST['cpf'];
$logradouro = $_POST['logradouro'];
$cep = $_POST['cep'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];
$sexo = $_POST['sexo'];

$sql = " UPDATE cliente 
SET cliente_nome='$nome', cliente_sobrenome='$sobrenome', cliente_cpf='$cpf', 
cliente_endereco='$logradouro', cliente_cep='$cep', cliente_bairro='$bairro', 
cliente_cidade='$cidade', cliente_estado='$estado', cliente_email='$email', 
cliente_telefone='$telefone', cliente_senha='$senha', 
cliente_sexo='$sexo' WHERE cliente_id = '$ID' ";
$query_cadastros = mysqli_query($conn, $sql) or die(mysqli_error($conn));

if($query_cadastros){
    echo "
    <script>
    alert('Editado com sucesso');
    location.href='Perfil.php';
    </script>";
   
    
}else{
    echo "
    <script>
    alert('Erro ao Editar');
    location.href='Perfil.php';
    </script>";
    
    }
?>