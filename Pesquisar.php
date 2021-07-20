<?php
$buscar = NULL;
session_start();
include "Border/header.php";
include "conectar/conectar.php";

if (isset( $_POST["NOME"]))
  $buscar= $_POST["NOME"];
$result_produto = "SELECT *FROM produto WHERE produto_nome LIKE '%$buscar%'";
$conteudo = mysqli_query($conn, $result_produto);
?>
<!doctype html>
<html lang="pt-br">
  <body>
        
      <div class="container">
      <header id="titulo1">
       
      </div>
      <article class="formulario">
      <fieldset class="div">
                <div class="div"> 
        

  <div class="container">
    <table class="table">
       <thead>
           <tr>
               <th>ID</th>
               <th>NOME</th>
               <th>TIPO</th>
               <th>QUANTIDADE</th>
               <th>VALOR</th>
               <th>DESCRIÇÃO</th>
               <?php if (isset( $_SESSION["login"])){?>
               <th>PEDIDO</th>
               <?php }?>

           </tr>
       </thead>
       <tbody>
<?php


   while($resultado = mysqli_fetch_array($conteudo))
   {
      $ID = $resultado["produto_id"];
      $NOME = $resultado["produto_nome"];
      $TIPO = $resultado["produto_tipo"];
      $QUANT = $resultado["produto_quant"];
      $VALOR = $resultado["produto_valor"];
      $DESCRICAO = $resultado["produto_situacao"];
      
?>       
<form action="ParaProdutos.php" method="POST" enctype="multipart/form-data">
<tr class="">
<td class=""><input type="text" name ="id" value="<?php echo $ID; ?>" readonly></td>
    <td class=""><input type="text" name ="nome" value="<?php echo $NOME; ?>" readonly></td>
    <td class=""><input type="text" name ="tipo" value="<?php echo $TIPO; ?>"readonly></td>
    <td class=""><input type="text" name ="quanti" value="<?php echo $QUANT; ?>" readonly></td>
    <td class=""><input type="text" name ="valor" value="<?php echo $VALOR; ?>" readonly></td>
    <td class=""><input type="text" name ="descri" value="<?php echo $DESCRICAO; ?>" readonly></td>
    <?php if (isset( $_SESSION["login"])){?>
    <td class=""><input type="submit"  class="btn btn-success" value="PEDIR"></td>

    <?php }?>
</form>
<td>


</tr>
  <?php }if($resultado!=mysqli_fetch_array($conteudo)){
      echo "<script>alert('Produto não encontrado');
      </script>";
  }
  
      
    ?> 
<!-- parou o if-->    
  
       </tbody>

   </table></div>
   </fieldset>
   </article>
  

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
