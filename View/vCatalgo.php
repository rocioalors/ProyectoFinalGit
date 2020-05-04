<!DOCTYPE html>
<html lang="en">
<head>
  <title>Listado de Libros</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&display=swap" rel="stylesheet">
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
            <a href="#" class="nav-item nav-link" data-toggle="modal" data-target="#exampleModalCenter">Ventas</a>
        </div>
        <div class="navbar-nav ml-auto">
          <td><a href="../Controller/cerrarSesion.php"><button type="button" class="btn btn-warning">Cerrar sesion</button></a></td>
        </div>
    </div>
</nav>

<!--Empieza todo lo relativo a la tabla-->
<div class="container mt-3">
  <h2>Catálogo de libros</h2>
  <a href="../Controller/nuevoLibro.php"><button type="button" class="btn btn-info">Nuevo Libro</button></a>
    <br><br>
  <p>Escriba algo en el campo de entrada para buscar en la tabla por título, autor o género</p>  
  <input class="form-control" id="myInput" type="text" placeholder="Buscar...">
  <br>
  <table class="table table-bordered">
    <thead>
      <tr class="table-success">
          <th>#</th>
          <th>IMAGEN</th>
          <th>TITULO</th>
          <th>AUTOR</th>
          <th>DESCRIPCION</th>
          <th>Precio</th>
          <th>CANTD ALQUILER</th>
          <th>CANTD VENDER</th>
          <th>GENERO</th>
          <th>Edición</th>
          <th>Modificar</th>
          <th>Eliminar</th>
      </tr>
    </thead>
    <tbody id="myTable">
       <?php
      foreach ($data['libro'] as $libro) {
      
      
       ?>
      <tr>
          <td><?=$libro->getId()?></td>
           <td><img src="../View/img/<?=$libro->getImagen()?>"width="60"></td>
          <td><?=$libro->getTitulo()?></td>
          <td><?=$libro->getAutor()?></td>
          <td><?=$libro->getDescripcion()?></td>
          <th><?=$libro->getPrecio()?></th>
          <td><?=$libro->getcantidadalquiler()?></td>
          <td><?=$libro->getcantidadvender()?></td>
          <td><?=$libro->getGenero()?></td>
          <td><?=$libro->getEdicion()?></td>

          <!--Botón de Modificar-->
          <td><a href="../Controller/adminModificaLibro.php?id=<?=$libro->getId()?>&imagen=<?=$libro->getImagen()?>&titulo=<?=$libro->getTitulo()?>&autor=<?=$libro->getAutor()?>&descripcion=<?=$libro->getDescripcion()?>&precio=<?=$libro->getPrecio()?>&cantAlquiler=<?=$libro->getcantidadalquiler()?>&cantvender=<?=$libro->getcantidadvender()?>&genero=<?=$libro->getGenero()?>&edicion=<?=$libro->getEdicion()?>"><button type="button" class="btn btn-success">Modificar</button></a></td>

          <!--Botón de eliminar lleva la funcion de confirmar del archivo funciones.js-->
          <td><a href="../Controller/adminBorraLibro.php?id=<?=$libro->getId()?>"><button type="button" class="btn btn-danger" id="eliminar" onclick="return confirmar('¿Está seguro que desea eliminar el registro?')">Eliminar</button></a></td>
      </tr>
    <?php 
    }
     ?> 
    </tbody>
  </table>
  

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
