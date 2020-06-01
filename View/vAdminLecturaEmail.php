<!DOCTYPE html>
 <html>
 <head>
 	<title></title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../View/css/estiloFormulario.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="../View/JS/funciones.js"></script>

   <!-- Los iconos tipo Solid de Fontawesome-->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
 <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

   <!--DATATABLES-->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css"/>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.js"></script>

 </head>

 <body>
<!--Código barra de navegación-->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="../Controller/principalAdmin.php" class="nav-item nav-link active">Inicio</a>
            <a href="../Controller/verCatalogo.php" class="nav-item nav-link">Libros</a>
            <a href="../Controller/verUsuarios.php" class="nav-item nav-link">Usuarios</a>
            <a href="../Controller/adminVerPrestamos.php" class="nav-item nav-link">Prestamos</a>
            <a href="../Controller/adminVerAdministradores.php" class="nav-item nav-link">Administradores</a>
            <a href="#" class="nav-item nav-link">Emails</a>
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button id="entrar" type="button" class="btn btn-primary">Entrar</button>
      </div>
    </div>
  </div>
</div>


<div class="container">
<h1 class="titulo1">Revisión de Emails</h1>
<?php if(file_exists('../emailRecibidos/email.txt')){?>

 	<form action="#" method="post">
 		<div class="form-group">
    	<h5 class="texto">Seleccione la Fecha</h5>
			<select name="consultar">
				<?php 
					foreach ($fecha as $fecha) {?>
				<option value="<?=$fecha?>"><?=$fecha?></option>

				<?php	
					}
				 ?>
     		</select>
     <br><br>
    	<input class="btn btn-success" type="submit" value="Mostrar Emails">
    </div>
	</form>
<br><br>
<?php if(isset($_SESSION['emails'])){?>
<div class="table-responsive">
	<table class="table table-bordered">
 		<thead>
 			<tr class="table-primary text-light">
 			<th>Nombre</th>
 			<th>Email</th>
 			<th>Información</th>
 			</tr>
 		</thead>
 		<tbody>
 			<?php
 				
 					foreach ($_SESSION['emails'] as $email => $datos) {
 			?>
 			<tr>
 				<td><?= $email ?></td>
 				<td><?= $datos[0] ?></td>
 				<td><?= $datos[1] ?></td>
 			</tr>
 			<?php
 					}			
 				
 			?>
 		</tbody>
 	</table>
 	</div>
  <br><br>
  <hr>
 	 <h4 class="info">El número de lineas que tiene el fichero es <?=$num_lineas?> y el número de carácteres es: <?=$caracteres?></h4>
 	<br><br>
 	<div class="form-row text-center">
 		<div class="col-12">
 			<form action="#" method="post">
	 			<input class="btn btn-danger" name="borrar" type="submit" value="Borrar Emails">
			</form>
		</div>
	</div>
	<br><br>
 	<?php
 }
   }else{
   ?>
   <h2 class="info">Actualmente no tiene correos por leer</h2>
   <img class="rounded-circle" id="email" src="../View/img/email.jpg">
<?php
}
?>
	
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