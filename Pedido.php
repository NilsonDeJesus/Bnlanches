<?php
session_start();
include "Border/header.php";
if(isset($_SESSION['login'])){
    include "conectar/conectar.php";
    $buscar = $_SESSION['usuario'];
    $compra = "ABERTO";
    $result_produto = "SELECT * FROM pedido WHERE cliente = '$buscar' and situacao ='$compra'";
$conteudo = mysqli_query($conn, $result_produto);
}else{
    
    header('location:index.php');
}
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
               
               <th>USUÁRIO</th>
               <th>PEDIDO</th>
               <th>TIPO</th>
               <th>QUANTIDADE</th>
               <th>VALOR</th>
               <th>COMPRAR</th>
               <th>DELETAR</th>

               

           </tr>
       </thead>
       <tbody>
<?php


   while($resultado = mysqli_fetch_array($conteudo))
   {
      $ID = $resultado["id"];
      $CLIENTE = $resultado["cliente"];
      $NOME = $resultado["nome"];
      $TIPO = $resultado["tipo"];
      $QUANT = $resultado["quantidade"];
      $VALOR = $resultado["preco"];
      
      
?>       
<form action="Produtoss.php" method="POST" enctype="multipart/form-data">
<tr class="">

    <td class=""><input type="text" name ="nome" value="<?php echo $CLIENTE?>" Readonly></td>
    <td class=""><input type="text" name ="produto" value="<?php echo $NOME?>"Readonly></td>
    <td class=""><input type="text" name ="tipo" value="<?php echo $TIPO ?>"Readonly></td>
    <td class=""><input type="number" name ="quanti" value="<?php echo $QUANT?>" ></td>
    <td class=""><input type="text" name ="valor" value="<?php echo $VALOR ?>"Readonly ></td>
    
    <td class=""><input type="hidden" name="id" value="<?php echo $ID ?>">
    <input type="submit"  class="btn btn-success" value="COMPRAR"></td>
    
</form>

  <td>
  <form action="EXCLUIRPEDIDO.php" method="POST" >
  <input type="hidden" name="id" value="<?php echo $ID?>">
  <input type="submit" class="btn btn-danger" value="EXCLUIR">
                </form>
               

</tr>
  <?php }
    ?> 
<!-- parou o while-->    
  
       </tbody>

   </table></div>
   </fieldset>
   </article>
  

<?php
include "Border/footer.php";

?>
  </body>
</html>
