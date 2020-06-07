<!DOCTYPE html>
<html>
<head>
	<title></title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <!--Funciones propias-->
  <script src="../View/JS/funcionesDOM.js"></script>
  <script src="../View/JS/funcionesdos.js"></script>
  <!--El estilo-->
  <link rel="stylesheet" type="text/css" href="../View/css/estiloBlog.css">
  <!--Para los iconos-->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
 <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
</head>

<body>
	<!--Codigo NAV-->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">

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
            <a class="nav-link" href="../Controller/usuBlog.php">Blog</a>
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
	
	<div class="container">
 <div class="row">
<div class="col-sm-4">
	  <h2 class="titulo">Eventos</h2>
	  <h4 class="titulo2">Firma de libro Javier Castillo 19/06/20 19:00</h4>
	 
	  <img src="../View/img/javierCastillo.jpg" width="90%" >

	  <p class="texto">Javier Castillo firmará su último libro La chica de la nieve.</p>

	  <h4 class="titulo2">Concurso de escritura 29/06/20 19:00</h4>
	 
	  <img src="../View/img/concurso.jpg" width="90%" >

	  <p class="texto">GANA HASTA 150€...Puedes inscribirte hasta el 15/06/2020.</p>

      <h3 class="titulo">Frases Célebres</h3>
      <div class="fakeimg"><img src="../View/img/escritura.jpg"></div>
      <p class="texto">El misterio de la vida no es un problema a resolver, sino una realidad a experimentar (Duna, Frank Herbert)</p>

      
</div>

 <div class="col-sm-8">
	<!--MUESTRO LOS COMENTARIOS SI EXISTEN-->
	<img  class="central" src="../View/img/opinion.jpg" width="100%" height="20%">
	<?php if($registros>0){?>
     <h1 class="titulo">Comentarios de Nuestros Lectores</h1>
	
    <?php
		foreach ($comentarios as $key) {
        $fecha=$key->getFecha();
  
        $date= strftime("%d de %B del %Y", strtotime($fecha));

			?>
  <div class="card bg-warning text-light">
    <div class="card-body">
      <p class="usuario"><?=$key->getNombre().' '.$date?></p>
      <p><?=$key->getComentario()?></p>
    </div>
  </div>
  <br>
	 


	<?php	
		}

	}else{?>

		<h4>Actualmete no hay comentarios, Sé el primero en hacerlo</h4>


<?php
	}
		
    ?>
    <hr><br><br>
	  <form action="#" method="post" class="contact-form">
            <h4 class="titulo">DÉJANOS TU COMENTARIO</h4>
                      <p class ="titulo2">¿As leído alguno de nuestros libros? Tu comentario puede resultar útil para otros lectores.</p>
                                       
                          <div class="form-group">
                            <textarea id="contact_message" name="comentario" class="form-control" rows="9" placeholder="Escribe aquí tu referencia..." required></textarea>
                          </div>

                          
                          <button type="submit" name="enviar" class="btn btn-warning">Comentar</button>
                           
                      </form>

	   	

	   </form>
	</div>
	</div>
</div>




<!-- Footer -->
    <footer id="myFooter" class="py-4 bg-dark text-white-50">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <img src="../View/img/Logo.png">
                </div>
                <div class="col-sm-2">
                    <h5>Empezar</h5>
                    <ul>
                        <li><a href="../Controller/usuarioVerCatalago.php">Catálogo Completo</a></li>
                        <li><a href="../Controller/usuarioVerMasVendidos.php">Novedades y más vendidos</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Sobre Nosotros</h5>
                    <ul>
                        <li><a href="../Controller/principalUsuario.php">Conócenos</a></li>
                        <li><a href="../Controller/usuFormularioContacto.php">Contacto</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Soporte<e/h5>
                    <ul>
                        <li><a href="../Controller/usuAyuda.php">Ayuda</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <div class="social-networks">
                      <h5>Redes Sociales</h5>
                        <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></i></a>
                        <a href="#" class="Instagram"><i class="fab fa-instagram"></i></i></a>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="container text-center">
      <small>Copyright &copy; The Corner Of Dreams</small>
    </div>
    </footer>
<!-- Footer --> 
</body>
</html>