<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../View/css/estiloFormularioContacto.css">
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
            <a class="nav-link" href="../Controller/usuBlog.php">Blog</a>
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
 
<br><br>
 <div class="container">
    <section id="contact" class="tm-content-box">

      <div class="tm-flex">
                           
          <div class="tm-contact-left-half tm-gray-bg">
              <div class="tm-contact-inner-pad">
                   
                      <div class="row justify-content-center align-items-center">
                      <div class="col col-lg-8">
                      <form action="#contact" method="post" class="contact-form">
                           <h2 class="tm-section-title">FORMULARIO DE CONTACTO</h2>
                      <p id="texto">Estaremos encantados de ayudarles a través de nuestro formulario de contacto, teléfono o email.</p>
                          <div class="form-group">
                               <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Nombre"  required/>
                          </div>
                          
                          <div class="form-group">
                              <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email"  required/>
                          </div>
                                        
                          <div class="form-group">
                            <textarea id="contact_message" name="contact_message" class="form-control" rows="9" placeholder="Mensaje" required></textarea>
                          </div>

                          
                          <button type="submit" name="enviar" class="btn btn-warning">Enviar</button>
                           
                      </form>
                    </div>
                  </div>
                </div>                                
            </div>

           <div class="tm-contact-right-half tm-purple-bg">
                <div class="tm-address-box">
                    <h2  id="direccion" class="tm-section-title text-center">Datos de contacto</h2>
                        <address class="contacto text-center">C/ Calle Judea nº 3,<br>
                                             41710-Utrera(Sevilla)<br>
                                             Teléfono: 626278473<br>
                                             Email:thecornerofdreams@gmail.com<br>
                          <a href="https://es-es.facebook.com/" class="facebook">  <i class="fab fa-facebook-f"></i></a>
                          <a href="https://twitter.com/?lang=es" class="twitter"><i class="fab fa-twitter"></i></a>
                                    </address>    
                </div>                                
          
           </div>
                        
    </div>
</div>
    
</section>



   
<!-- Footer -->
  <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container text-center">
      <small>Copyright &copy; The Corner Of Dreams</small>
    </div>
  </footer>
<!-- Footer -->
</body>
</html>