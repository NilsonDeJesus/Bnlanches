<?php
session_start();
include "Border/header.php";
?>

<!doctype html>
<html lang="pt-br">
  <head>
    
</head>
  <body>

      
    <div class="container">
    </form>
    <!-------Formulario---->
        <form classe="form" action="contatos.php" method="POST">

            <article classe="for">

            <!---Cabecalho--->
            <header id="titulo">
                <h1 style="color:black"><strong>Fale conosco:</strong></h1>
            </header>
            <fieldset class="div">
                    <div classe="div">
                    <label style="color:black" for="nome"> <strong>Nome:</strong></label></br>
                    <input type="text" name="Nome" placeholder="Digite o seu nome " maxlength="60" required></br>
                    <label style="color:black" for="sobrenome"><strong>SobreNome:</strong></label></br>
                    <input type="text" name="SobreNome" placeholder="Digite o seu SobreNome" maxlength="60" required></br>
                    <label style="color:black" for="email"> <strong>Email:</strong></label></br>
                    <input type="text" name="Email" placeholder="Digite o seu email " maxlength="60" required></br>
                    <label style="color:black" for="telefone"><strong>Telefone:</strong></label></br>
                    <input type="text" name="Telefone" placeholder="Digite o seu Telefone" maxlength="20" required></br>
                    <H2 style="color:black"><strong>Digite aqui:</strong></H2></br>
                    <textarea style="width: 16em" name="Descricao" id="descricao" cols="50" rows="5"></textarea></br>
     
                    </div>
            </fieldset>
            <article class="botao"> 
             <div class="form-group" >
                <label class="col-md-2 control-label" for="Cadastrar"></label>
                <div class="col-md-8">
                <button id="Cadastrar" name="Enviar" class="btn btn-success" type="Submit">Enviar mensagem</button>
                <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
                </div>
                </article> 
            </article>
             </form>
             
    </div>
    <?php
  include "Border/footer.php";

  ?>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>