<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <link rel="StyleSheet" href="../View/estilos.css" type="text/css">
      <title>
        
      </title>
    </meta>
  </head>
  <body>
    <div class="contenedor">
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
</div>
<?php } 
?>
  </body>
</html>