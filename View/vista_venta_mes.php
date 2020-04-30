<!DOCTYPE html>
<html>
<head>
	<title></title>
   <link rel="stylesheet" href="../View/css/estilos.css">
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
            <a href="#" class="nav-item nav-link">Ventas</a>
        </div>
        <div class="navbar-nav ml-auto">
          <td><a href="../Controller/cerrarSesion.php"><button type="button" class="btn btn-warning">Cerrar sesion</button></a></td>
        </div>
    </div>
</nav>

<!--Comienzo del contenido-->

<div class="container">
  <br><br>
  <h2>Vista del mes <?=$_REQUEST['mes']?></h2><br>
  <?php if($ventaMes!=null) {?>  
  <input class="form-control" id="myInput" type="text" placeholder="Buscar.."><br>   
  <table class="table table-bordered">
    <thead>
      <tr class="table-success">
        <th>Id_Venta</th>
        <th>Fecha Venta</th>
        <th>Usuario</th>
        <th>Total</th>
        <th>Ver detalle</th>
      </tr>
    </thead>
    <tbody id="myTable">
   <?php
    foreach ($ventaMes as $key) {?>
       <tr>
        <td><?=$key->getId()?></td>
        <td><?=$key->getFechaCompra()?></td>
        <td><?=$key->getUsuario()?></td>
        <td><?=$key->getTotal()?></td>
        <td><a href="../Controller/detalle_venta.php?id=<?=$key->getId()?>&total=<?=$key->getTotal()?>"><button type="button" class="btn btn-success">Ver venta</button></a></td>
      </tr>
      <tr>
    <?php } ?>
    </tbody>
  </table>
<?php }else{?>
  <h3>Lo siento, aún no existen datos registrados</h3>
<?php }?>
</div>
</body>
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
</html>