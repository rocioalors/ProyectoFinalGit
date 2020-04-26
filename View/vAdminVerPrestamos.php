<!DOCTYPE html>
<html lang="en">
<head>
  <title>Listado de Préstamos Pendientes</title>
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
  <h2>Listado de Préstamos Pendientes</h2>

  <p>Escriba algo en el campo de entrada para buscar en la tabla por fecha, libro o usuario.</p>  
  <input class="form-control" id="myInput" type="text" placeholder="Buscar...">
  <br>
  <table class="table table-bordered">
    <thead>
      <tr class="table-success">
          <th>#</th>
          <th>FECHA PRÉSTAMO</th>
          <th>FECHA DEVOLUCIÓN</th>
          <th>Id_Libro</th>
          <th>Titulo</th>
          <th>USUARIO</th>
      </tr>
    </thead>
    <tbody id="myTable">
       <?php
      foreach ($data['prestamo'] as $prestamo) {
      
      
       ?>
      <tr>
          <td><?=$prestamo->getId()?></td>
          <td><?=$prestamo->getFechaPrestamo()?></td>
          <td><?=$prestamo->getFechaDevolucion()?></td>
          <td><?=$prestamo->getId_Libro()?></td>
          <td><?=$prestamo->getTitulo()?></td>
          <td><?=$prestamo->getUsuario()?></td>

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
