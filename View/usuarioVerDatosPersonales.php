<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../View/css/estiloUsuarioPerfil.css">
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


<div class="d-flex" id="wrapper">

  <!-- Sidebar -->
    <div class="bg-secondary border-right" id="sidebar-wrapper">
      <div class="sidebar-heading text-light">Menú de Opciones </div>
      <div class="list-group list-group-flush">
        <a href="../Controller/usuarioVerPerfil.php" class="list-group-item list-group-item-action bg-secondary text-light">Información General</a>
        <a href="../Controller/usuarioVerDatosPersonales.php" class="list-group-item list-group-item-action bg-secondary text-light">Datos Personales</a>
        <a href="../Controller/usuarioVerPrestamos.php" class="list-group-item list-group-item-action bg-secondary text-light">Préstamos</a>
        <a href="#" class="list-group-item list-group-item-action bg-secondary text-light">Compras</a>
      </div>
    </div>


  
  
 <div class="container" id="principal">
  <!--Botón para mostrar o ocultar el sidebar-->
  <br>
   <button class="btn btn-primary" id="menu-toggle">Mostrar/Ocultar Opciones</button>
  <br><br>

    <img class="imgUsuario" src="../View/img/usuarios2.png" width="180">

<br><br>
<div class="table-responsive">
<table class="table bg-warning">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Dni</th>
      <th>Correo</th>
			<th>Dirección</th>
			<th>Cp</th>
			<th>Teléfono</th>
      <th>Modificar</th>
		</tr>
	</thead>
	<tbody>
    <tr>
      <td><?= $usuario->getNombre(); ?> </td>
      <td><?= $usuario->getDni(); ?> </td>
      <td><?= $usuario->getCorreo(); ?> </td>
      <form action="../Controller/usuarioCambiarDatos.php" method="POST">
        <td><input type="text" name="direccion" value="<?= $usuario->getDireccion(); ?>"></td>
        <td><input type="text" name="cp" value="<?= $usuario->getCp(); ?>"></td>
        <td><input type="text" name="telefono" value="<?= $usuario->getTelefono(); ?>"></td>
<!--Le pasamos de manera oculta los datos que no se pueden modificar-->
        <input type="hidden" name="id" value="<?=$usuario->getId()?>">
        <input type="hidden" name="nombre" value="<?=$usuario->getNombre()?>">
        <input type="hidden" name="correo" value="<?=$usuario->getCorreo()?>">
        <input type="hidden" name="dni" value="<?=$usuario->getDni()?>">
        <input type="hidden" name="contraseña" value="<?=$usuario->getContraseña()?>">
        <td><button class="btn btn-success"><i class="fas fa-edit"></i></button></td>
      </form>
    </tr>
  </tbody>
</table>
</div>
<br><br>

<div class="contraseña">
 <form id="formulario">
  <p id="tituloContraseña">Cambiar Contraseña</p>
  <input type="hidden" name="dni" value="<?=$usuario->getDni()?>">
  <input type="password" name="contraseñaActual" placeholder="Contraseña actual" required=""><br><br>

  <input type="password" name="nuevaContraseña" placeholder="Nueva Contraseña" required=""><br><br>

  <input type="password" name="repetirContraseña" placeholder="Confirmar Contraseña" required=""><br><br>
 <input type="button" class="btn btn-success" id="cambio" value="Ingresar" />

</form>
 <div id="correcto"></div>
 
</div>
    <h3 class="tituloInfoGeneral">Responsable del tratamiento de datos de carácter personal</h3>
		<p>Sus datos son recogidos y tratados por The Corner Of Dreams, de Sevilla (CIF 47394439H), creada por la Ley 3/1997, de 1 de junio (BOE de 29 de Marzo de 2020) y cuya dirección, a la que podrán dirigirse los usuarios en materia de protección de datos, es:

		C/Rafael Cabrera Angulo, Nº:3

		41710 Utrera, Sevilla

		Tel: 626 278 473

		Correo electrónico: thecornerofdreamslibreria@gmail.com</p>  

	<h3 class="tituloInfoGeneral">Delegada de Protección de Datos</h3>
		<p>En cumplimiento de la normativa vigente en materia de protección de datos personales, the Corner Of Dreams ha designado como Delegada de Protección de Datos a Rocio Alors Barrera, ante la que puede consultar dudas sobre protección de datos, hacer valer sus derechos en este ámbito o transmitir a la Universidad sus sugerencias o inquietudes. Los datos de contacto son:

		Correo electrónico: thecornerofdreamslibreria@gmail.com

		Tfnos.: 626 278 473.
        </p>

    <h3 class="tituloInfoGeneral">Información adicional sobre derechos</h3>
		<p>Conforme a la normativa vigente, puede ejercitar sus derechos de acceso, rectificación, supresión y portabilidad de sus datos, de limitación del tratamiento, de oposición a su tratamiento, así como a no ser objeto de decisiones basadas únicamente en el tratamiento automatizado de sus datos, cuando procedan.

		Puede ejercer dichos derechos mediante escrito dirigido a The Corner Of Dreams.</p>
		

<br><br>
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