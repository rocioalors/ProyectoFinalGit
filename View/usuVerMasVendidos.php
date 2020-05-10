<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../View/css/estiloMasVendidosUsuario.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

   <!-- Los iconos tipo Solid de Fontawesome-->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
 <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
 <script src="../View/JS/funcionesdos.js"></script>
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

<div class="jumbotron">
  <h1 class="display-4">Realiza tus préstamos y recogelos gratis en tienda o bien te lo enviamos a casa por compras superiores a 19€.</h1>
  <p class="lead">La Lectura te Abre las Puertas del Mundo que te Atreves a Imaginar...</p>
  <p id="oferta">Visita nuestro catálogo completo...Millones de aventuras te esperan...</p>
  <a class="btn btn-info btn-lg" href="../Controller/usuarioVerCatalago.php" role="button">Ver Catálogo</a>
</div>

<br>
<div class="container">
	<p class="hastang">#TheCornerOfDreams</p>
	<br><br>
	  	<div class="row">
         	<div class="col-md-7">
           		 <h2 class="featurette-heading">Disfruta de una buena lectura.</h2>
            		<p class="descripcion">Porque los libros siempre son buenos compañeros y más en este periodo que estamos viviendo, en Casa del libro queremos acompañarte, formar parte de tu experiencia lectora.</p>
          	</div>
          	<div class="col-md-5">
            	<img class="featurette-image img-fluid mx-auto"  alt="500x500" style="width: 500px; height: 150px;" src="../View/img/soñar.jpg" data-holder-rendered="true">
          	</div>
        </div>
<br><br>
	<h2 class="titulo">Nuestros Más Vendidos</h2>
<br><br>

<!--Comienzo de los card de libros-->

    <div class="row" id="libros">
<!--Se recorre todo el listado de libros de la base de datos-->
      <?php foreach ($ventaAux as $lista) {
//Establecemos un stock temporal para no permitir añadir más productos al carrito de lo que de verdad hay
          if (isset($_SESSION['enCesta'][$lista['id_libro']])) {
             $stockTemp=$lista['cantidadvender']-$_SESSION['enCesta'][$lista['id_libro']];
          }else{
              $stockTemp=$lista['cantidadvender'];
          }
      ?>
	 <div class="col-sm-3">
		  <div class="card card-block">
 			      <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180" src="../View/img/<?=$lista['imagen']?>" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;"><br>
  				      <div class="card-block">
    				      <h4 class="card-title text-center"><?= $lista['titulo']?></h4>
   					      <h6 class="card-title text-center"><?= $lista['autor']?></h6>
    				      <h6 class="text-center">Género: <?=$lista['genero']?></h6>
    				      <h6 class="text-center"><?=$lista['precio']?> €</h6>
                  <h6 class="text-center"> Temporal: <?= $stockTemp?> </h6>
                  <p class="bg-info text-center text-white" data-toggle="tooltip" title="<?=$lista['descripcion']?>">Ver sipnosis</p><br>
<!--if que comprueba la diasponibilidad de libros en alquiler si ya no hay no se muestra el botón de alquilar-->                  
                    <?php 
                        if($lista['cantidadalquiler']>0){
                    ?> 
					              <a href="#" class="btn btn-secondary" onclick="realizarPrestamo(<?php echo $lista['id_libro']?>,'<?php echo $lista['titulo'];?>')">Préstamo</a>
                  <?php }else{?>
                        <p id="noprestamo">(Sin Stock en alquiler)</p>

                  <?php
                       } 
//Hacemos lo mismo pero para la compra pero esta vez utilizando el stock temporal

                      if($stockTemp>0){
                    ?>
                      <button type="button" class="btn btn-danger" onclick="meteCarro(<?php echo $lista['id_libro'];?>)">Comprar</button>

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

<br><br>


<!-- Footer -->
  <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container text-center">
      <small>Copyright &copy; The Corner Of Dreams</small>
    </div>
  </footer>
<!-- Footer --> 

</body>
</html>