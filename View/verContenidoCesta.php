<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../View/css/dalle_cesta.css">
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <title>
        
      </title>
    </meta>
  </head>
  <body>
    <div class="container">
      <h1>Gastos de envios GRATIS por compras superiores a 19 €</h1>
      <?php 
      if($_SESSION['subtotal']==0){
      ?>
      <h2>Ups tu cesta está vacia</h2>
      <a href="../Controller/usuarioVerCatalago.php">Seguir Comprando</a>
      <?php 
      }else{

       ?>
<table border = "1"><tr><th colspan="6">
  <h3>PRODUCTOS EN TU CESTA <?=$_SESSION['user']?></h3>
</th>
</tr>
<tr>
  <td>Codigo</td>
  <td>Producto</td>
  <td>Cantidad</td>
  <td>Precio</td>
  <td>Importe</td>
</tr>

<?php 
    foreach ($_SESSION['enCesta'] as $libro => $cantidad) {
            $producto=Libro::getLibroById($libro);
            ?>
            <tr>
              <td><?=$libro?></td>
              <td><img style="width:100px" src="../View/img/<?=$producto->getImagen()?>"></td>
              <td><?=$cantidad?></td>
              <td><?=$producto->getPrecio()?> euros</td>
              <td><?=$producto->getPrecio()*$cantidad?>euros</td>
              <td>
          
            <form action="QuitaCarro.php" method="get">
                <input type="hidden" name="quitapro" value="<?= $producto->getId() ?>">
                <input type="submit" value="Eliminar">
            </form>
            </td>
          </tr>
    <?php  
    }
    ?>
    <tr>
      <td colspan="2">Total</td>
      <td><?=$_SESSION['cantidad']?></td>
      <td></td>
      <td> <?=$_SESSION['subtotal']?>euros</td>
      <td></td>
    </tr>
    <tr>
     <tr>
      <td colspan="2">Gastos de envio</td>
      <td></td>
      <td></td>
      <td><?=$envio ?></td>
      <td></td>
      <td></td>
    </tr>
       <tr>
      <td colspan="2">Total</td>
      <td></td>
      <td></td>
      <td><?=$_SESSION['total']=$_SESSION['subtotal']+$envio; ?></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
    <td colspan="3"><a href="../Controller/usuarioVerCatalago.php">Seguir Comprando</a></td>
    <td colspan="3"><a href="../Controller/finCompra.php">Finalizar Compra</a></td>
    </tr>
</table>


<?php } ?>
<div class="row">
<?php
foreach ($VentaAux as $key => $value) {

?>

            <!-- Team member -->
            
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="card card-block">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="../View/img/<?=$value['imagen']?>" alt="card image"></p>
                                    <h4 class="card-title"><?=$value['titulo']?></h4>
                                    <p class="card-text"><?=$value['autor']?></p> 
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Sipnosis</h4>
                                    <p class="card-text"><?=$value['descripcion']?></p>
                                    <p class="card-text"><?=$value['edicion']?></p>
                                    <p class="card-text">Precio <?=$value['precio']?>€</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
          
         
<?php           
}?>

 </div>
</div>
  </body>
</html>