<!DOCTYPE html>
<html lang="en">
<head>
  <title>Listado de Usuarios</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="../View/css/estilos.css">
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
            <a href="#" class="nav-item nav-link">Ventas</a>
        </div>
        <div class="navbar-nav ml-auto">
          <td><a href="../Controller/cerrarSesion.php"><button type="button" class="btn btn-warning">Cerrar sesion</button></a>
        </div>
    </div>
</nav>

<!--Empieza todo lo relativo a la tabla-->
<div class="container mt-3">
  <h2>Listado de Usuarios</h2>
  <a href="../Controller/adminNuevoUsuario.php"><button type="button" class="btn btn-info">Nuevo Usuario</button></a>
    <br><br>
  <p>Escriba algo en el campo de entrada para buscar en la tabla por nombre, dni, correo, dirección ó teléfono.</p>  
  <input class="form-control" id="myInput" type="text" placeholder="Buscar...">
  <br>
  <table class="table table-bordered">
    <thead>
      <tr class="table-success">
          <th>ID</th>
          <th>NOMBRE</th>
          <th>DNI</th>
          <th>CORREO</th>
          <th>DIRECCIÓN</th>
          <th>TELEFONO</th>
          <th>Modificar</th>
          <th>Eliminar</th>
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
          <td><?=$usuario->getTelefono()?></td>
          <!--Boton modificar-->
          <td><a href="../Controller/adminModificaUsuario.php?id=<?=$usuario->getId()?>&nombre=<?=$usuario->getNombre()?>&dni=<?=$usuario->getDni()?>&correo=<?=$usuario->getCorreo()?>&direccion=<?=$usuario->getDireccion()?>&telefono=<?=$usuario->getTelefono()?>&contraseña=<?=$usuario->getContraseña()?>"><button type="button" class="btn btn-success">Modificar</button></a></td>

          <!--Boton Eliminar lleva la funcion confirmar del archivo funciones js-->
          <td><a href="../Controller/adminBorraUsuario.php?id=<?=$usuario->getId()?>"><button type="button" class="btn btn-danger" id="eliminar" onclick="return confirmar('¿Está seguro que desea eliminar el registro?')">Eliminar</button></a></td>

      </tr>
    <?php 
    }
     ?> 
    </tbody>
  </table>
  
  <p></p>
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>
</html>