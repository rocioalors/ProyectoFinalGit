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
  <link rel="stylesheet" type="text/css" href="../View/css/estiloPrincipalUsuario.css">
  <!--Para los iconos-->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
 <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
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
	<?php if($registros>0){
		foreach ($comentarios as $key) {?>
	 <p><?=$key->getNombre()?></p>
	 <p><?=$key->getFecha()?></p>
	 <p><?=$key->getComentario()?></p>


	<?php	
		}

	}else{?>

		<h4>Actualmete no hay comentarios, Sé el primero en hacerlo</h4>


<?php
	}
		
    ?>
	  <form action="#contact" method="post" class="contact-form">
            <h2 class="tm-section-title">DEJANOS TU COMENTARIO</h2>
                      <p id="texto">Estaremos encantados de ayudarles a través de nuestro formulario de contacto, teléfono o email.</p>
                                       
                          <div class="form-group">
                            <textarea id="contact_message" name="comentario" class="form-control" rows="9" placeholder="Mensaje" required></textarea>
                          </div>

                          
                          <button type="submit" name="enviar" class="btn btn-warning">Enviar</button>
                           
                      </form>

	   	

	   </form>
		
	</div>

</body>
</html>