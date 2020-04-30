<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="../View/css/estilos.css">
	<title></title>
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
            <a href="#" class="nav-item nav-link" data-toggle="modal" data-target="#exampleModalCenter">Ventas</a>
        </div>
        <div class="navbar-nav ml-auto">
          <td><a href="../Controller/cerrarSesion.php"><button type="button" class="btn btn-warning">Cerrar sesion</button></a></td>
        </div>
    </div>
</nav>





<!--Comienzo del contenido-->	
<div class="container">
<br><br>
<h1>DATOS DE CONTACTO</h1><br>
<table class="table table-bordered">
	<tr class="table-success">
		<th>Id</th>
		<th>Nombre</th>
		<th>Dni</th>
		<th>Correo</th>
		<th>Dirección</th>
		<th>Codigo Postal</th>
    <th>Telefono</th>
    </tr>
  <tr>
 		 <td><?=$usuAux->getId()?></td>
   		<td><?=$usuAux->getNombre()?></td>
   		<td><?=$usuAux->getDni()?></td>
   		<td><?=$usuAux->getCorreo()?></td>
   		<td><?=$usuAux->getDireccion()?></td>
   		<td><?=$usuAux->getcp()?></td>
      <td><?=$usuAux->getTelefono()?></td>
    </tr>

	
</table>
<br><br>
<a href="../Controller/adminVerPrestamos.php">Volver</a>
</div>

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
        <button type="button" class="btn btn-primary" onclick="ventas(document.getElementById('contraseña').value)">Save changes</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>