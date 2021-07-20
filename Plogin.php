<?php
session_start();
include "Border/header.php";
if(isset($_SESSION['login'])){
    echo"<script> alert('Usuario conectado');
    </script>";
    header('location:index.php');
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

    <title>Login</title>
</head>
<body> 
    
      </br> </br> </br> </br> </br> </br>
      <div class="container">
               <!--formulario-->
        <form class="log" action="Login.php" method="POST">
            <fieldset>
            <!--cabeçalho-->
            <header id="titulo2">
                <h3>Tela de Login</h3>
            </header>
                <div class="field" class="btn btn-sucess">
                    <label for="Login"> <strong>Login:</strong></label>
                    <input type="text" name="Login" placeholder="Digite o seu Login" maxlength="20" required
                    class="btn btn-sucess">
                </br>
                    <label for=""><strong>Senha:</strong></label>
                    <input type="password" name="Senha" placeholder="Digite a sua Senha" maxlength="30" required class="btn btn-sucess">
                </div>
             <article class="botao">
                <div>
                    <input type="submit" value="Entrar" class="btn btn-success"></br></br>
                    <input type="reset" value="Cancelar" class="btn btn-danger"></br></br>
                    </br><a href="Cadastramento.php">Cadastrar no site</a>
                </div>
             </article>

        </fieldset>
        </form>
        <?php if(isset($_GET['erro'])){ ?>
      
<div class="alert alert-danger" role="alert" class="justify-content: center" >
    Usuario ou/Senha errado!
</div>



<?php } ?>

      
      <?php
  include "Border/footer.php";

  ?>
        
    </body>

    </html>