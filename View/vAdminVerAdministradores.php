<!DOCTYPE html>
<html lang="en">
<head>
  <title>Listado de Préstamos Pendientes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&display=swap" rel="stylesheet">

   <!--DATATABLES-->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css"/>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.js"></script>

 <link rel="stylesheet" href="../View/css/estilos.css">
 <script src="../View/JS/funciones.js"></script>
</head>

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
            <a href="../Controller/adminLecturaEmail.php" class="nav-item nav-link">Emails</a>
            <a href="#" class="nav-item nav-link" data-toggle="modal" data-target="#exampleModalCenter">Ventas</a>
        </div>
        <div class="navbar-nav ml-auto">
          <td><a href="../Controller/cerrarSesion.php"><button type="button" class="btn btn-warning">Cerrar sesion</button></a>
        </div>
    </div>
</nav>

<!--Empieza todo lo relativo a la tabla-->
<div class="container mt-3">

  <h2 class="titulo">Listado de Administradores</h2>
<a href="../Controller/adminNuevoAdministrador.php"><button type="button" class="btn btn-info">Nuevo Administrador</button></a><br><br>

  <p class="texto">Escriba algo en el campo de entrada para buscar en la tabla.</p>  
  <br>
  <div class="table-responsive">
  <table id="administradores"  data-order='[[ 5, "asc" ]]' data-page-length='10' class="table table-bordered">
    <thead>
      <tr class="table-primary text-light">
          <th>Usuario</th>
          <th>Contraseña</th>
          <th>Dni</th>
          <th>Email</th>
          <th>Telefono</th>
          <th>Modificar</th>
          <th>Eliminar</th>
      </tr>
    </thead>
    <tbody id="myTable">
       <?php
      foreach ($data['administradores'] as $admin) {
      
      
       ?>
      <tr>
          <td><?=$admin->getUsuario()?></td>
          <td><?=$admin->getContraseña()?></td>
          <td><?=$admin->getDni()?></td>
          <td><?=$admin->getemail()?></td>
          <td><?=$admin->getTelefono()?></td>
          
          <!--Botón de Modificar-->
          <td><a href="../Controller/adminModificaAdministrador.php?usuario=<?=$admin->getUsuario()?>&contraseña=<?=$admin->getContraseña()?>&dni=<?=$admin->getDni()?>&email=<?=$admin->getemail()?>&telefono=<?=$admin->getTelefono()?>"><button type="button" class="btn btn-success"><i class="far fa-edit"></i></button></a></td>

          <!--Botón de eliminar lleva la funcion de confirmar del archivo funciones.js-->
          <td><a href="../Controller/adminBorraAdministrador.php?dni=<?=$admin->getDni()?>"><button type="button" class="btn btn-danger" id="eliminar"><i class="fas fa-trash-alt"></i></button></a></td>
      

      </tr>
    <?php 
    }
     ?> 
    </tbody>
  </table>
  </div>
  <p></p>
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button id="entrar" type="button" class="btn btn-primary">Entrar</button>
      </div>
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