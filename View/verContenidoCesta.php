<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <!--Estilo Personal-->
    <link rel="stylesheet" type="text/css" href="../View/css/dalle_cesta.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="../View/JS/funcionesdos.js"></script>

   <!-- Los iconos tipo Solid de Fontawesome-->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
 <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
</head>
<body>
  <!--Codigo del nav-->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

  <!--Botón para comprimir en ventana pequeña-->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
       aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-555">

  <!-- Links -->
     <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="../Controller/principalUsuario.php">Inicio</a>
        </li>

    <!-- Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Catálogo
            </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="../Controller/usuarioVerCatalago.php">Todo el catálogo</a>
            <a class="dropdown-item" href="../Controller/usuarioVerMasVendidos.php">Los más vendidos</a>
          </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../Controller/usuarioVerPerfil.php">Mi Perfíl</a>
         </li>

        
        <li class="nav-item">
            <a class="nav-link" href="../Controller/usuFormularioContacto.php">Contacto</a>
         </li>
        </ul>
        <div class="navbar-nav ml-auto">
              <a href="../Controller/verContenidoCesta.php"><i class="fas fa-shopping-cart"></i> <?=$_SESSION['cantidad']?> Total:<?=$_SESSION['subtotal']?>€</a> 
          </div>
            <div class="navbar-nav ml-auto">
            <button type="button" class="btn btn-warning" onclick="cerrarSesion()">Cerrar sesion</button>
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
    //Recorro los productos que están en la cesta
    foreach ($_SESSION['enCesta'] as $libro => $cantidad) {
    //Los muestros en funcion de su id
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
      //Establezco el stock temporal para que no pueda comprar más libros de los que tengo
         if (isset($_SESSION['enCesta'][$value['id_libro']])) {
             $stockTemp=$value['cantidadvender']-$_SESSION['enCesta'][$value['id_libro']];
          }else{
              $stockTemp=$value['cantidadvender'];
          }

      ?>
 <!-- Card -->
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
<!--Establezco el if para no mostrar el botón comprar cuando no disponemos de stock-->
                                    <?php if($stockTemp>0){?>
                                      <button type="button" class="btn btn-danger" onclick="meteCarro(<?php echo $value['id_libro'];?>)">Comprar</button>
                                   <?php
                                    }else{
                                    ?>
                                    <p id="noprestamo">Sin Stock</p>
                                     <?php
                                   }
                                   ?>
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