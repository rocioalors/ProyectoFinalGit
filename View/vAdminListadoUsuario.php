<!DOCTYPE html>
<html lang="en">
<head>
  <title>Listado de Usuarios</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&display=swap" rel="stylesheet">
    <!--DATATABLES-->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css"/>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.js"></script>
  <!--Estilo Personal-->
  <link rel="stylesheet" href="../View/css/estilos.css">
  <!--Funciones-->
  <script  src="../View/JS/funciones.js"></script>
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
            <a href="../Controller/adminAyuda.php" class="nav-item nav-link">Ayuda</a>
        </div>
        <div class="navbar-nav ml-auto">
          <td><a href="../Controller/cerrarSesion.php"><button type="button" class="btn btn-warning">Cerrar sesion</button></a></td>
        </div>
    </div>
</nav>

<!--Empieza todo lo relativo a la tabla-->
<div class="container mt-3">
  <h2 class="titulo">Listado de Usuarios</h2>
  <a href="../Controller/adminNuevoUsuario.php"><button type="button" class="btn btn-info">Nuevo Usuario</button></a>
    <br><br>
  <p class="texto">Escriba algo en el campo de entrada para buscar en la tabla por nombre, dni, correo, dirección ó teléfono.</p>  
  <br>
  <div class="table-responsive">
  <table id="example"  data-order='[[ 5, "asc" ]]' data-page-length='10' class="table table-bordered">
    <thead>
      <tr class="table-primary text-light">
          <th>ID</th>
          <th>NOMBRE</th>
          <th>DNI</th>
          <th>CORREO</th>
          <th>DIRECCIÓN</th>
          <th>Codigo Postal</th>
          <th>TELEFONO</th>
          <th>Modificar</th>
      </tr>
    </thead>
    <tbody id="myTable">
       <?php
      foreach ($data['usuarios'] as $usuario) {
      
      
       ?>
      <tr>
          <td><?=$usuario->getId()?></td>
          <td><?=$usuario->getNombre()?></td>
          <td><?=$usuario->getDni()?></td>
          <td><?=$usuario->getCorreo()?></td>
          <td><?=$usuario->getDireccion()?></td>
           <td><?=$usuario->getCp()?></td>
          <td><?=$usuario->getTelefono()?></td>
          <!--Boton modificar-->
          <td><a href="../Controller/adminModificaUsuario.php?id=<?=$usuario->getId()?>&nombre=<?=$usuario->getNombre()?>&dni=<?=$usuario->getDni()?>&correo=<?=$usuario->getCorreo()?>&direccion=<?=$usuario->getDireccion()?>&cp=<?=$usuario->getCp()?>&telefono=<?=$usuario->getTelefono()?>&contraseña=<?=$usuario->getContraseña()?>"><button type="button" class="btn btn-success"><i class="far fa-edit"></i></button></a></td>

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
