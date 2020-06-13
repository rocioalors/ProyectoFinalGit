<!DOCTYPE html>
<html lang="en">
<head>
  <title>Listado de Préstamos Pendientes</title>
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
<!--Estilo Personalizaso-->
<link rel="stylesheet" href="../View/css/estilos.css">
<!--Funciones Propias-->
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
            <a href="../Controller/adminAyuda.php" class="nav-item nav-link">Ayuda</a>
        </div>
        <div class="navbar-nav ml-auto">
          <td><a href="../Controller/cerrarSesion.php"><button type="button" class="btn btn-warning">Cerrar sesion</button></a></td>
        </div>
    </div>
</nav>

<!--Empieza todo lo relativo a la tabla-->
<div class="container mt-3">
  <h2 class="titulo">Listado de Préstamos</h2><br><br>
    <form>
    <div class="form-group">
    <label class="texto">Seleccione el tipo de dato:</label>
    <select class="form-control" id="operacion" name="operacion">
      <option value="todos">Todos los préstamos</option>
      <option value="fuera">Préstamos fuera de plazo</option>
    </select><br>
     <input class="btn btn-success" type="submit" name="consultar" value="Consultar"><br>
   
   </div>
  </form>

  <p class="texto">Escriba algo en el campo de entrada para buscar en la tabla por fecha, libro o usuario.</p>  
  
  <br>
  <div class="table-responsive">
  <table id="prestamos"  data-order='[[ 5, "asc" ]]' data-page-length='10'class="table table-bordered">
    <thead>
      <tr class="table-primary text-light">
          <th>#</th>
          <th>FECHA PRÉSTAMO</th>
          <th>FECHA DEVOLUCIÓN</th>
          <th>ID_LIBRO</th>
          <th>Titulo</th>
          <th>USUARIO</th>
          <th>CANCELAR</th>
          <th>CONTACTAR</th>
      </tr>
    </thead>
    <tbody id="myTable">
       <?php
       if(isset($_REQUEST['operacion'])){

      if($_REQUEST['operacion']=='todos'){
      foreach ($data['prestamo'] as $prestamo) {
          $fechaPrestamo=$prestamo->getFechaPrestamo();
          $fechaDevo=$prestamo->getFechaDevolucion();
  
      $dateUno= strftime("%d de %B del %Y", strtotime($fechaPrestamo));
      $dateDos= strftime("%d de %B del %Y", strtotime($fechaDevo));
      
       ?>
      <tr>
          <td><?=$prestamo->getId()?></td>
          <td><?=$dateUno?></td>
          <td><?=$dateDos?></td>
          <td><?=$prestamo->getId_Libro()?></td>
          <td><?=$prestamo->getTitulo()?></td>
          <td><?=$prestamo->getUsuario()?></td>
          <!--Botón para cancelar présamos, preguntamos antes si estamos seguros-->
          <td><a href="../Controller/adminCancerlarPrestamo.php?id=<?=$prestamo->getId()?>&id_libro=<?=$prestamo->getId_Libro()?>"><input type="submit"onclick="return confirmar('¿Está seguro que desea eliminar el registro?')" class="btn btn-danger" value ="Cancelar"></a></td>
          <!--Botón que permite al administrador ver los datos de contacto del usuario-->
          <td><a href="../Controller/adminContactoUsuario.php?usuario=<?=$prestamo->getUsuario()?>"><input type="submit" class="btn btn-info" value ="Contactar"></a></td>

      </tr>
    <?php 
    }//FIN DEL FOR DE TODOS LOS PRESTAMOS
    }//Fin DEL IF DE TODOS LOS PRESTAMOS

    if($_REQUEST['operacion']=='fuera'){
      foreach ($data['fueraPlazo'] as $prestamo) {
            $fechaPrestamo=$prestamo->getFechaPrestamo();
            $fechaDevo=$prestamo->getFechaDevolucion();
  
      $dateUno= strftime("%d de %B del %Y", strtotime($fechaPrestamo));
      $dateDos= strftime("%d de %B del %Y", strtotime($fechaDevo));
      
      
       ?>
      <tr>
          <td><?=$prestamo->getId()?></td>
          <td><?=$dateUno?></td>
          <td><?=$dateDos?></td>
          <td><?=$prestamo->getId_Libro()?></td>
          <td><?=$prestamo->getTitulo()?></td>
          <td><?=$prestamo->getUsuario()?></td>
           <!--Botón para cancelar présamos, preguntamos antes si estamos seguros-->
          <td><a href="../Controller/adminCancerlarPrestamo.php?id=<?=$prestamo->getId()?>&id_libro=<?=$prestamo->getId_Libro()?>"><input type="submit"onclick="return confirmar('¿Está seguro que desea eliminar el registro?')" class="btn btn-danger" value ="Cancelar"></a></td>
          <!--Botón que permite al administrador ver los datos de contacto del usuario-->
          <td><a href="../Controller/adminContactoUsuario.php?usuario=<?=$prestamo->getUsuario()?>"><input type="submit" class="btn btn-info" value ="Contactar"></a></td>

      </tr>
    <?php 
    }//FIN DEL FOR DE PRESTAMOS FUERA PLAZO
    }//Fin DEL IF FUERA PLAZO 




  }//FIN DEL PRIMER IF SI HE RECIBIDO OPERACION
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
