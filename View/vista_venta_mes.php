<!DOCTYPE html>
<html>
<head>
	<title></title>
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
  <!--DATATABLES-->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.js"></script>
<!--Estilo Personalizado-->
<link rel="stylesheet" href="../View/css/estilos.css">
<!--Funciones-->
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
            <a href="../Controller/principalAdmin.php" class="nav-item nav-link active">Inicio</a>
            <a href="../Controller/verCatalogo.php" class="nav-item nav-link">Libros</a>
            <a href="../Controller/verUsuarios.php" class="nav-item nav-link">Usuarios</a>
            <a href="../Controller/adminVerPrestamos.php" class="nav-item nav-link">Prestamos</a>
            <a href="../Controller/adminVerAdministradores.php" class="nav-item nav-link">Administradores</a>
             <a href="../Controller/adminLecturaEmail.php" class="nav-item nav-link">Emails</a>
            <a href="#" class="nav-item nav-link">Ventas</a>
            <a href="../Controller/adminAyuda.php" class="nav-item nav-link">Ayuda</a>
        </div>
        <div class="navbar-nav ml-auto">
          <td><a href="../Controller/cerrarSesion.php"><button type="button" class="btn btn-warning">Cerrar sesion</button></a></td>
        </div>
    </div>
</nav>

<!--Comienzo del contenido-->

<div class="container">
  <br><br>
  <h2 class="titulo">Vista del mes <?=$_REQUEST['mes']?></h2><br>
  <?php if($ventaMes!=null) {?>  
  <div class="table-responsive"> 
  <table id="prestamos"   data-page-length='10' class="table table-bordered">
    <thead>
      <tr class="table-primary text-light">
        <th>Id_Venta</th>
        <th>Fecha Venta</th>
        <th>Usuario</th>
        <th>Total</th>
        <th>Ver detalle</th>
        <th>Descargar Fra.</th>
      </tr>
    </thead>
    <tbody id="myTable">
   <?php
    foreach ($ventaMes as $key) {
       $fecha=$key->getFechaCompra();
  
        $date= strftime("%d de %B del %Y", strtotime($fecha))

      ?>
       <tr>
        <td><?=$key->getId()?></td>
        <td><?=$date?></td>
        <td><?=$key->getUsuario()?></td>
        <td><?=$key->getTotal()?></td>
        <td><a href="../Controller/detalle_venta.php?id=<?=$key->getId()?>&total=<?=$key->getTotal()?>&usuario=<?=$key->getUsuario()?>&fecha=<?=$key->getFechaCompra()?>"><button type="button" class="btn btn-success">Ver venta</button></a></td>
         <!--Utilizo estos datos para generar el pdf de la factura-->
      <td><form action="../Controller/generarpdf.php" method="post">
        <input type="hidden" name="usuario" value="<?=$key->getUsuario()?>">
        <input type="hidden" name="id_venta" value="<?=$key->getId()?>">
        <input type="hidden" name="fecha" value="<?=$key->getfechaCompra()?>">
        <input type="hidden" name="total" value="<?=$key->getTotal()?>">
        <input type="submit" class="btn btn-info" name="enviar" value="Generar PDF">
      </form>
       </td>
      </tr>
      
    <?php } ?>
    </tbody>
  </table>
<?php }else{?>
  <h3>Lo siento, aún no existen datos registrados</h3>
<?php }?>
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