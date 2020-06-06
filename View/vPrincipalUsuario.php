<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html>
<head>
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
  <link rel="stylesheet" type="text/css" href="../View/css/estiloPrincipalUsuario.css">
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
	

<!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <!--First slide-->
    <div class="carousel-item active">
      <img class="d-block w-100" src="../View/img/una.jpeg"
      alt="First slide">
        <div class="container">
          <div class="carousel-caption text-left">
            <h1 class="tcs ">Bienvenido a The Corner Of Dreams</h1>
            <h3 class="tcs ">Apaga la TV y Enciende un Libro</h3>
              <h2 class="tc2 "><?=$_SESSION['user']?></h2>
              <p><a class="btn btn-lg btn-danger" href="../Controller/usuarioVerCatalago.php" target="_blank" role="button">Ver Catálogo</a></p>
          </div>
        </div>
    </div>
    <!--/First slide-->
    <!--Second slide-->
    <div class="carousel-item">
      <img class="d-block w-100" src="../View/img/fondoPrincipalUsuario.jpg"
        alt="Second slide">
          <div class="container">
            <div class="carousel-caption text-left">
              <h1 class="tc3 ">Miles de aventuras te esperan...</h1>
              <p><a class="btn btn-lg btn-danger" href="../Controller/usuarioVerCatalago.php" target="_blank" role="button">Ver Catálogo</a></p>
          </div>
        </div>
    </div>
    <!--/Second slide-->
    <!--Third slide-->
    <div class="carousel-item">
      <img class="d-block w-100" src="../View/img/carrussel5.jpg"
        alt="Third slide">
    </div>
    <!--/Third slide-->
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->


<br><br>
<!--Contenido-->
<p class="hastang">#TheCornerOfDreams<br></p>

<div class="container marketing">
   <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="../View/img/dos.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>¿Qué Ofrecemos?</h2>
            <p class="titulos"> 
            Nuestra librería digital TheCornerOfDreams.com está abierta 24/7 y acercamos los mejores contenidos para todos, desde nuestros canales, para que puedas leer aquellos libros que te interesan, que te intrigan, que te llevan a otros escenarios; para aprender, para jugar, para entretenerte solo o en familia… </p>
             
            <button class="btn btn-primary" id="ampliar">Saber más</button>

            <div id="myDIV" style="display: none">
            <p class="titulos">Nuestra historia comienza en 2020 con la ilusión de  invitar a nuestros usuarios a descubrir la melodía, la energía y la emoción de leer un buen libro en formato de papel. En un mundo donde siempre estamos acelerados, queremos ofrecerle la oportunidad de evadirse disfrutando cada día de una aventura diferente... </p>
            <button class="btn btn-primary" id="menos">Mostrar menos</button>
            </div>


          </div>



          <div class="col-lg-4">
            <img class="rounded-circle" src="../View/img/duda.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>¿Cómo lo Hacemos?</h2>
            <p class="titulos">Porque los libros siempre son buenos compañeros y más en este periodo que estamos viviendo, en The Corner Of Dreams queremos acompañarte, formar parte de tu experiencia lectora.<br>
            Solo preocupate de escoger tu libro y nosotros te los llevamos a casa o bien acercate a nuestro establecimiento a recogerlo.
            </p>
            <a class="btn btn-primary" href="../Controller/usuarioVerCatalago.php" role="button">Ver Catálogo »</a>
          </div><!-- /.col-lg-4 -->

          <div class="col-lg-4">
            <img class="rounded-circle" src="../View/img/contacto.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Contáctanos</h2>
            <p class="titulos">Estaremos encantados de resolverte cualquier duda. Nos pondremos en contacto lo antes posible</p>
            <a class="btn btn-primary" href="../Controller/usuFormularioContacto.php" role="button">Contacta »</a>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

<br><br>
        <!--iconos informativos-->
        <div class="row">
        <div class="col-lg-4">
          <img class="rounded-circle" src="../View/img/comprasegura.png" alt="Generic placeholder image" width="60" height="60">
          <p>Compra Segura</p>
        </div>

        <div class="col-lg-4">
          <img class="rounded-circle" src="../View/img/enviogratis.png" alt="Generic placeholder image" width="60" height="60">
          <p>Envío Gratis a partir de 19€</p>
        </div>
      

       <div class="col-lg-4">
          <img class="rounded-circle" src="../View/img/recogidaGratis.jpg" alt="Generic placeholder image" width="60" height="60">
          <p>Recogida Gratis en tienda</p>
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