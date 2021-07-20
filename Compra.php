<?php
session_start();
include "Border/header.php";
if(isset($_SESSION['login']))
?>
<!doctype html>
    <html lang="pt-br">
      
  <body>
  </br> 
        <div>
        </form>
        
        <!--formulario-->                 
<?php
include "conectar/conectar.php";
if(isset($_SESSION['login']))
$buscar = $_SESSION['usuario'];
$compra = "ABERTO";

$result_produto = "SELECT * FROM compra WHERE cliente = '$buscar' and statuscompra='$compra'";
$conteudo = mysqli_query($conn, $result_produto);

  while($resultado = mysqli_fetch_array($conteudo))
   {
    $ID = $resultado["id"];
     $NOME = $resultado["cliente"];
     $PRODUTO = $resultado["produto"];
      $VALOR = $resultado["valor_total"];   
?>
  
        <form class="form" action="relatorio.php" method="POST">
        <article class="for">
            <header id="titulo">
            <h1>PAGAMENTO</h1>
            </header>
            <fieldset class="div">
        <div class="div">   
            <label for="Nome">Nome do Produto</label>
            <input type="text" name="produto" value="<?php echo $PRODUTO;?>">
            <label for="Valor">Valor do Produto</label>
            <input type="text" name="valor" value="<?php echo $VALOR;?>">
            <label for="Número">Número do cartão</label>
            <input type="text" name="numero" placeholder="Número do cartão">
            <label for="Data">Data de válidade</label>
            <input type="date" name="data" placeholder="Data">
            <label for="Código">Código de segurança</label>
            <input type="text" name="codigo" placeholder="Cod. cartão">
            <label for="Nome">Nome do titular do cartão</label>
            <input type="text" name="nome" value="<?php echo $NOME;?>">
            <label for="Nome">Número de parcelas</label>
            <input type="number" name="parcelas" placeholder="Número de Parcelas">
        </div>
                <article class="botao">
            <div>
            
            <input type="reset" class="btn btn-danger" value="CANCELAR">
            <input type="hidden" name="id"class="btn btn-danger" value="<?php echo $ID; ?>">
            <input type="submit" class="btn btn-success" value="FINALIZAR PAGAMENTO">
            
            </div>
                </article>
        </form>
        <fieldset>
        </article>
        <?php
        
                }
                ?> <div>
               
                </div>
    
                <div>
                <?php
        
      
      ?>
</div> 
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>


</html>
