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

<!--Codigo NAV-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
          <img src="../View/img/Logo.png" width="50px" height="50px">
            <a href="../Controller/principalUsuario.php" class="nav-item nav-link active">Inicio</a>
            <a href="../Controller/usuarioVerCatalago.php" class="nav-item nav-link">Ver Catálogo</a>
            <a href="../Controller/usuarioVerPerfil.php" class="nav-item nav-link">Mi perfil</a>
            <a href="../Controller/usuarioFormularioContacto.php" class="nav-item nav-link">Contacto</a> 
           <a href="../Controller/verContenidoCesta.php"> CESTA: <?=$_SESSION['cantidad']?>Prd Total:<?=$_SESSION['subtotal']?>€</a>
        </div>
        <div class="navbar-nav ml-auto">
          <a href="../Controller/usuarioCerrarSesion.php"><button type="button" class="btn btn-warning">Cerrar sesion</button></a>
        </div>
    </div>
</nav>


<!--Comienzo del contenido de la cesta-->
<div class="container">
  <h1>Gastos de envios GRATIS por compras superiores a 19 €</h1>
<!--Compruebo que la cesta no está vacia-->
    <?php 
    if($_SESSION['subtotal']==0){
    ?>
      <h2>Ups tu cesta está vacia</h2>
      <a href="../Controller/usuarioVerCatalago.php">Seguir Comprando</a>
    <?php 
    }else{
    ?>
<!--Si no esta vacia le muestro el contenido de la cesta-->
<br><br>
<div class="table-responsive">
<table class="table table-bordered">
<tr class="table-info">
  <td>Codigo</td>
  <td>Producto</td>
  <td>Titulo</td>
  <td>Cantidad</td>
  <td>Precio</td>
  <td>Importe</td>
  <td>Eliminar de la cesta</td>
</tr>

<?php 
    foreach ($_SESSION['enCesta'] as $libro => $cantidad) {
            $producto=Libro::getLibroById($libro);
            ?>
            <tr>
              <td><?=$libro?></td>
              <td><img style="width:50px" src="../View/img/<?=$producto->getImagen()?>"></td>
              <td><?=$producto->getTitulo()?></td>
              <td><?=$cantidad?></td>
              <td><?=$producto->getPrecio()?> euros</td>
              <td><?=$producto->getPrecio()*$cantidad?>euros</td>
              <td>
          
            <form action="QuitaCarro.php" method="get">
                <input type="hidden" name="quitapro" value="<?= $producto->getId() ?>">
                <input type="submit" class="btn btn-info" value="Eliminar">
            </form>
            </td>
          </tr>
    <?php  
    }
    ?>
    <tr>
      <td colspan="3" class="table-success">Cantidad</td>
      <td><?=$_SESSION['cantidad']?></td>
      <td class="table-success">Subtotal</td>
      <td><?=$_SESSION['subtotal']?>euros</td>
      <td></td>
    </tr>
     <tr>
      <td colspan="4"></td>
      <td class="table-success">Gastos de envio</td>
      <td><?=$envio ?></td>
      <td></td>
    </tr>
       <tr>
      <td colspan="4"></td>
      <td class="table-success">Total</td>
      <td><?=$_SESSION['total']=$_SESSION['subtotal']+$envio; ?></td>
      <td></td>
    </tr>
    <tr>
    <td colspan="3"><a href="../Controller/usuarioVerCatalago.php">Seguir Comprando</a></td>
    <td colspan="4"><a href="../Controller/finCompra.php">Finalizar Compra</a></td>
    </tr>
</table>
</div>

<?php } ?>


<!--Sugerencias de libros más venididos-->
<br><br>
<h1>Los Más Vendidos de esta semana</h1>
<br><br>
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
                                    <a href="../Controller/usuComprarSugerencias.php?id=<?= $value['id_libro']?>"><button type="button" class="btn btn-primary">Compra</button></a>
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