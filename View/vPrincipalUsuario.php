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
  <link rel="stylesheet" type="text/css" href="../View/css/estiloPrincipalUsuario.css">
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
        </div>
        <div class="navbar-nav ml-auto">
          <a href="../Controller/cerrarSesion.php"><button type="button" class="btn btn-warning">Cerrar sesion</button></a>
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
      <img class="d-block w-100" src="../View/img/fondoPrincipalUser.jpg"
        alt="First slide">
    </div>
    <!--/First slide-->
    <!--Second slide-->
    <div class="carousel-item">
      <img class="d-block w-100" src="../View/img/tres.jpg"
        alt="Second slide">
    </div>
    <!--/Second slide-->
    <!--Third slide-->
    <div class="carousel-item">
      <img class="d-block w-100" src="../View/img/cuatro.jpg"
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

	<h1 class="titulo">Bienvenido a The Corner Of Dreams</h1>
    <h3 class="titulo"><?=$_SESSION['user']?></h3><br>
    <p class="hastang">#YoMeQuedoEnCasaConTheCornerOfDreams<br></p>


<div class="container marketing">
   <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="../View/img/dos.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>¿Qué Ofrecemos?</h2>
            <p> 
            Nuestra librería digital TheCornerOfDreams.com está abierta 24/7 y acercamos los mejores contenidos para todos, desde nuestros canales, para que puedas leer aquellos libros que te interesan, que te intrigan, que te llevan a otros escenarios; para aprender, para jugar, para entretenerte solo o en familia… </p>
          </div><!-- /.col-lg-4 -->

          <div class="col-lg-4">
            <img class="rounded-circle" src="../View/img/duda.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>¿Cómo lo Hacemos?</h2>
            <p>Porque los libros siempre son buenos compañeros y más en este periodo que estamos viviendo, en The Corner Of Dreams queremos acompañarte, formar parte de tu experiencia lectora.<br>
            Solo preocupate de escoger tu libro y nosotros te los llevamos a casa.
            </p>
            <a class="btn btn-primary" href="../Controller/usuarioVerCatalago.php" role="button">Ver Catálogo »</a>
          </div><!-- /.col-lg-4 -->

          <div class="col-lg-4">
            <img class="rounded-circle" src="../View/img/contacto.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Contáctanos</h2>
            <p>Estaremos encantados de resolverte cualquier duda. Nos pondremos en contacto lo antes posible</p>
            <a class="btn btn-primary" href="../Controller/usuarioPrestamos.php" role="button">Contacta »</a>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

</div>

<!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4">

  <!-- Footer Elements -->
  <div class="container">

    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center">
      <li class="list-inline-item">
        <a class="btn-floating btn-fb mx-1">
          <i class="fab fa-facebook-f"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-tw mx-1">
          <i class="fab fa-twitter"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-gplus mx-1">
          <i class="fab fa-google-plus-g"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-li mx-1">
          <i class="fab fa-linkedin-in"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-dribbble mx-1">
          <i class="fab fa-dribbble"> </i>
        </a>
      </li>
    </ul>
    <!-- Social buttons -->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


 

</body>
</html>