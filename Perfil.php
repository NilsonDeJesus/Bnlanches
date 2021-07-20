<?php
session_start();
include "Border/header.php";
if(isset($_SESSION['login']))
?>
<!doctype html>
<html lang="en">
  <body>
  </br> 
        <div>
        </form>
        
        <!--formulario-->
<?php
include "conectar/conectar.php";
if(isset($_SESSION['login']))
$buscar = $_SESSION['usuario'];


$result_produto = "SELECT * FROM cliente WHERE cliente_login = '$buscar'";
$conteudo = mysqli_query($conn, $result_produto);

  if($resultado = mysqli_fetch_array($conteudo))
   {
    $ID = $resultado["cliente_id"];
     $NOME = $resultado["cliente_nome"];
     $SOBRENOME = $resultado["cliente_sobrenome"];
      $CPF = $resultado["cliente_cpf"];
      $LOGRADOURO = $resultado["cliente_endereco"];
     $CEP = $resultado["cliente_cep"];
      $BAIRRO = $resultado["cliente_bairro"];
      $CIDADE = $resultado["cliente_cidade"];
     $ESTADO = $resultado["cliente_estado"];
    $EMAIL = $resultado["cliente_email"];
    $TELEFONE = $resultado["cliente_telefone"];
      $LOGIN = $resultado["cliente_login"];
      $SENHA = $resultado["cliente_senha"];
      $SEXO = $resultado["cliente_sexo"];
      
?>

<form class="form" action="editar.php" method="POST">
            <article class="for">
            <!--cabeçalho-->
            <header id="titulo">
                <h1>PERFIL DO USUÁRIO</h1>
            </header>
            <fieldset  class="div">
                <div class="div">
                    <label for="NOME" > <strong>Nome:</strong></label>
                    <input type="text" name="nome"  maxlength="60"  value="<?php echo $NOME?>">
                    <label for="SobreNome"><strong>SobreNome:</strong></label>
                    <input type="text" name="sobrenome"  maxlength="60"  value="<?php echo $SOBRENOME?>">
                    <label for="CPF"><strong>CPF:</strong></label>
                    <input type="text" name="cpf"  maxlength="15" value="<?php echo $CPF?>">
                    <label for="Sexo"><strong>Sexo:</strong></label>
                    <input type="text" name="sexo" maxlength="50" value="<?php echo $SEXO?>">
                    <label for="Logradouro"><strong>Logradouro:</strong></label>
                    <input type="text" name="logradouro" maxlength="60" value="<?php echo $LOGRADOURO?>">
                    <label for="CEP"><strong>CEP:</strong></label>
                    <input type="" name="cep"  maxlength="15" value="<?php echo $CEP?>">
                    <label for="Bairro"><strong>Bairro:</strong></label>
                    <input type="text" name="bairro" maxlength="60" value="<?php echo $BAIRRO?>">
                    <label for="Cidade"><strong>Cidade:</strong></label>
                    <input type="text" name="cidade" maxlength="60" value="<?php echo $CIDADE?>">
                    <label for="Estado"><strong>Estado:</strong></label>
                    <input type="text" name="estado" maxlength="15" value="<?php echo $ESTADO?>">
                    <label id="label" for="email"> <strong>Email:</strong></label>
                    <input type="email" name="email" maxlength="40" value="<?php echo $EMAIL?>">
                    <label for="telefone"> <strong>Telefone:</strong></label>
                    <input type="tel" name="telefone" maxlength="20" value="<?php echo $TELEFONE?>">   
                    <label for="Login"><strong>Login:</strong></label>
                    <input type="login" name="login"  maxlength="100" value="<?php echo $LOGIN?>" disabled="">
                    <label for="Senha"><strong>Senha:</strong></label>
                    <input type="password" name="senha" maxlength="50" value="<?php echo $SENHA?>">
                </div>
                <?php
                } else {
                  header('location:index.php');
                }
                ?>

            </fieldset>
            

            </article> 
            <article class="botao">
             <div>
             <form class="form" action="editar.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $ID?>">
                    <input type="submit"class="btn btn-success" value="Editar"> 
                  </form>
                    <form class="form" action="excluir.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $ID?>">
                    <input type="submit" class="btn btn-danger" value="Excluir">
                </form>
                    
               
            </article></div>
            
    
        </form>
    
        
            <div >
              
        <?php
  include "Border/footer.php";

  ?>
        </div>
  </body>
  
        
</html>