<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- css -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!--JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 
 	<!-- Los iconos tipo Solid de Fontawesome-->
 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
 	<script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

	<link rel="stylesheet" type="text/css" href="../View/css/estiloAyudaAmin.css">
	<script src="../View/JS/funcionesAyudaAdmin.js"></script>
  <script src="../View/JS/funciones.js"></script>

	

</head>
<body>

	 <!--Código barra de navegación-->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="../Controller/principalAdmin.php" class="nav-item nav-link">Inicio</a>
            <a href="../Controller/verCatalogo.php" class="nav-item nav-link">Libros</a>
            <a href="../Controller/verUsuarios.php" class="nav-item nav-link">Usuarios</a>
            <a href="../Controller/adminVerPrestamos.php" class="nav-item nav-link">Prestamos</a>
            <a href="../Controller/adminVerAdministradores.php" class="nav-item nav-link">Administradores</a>
            <a href="../Controller/adminLecturaEmail.php" class="nav-item nav-link">Emails</a>
            <a href="#" class="nav-item nav-link" data-toggle="modal" data-target="#exampleModalCenter">Ventas</a>
            <a href="../Controller/adminAyuda.php" class="nav-item nav-link">Ayuda</a>
        </div>
        <div class="navbar-nav ml-auto">
          <td><a href="../Controller/cerrarSesion.php"><button type="button" class="btn btn-warning">Cerrar sesion</button></a></td>
        </div>
    </div>
</nav> 

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Esta información es confidencial</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="info" id="info"></div>
       <form>
          <div class="form-group" id="contrasena-group">
              <input type="password" class="form-control" placeholder="Contraseña" name="contraseña" id="contraseña" required/>
              </div>
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button  id="entrar" type="button" class="btn btn-primary">Entrar</button>
      </div>
    </div>
  </div>
</div>

<div class="container">
	<h1 class="tituloInfoGeneral">¿Necesitas Ayuda?</h1>
    <div class="botones">
	 <button class="accordion text-light">¿Cómo visualizar, añadir, modificar o eliminar datos?</button>
		<div class="panel">
  			<h5>Visualizar datos</h5>
  			<p>Haz click en el menú de navegación en los datos que quieras visualizar (libros, usuarios, préstamos, administradores, email o ventas) o bien accede desde el panel de control de inicio haciendo click en la imagen de los datos que desees visualizar.</p>
  			<p>Una vez dentro de la pestaña elegida, podrás visualizar una tabla con todos los datos seleccionados, pudiendo realizar busquedas e incluso ordenación de datos.</p>

  			<h6>Caso Especial - Préstamos</h6>
  			<p>En el caso de los préstamos, deberás seleccionar los datos a visualizar (Todos los préstamos o préstamos fuera de plazo).</p>
  			<p>Una vez seleccionado los datos puedes cancelar el préstamo  realizando click sobre el botón Cancelar o visualizar los datos de contacto del usuario que ha realizado el préstamo haciendo click sobre el botón Contactar.</p>

  			<h5>Añadir Datos</h5>
  			<p>Una vez dentro de la pestaña de los datos que queremos añadir, hacemos click sobre el boton añadir que se encuentra en la parte superior de la tabla de datos.</p>
  			<p>Se abre una nueva ventana con un formulario. Debes rellenar todos los datos y hacer click en botón Grabar.</p>

  			<h5>Modificar Datos</h5>
  			<p>Una vez dentro de la pestaña de los datos que queremos añadir, hacemos click sobre el boton <i class="far fa-edit"></i>.</p>
  			<p>Se abre una nueva ventana con un formulario con los datos actuales, cambia los datos que deseas y haz click sobre el botón Grabar.</p>

  			<h5>Eliminar Datos</h5>
  			<p>Una vez dentro de la pestaña de los datos que queremos añadir, hacemos click sobre el boton <i class="fas fa-trash-alt"></i>.</p>
  			<p>Se nos preguntará si estamos seguros de eliminar el registro, si es así pulsaremos aceptar. Si pulsamos sobre cancelar no se producirá ningún cambio.</p>

  			<h5>Ventas</h5>
  			<p>Para ver como gestionar las ventas, pincha sobre el apartado "consultar ventas" de esta misma página.</p>
  			
		</div>

	<button class="accordion text-light">Visualizar y eliminar Emails recibidos</button>
		<div class="panel">
			<h5>Visualizar Emails</h5>
  			<p>Para visualizarlos sólo es necesario seleccionar la fecha de la que queremos ver los Emails y hacemos click sobre el botón Consultar. Una vez seleccionada se nos mostrará en una tabla todos los emails recibidos ese día.</p>

  			<h5>Eliminar Emails</h5>
  			<p>Justo después de la tabla con la información de los emails recibidos, visualizamos un párrafo que nos muestras el número de lineas que tiene el archivo que contiene los emails. Se recomienda borrarlo cada cierto tiempo haciendo click sobre el botón Borrar Emails.</p>
		</div>

	<button class="accordion text-light">Consultar Ventas</button>
		<div class="panel">
  			<p>En el caso de las ventas, es necesario conocer la clave de acceso para poder visualiar los datos. Una vez dentro podemos elegir entre ver las siguientes opciones:</p>

  			<h6>Grafica Mensual</h6>
  			<p>Nos muestra los datos de las ventas agrupada por meses de forma gráfica</p>

  			<h6>Agrupar por meses</h6>
  			<p>Nos muestra los datos de las ventas agrupada por meses. Dentro de esta tabla nos encontramos con un botón  Ver Ventas que nos permitirá ver todas las ventas que se han realizado ese mes mediante la visualización de otra tabla en la que también podremos visualizar el detalle de la venta pulsando sobre el botón Ver Ventas desde donde nos podremos descargar la factura en formato pdf.</p>

  			<h6>Todas las ventas</h6>
  			<p>Nos muestra todas las ventas que han realizado los usuarios en forma de tabla. Desde ella y pulsando sobre el botón Ver Venta podremos ver el detalle de la venta así como descargarnos la factura en formato pdf.</p>
		</div>

		<button class="accordion text-light">Soporte Técnico</button>
		<div class="panel">
			<h6>Datos de contacto</h6>
  			<p><i class="fas fa-phone-volume"></i> Teléfono: 626 278 473</p>
  			<p><i class="far fa-envelope"></i> Email: alexa_net89@hotmail.com</p>
  		</div>

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