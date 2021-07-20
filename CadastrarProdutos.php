<?php
session_start();
include "Border/header.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
</head>
<body>
  <div class="container">
</form>
<!--formulario-->
<form class="form" action="produtos.php" method="POST">
    <article class="for">
    <!--cabeçalho-->
    <header id="titulo">
        <h1 >Cadastro de Produtos</h1>
    </header>
    <fieldset  class="div">
        <div class="div">
            <label for="Nome"> <strong>Nome do Produto:</strong></label>
            <input type="text" name="nome" placeholder="Digite o nome do produto" maxlength="60">
            <label for="Tipo"><strong>Tipo de Produto:</strong></label>
            <input type="text" name="tipo" placeholder="Digite o tipo de produto" maxlength="60">
            <label for="Quantidade"><strong>Quantidade do Produto:</strong></label>
            <input type="number" name="quantidade" placeholder="Informe a quantidade do produto" maxlength="15">
            <label for="valor"><strong>Valor do Produto:</strong></label>
            <input type="number" name="valor" placeholder="Informe o valor do produto" maxlength="15">
            <h4>Descrição do Produtos:</h4>
            <textarea style="width: 16em" name="descricao" id="descricao" cols="50" rows="5"></textarea>
        </div>
    </fieldset>
    <article class="botao">
        <div>
            <button type="submit" name="Salvar">Salvar</button>
            <button type="reset" name="Limpar">Limpar</button>
            
        </div>
    </article>
</article> 
</form>

  </div>
  <?php
   include "Border/footer.php";

  ?>
</body>
</html>