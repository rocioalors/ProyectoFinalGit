<!DOCTYPE html>
<html>
<head>
	<title>Catálogo de Libros</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" type="text/css" href="../View/css/estilousuariocatalogo.css">
  <script type="text/javascript" src="../View/JS/funcionesdos.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<!--Codigo NAV-->
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
            <a class="nav-link" href="../Controller/principalUsuario.php">Contacto</a>
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



<div class="jumbotron">
  <h1 class="display-4">Viaja por el mundo a través de la lectura</h1>
  <p class="lead">Este año sabemos que viajar está más complicado que nunca, pero una vez más la literatura nos rescata del hastío y la rutina.</p>
  <p id="oferta">Consulta tus préstamos y compras a través de tu perfíl.</p>
  <a class="btn btn-info btn-lg" href="../Controller/usuarioVerPerfil.php" role="button">Ver Perfíl</a>
</div>

<!--Contenido de la página-->
<div class="container">
<!--Cabecera de la pag-->
    <p class="hastang">#TheCornerOfDreams</p>

<!--Buscador--> 
 
         <input class="form-control" id="myInput" type="text" placeholder="Buscar por título, autor o género...">
 
      <br><br>


<!--Comienzo de card-->
    
    <div class="row" id="libros">
<!--Se recorre todo el listado de libros de la base de datos-->
      <?php foreach ($data['lista'] as $lista) {
//Establecemos un stock temporal para no permitir añadir más productos al carrito de lo que de verdad hay
          if (isset($_SESSION['enCesta'][$lista->getId()])) {
             $stockTemp=$lista->getCantidadvender()-$_SESSION['enCesta'][$lista->getId()];
          }else{
              $stockTemp=$lista->getCantidadvender();
          }
      ?>
	 <div class="col-sm-3">
		  <div class="card card-block">
 			      <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180" src="../View/img/<?=$lista->getImagen()?>" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;"><br>
  				      <div class="card-block">
    				      <h4 class="card-title text-center"><?= $lista->getTitulo()?></h4>
   					      <h6 class="card-title text-center"><?= $lista->getAutor()?></h6>
    				      <h6 class="text-center">Género: <?=$lista->getGenero()?></h6>
    				      <h6 class="text-center"><?=$lista->getPrecio()?> €</h6>
                  <h6 class="text-center"> Temporal: <?= $stockTemp?> </h6>
                  <p class="bg-info text-center text-white" data-toggle="tooltip" title="<?=$lista->getDescripcion()?>">Ver sipnosis</p><br>
<!--if que comprueba la diasponibilidad de libros en alquiler si ya no hay no se muestra el botón de alquilar-->                  
                    <?php 
                        if($lista->getCantidadalquiler()>0){
                    ?> 
					              <a href="#" class="btn btn-secondary" onclick="realizarPrestamo(<?php echo $lista->getId()?>,'<?php echo $lista->getTitulo();?>')">Préstamo</a>
                  <?php }else{?>
                        <p id="noprestamo">(Sin Stock en alquiler)</p>

                  <?php
                       } 
//Hacemos lo mismo pero para la compra pero esta vez utilizando el stock temporal

                      if($stockTemp>0){
                    ?>
                      <button type="button" class="btn btn-danger" onclick="meteCarro(<?php echo $lista->getId();?>)">Comprar</button>

                    <?php
                    } else{?>
                        <p id="noprestamo">(Sin Stock en Venta)</p>
                    <?php }?>
  				    </div>
  		    </div>
  		<br>
	 </div>

<?php
}
 ?>
</div>	
</div> 

<!-- Footer -->
  <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container text-center">
      <small>Copyright &copy; The Corner Of Dreams</small>
    </div>
  </footer>
<!-- Footer --> 
</body>
</html>