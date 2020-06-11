<!DOCTYPE html>
<html>
<head>
	<title></title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--Estilo propio-->
  <link rel="stylesheet" type="text/css" href="../View/css/estiloUsuarioPerfil.css">
  
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

	<!--Codigo NAV-->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top fixed-top">

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


<div class="d-flex" id="wrapper">

  <!-- Sidebar -->
    <div class="bg-secondary border-right" id="sidebar-wrapper">
      <div class="sidebar-heading text-light">Menú de Opciones </div>
      <div class="list-group list-group-flush">
        <a href="../Controller/usuarioVerPerfil.php" class="list-group-item list-group-item-action bg-secondary text-light">Información General</a>
        <a href="../Controller/usuarioVerDatosPersonales.php" class="list-group-item list-group-item-action bg-secondary text-light">Datos Personales</a>
        <a href="../Controller/usuarioVerPrestamos.php" class="list-group-item list-group-item-action bg-secondary text-light">Préstamos</a>
        <a href="../Controller/usuarioVerCompras.php" class="list-group-item list-group-item-action bg-secondary text-light">Compras</a>
        <a href="../Controller/usuAyuda.php" class="list-group-item list-group-item-action bg-secondary text-light">Ayuda</a>
      </div>
    </div>


  

 <div class="container" id="principal">
  <!--Botón para mostrar o ocultar el sidebar-->
  
   <button class="btn btn-primary" id="menu-toggle">Mostrar/Ocultar Opciones</button>
  <br><br>

 <!--INFORMACION-->
   <h2 class="titulo">¿Necesitas Ayuda?</h2>
   <a class="btn btn-warning" href="usuAyuda.php?file=ManualAyudaUsuario.pdf">Descargar Manual de Ayuda</a><br>
   <br><h3 class="texto">Te mostramos las preguntas más frecuentes:</h3>

<div class="tab">
  <button class="tablinks" onmouseover="openTexto(event, 'comprar')"><i class="fas fa-shopping-basket"></i> ¿Cómo Comprar online?</button>
  <button class="tablinks" onmouseover="openTexto(event, 'Prestamos')"><i class="far fa-calendar-check"></i> Préstamos</button>
  <button class="tablinks" onmouseover="openTexto(event, 'envio')"><i class="fas fa-shipping-fast"></i> Envíos y devoluciones</button>
  <button class="tablinks" onmouseover="openTexto(event, 'dudas')"><i class="fas fa-question"></i> ¿Aún con dudas?</button>
</div>

<div id="comprar" class="tabcontent">
  <h3 class="titulo">Compras</h3>
  <p>¡Comprar en The Corner Of Dreams es muy sencillo! Sólo debes seguir los siguientes pasos:</p>

  <p>1. Deslizate por nuestro catálogo o bien escribe el título de tu libro en el buscador. ¡Seguro que encuentras lo que buscas!</p> 

  <p>2. Has encontrado lo que quieres? Selecciona tus libros y añade los artículos que desees a la cesta. Cuándo hayas terminado de añadir productos, selecciona el icono <i class="fas fa-shopping-cart"></i></p>

  <p>3. Para tramitar tu compra selecciona finalizar compra y rellena los datos necesarios para tramitarla (Nombre, apellidos, nº de cuenta y CVV).</p>

  <P>4. Lo tienes todo? ¡Ahora ya puedes confirmar tu pedido y disfrutar en muy poco tiempo de tu compra!</P>

</div>

<div id="Prestamos" class="tabcontent">
  <h3 class="titulo">Préstamos</h3>
  <p>Para realizar tu préstamo, sólo debes seguir los siguienes pasos:</p>

  <p>1. Deslizate por nuestro catálogo o bien escribe el título de tu libro en el buscador. ¡Seguro que encuentras lo que buscas!</p> 

  <p>2. Has encontrado lo que quieres? Selecciona el botón prestar y añade tu libro a tus préstamos. Ya puedes pasar a recogerlo en nuestro establecimiento.(Recuerda que sólo puedes tener dos préstamos activos y que no se puede prestar un mismo libro dos veces).</p>

  <p>3. Para consultar tus préstamos activos, solo debes entrar en la pestaña Perfil->Préstamos...¡No te olvides de devolverlos a tiempo!</p>
</div>

<div id="envio" class="tabcontent">
  <h3 class="titulo">Envíos y devoluciones</h3>
  <p>¿Cuales son nuestros gastos de envío?</p>

  <p>¡Si seleccionas tu envío a domicilio será gratuito para pedidos a partir de 19€!</p>
  <p>En caso contrario, los costes de envío son de 2.95€</p>

  <p>¿Cuales son los plazos de entrega?</p>

  <p>Queremos que disfrutes de tu lectura lo antes posible, por eso los plazos de entrega son de 2 a 4 días hábiles.</p>

  <p>Devolución</p>

  <p>Para poder devolver un artículo, éste tiene que conservar su envoltorio original.Dispones un plazo de 15 desde que lo recibes.</p> 
  <p>Puedes realizar tu devolución tanto por correo como en nuestras tiendas.</p>

</div>

<div id="dudas" class="tabcontent">
  <h3 class="titulo">Contáctanos</h3>
  <p><i class="fas fa-phone-volume"></i> Teléfono: 626 278 473</p>

  <p><i class="fas fa-gift"></i> Dirección: C/Rafaél Cabrera Angulo, 3 Utrera,Sevilla</p>
  <p><i class="far fa-envelope"></i> Email: thecornerofdreamslibreria@gmail.com</p>

  <p><i class="fas fa-at"></i><a href="../Controller/usuFormularioContacto.php">Formulario de contacto</a></p>

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

</body>
</html>