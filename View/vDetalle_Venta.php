<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="../View/css/estilos.css">
<meta charset="utf-8">
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
              <a href="../Controller/adminLecturaEmail.php" class="nav-item nav-link">Emails</a>
            <a href="#" class="nav-item nav-link">Ventas</a>
        </div>
        <div class="navbar-nav ml-auto">
          <td><a href="../Controller/cerrarSesion.php"><button type="button" class="btn btn-warning">Cerrar sesion</button></a></td>
        </div>
    </div>
</nav>

<!--Comienzo del contenido-->	
<div class="container">

<h1 class="titulo">Detalle de la venta</h1>
<h3 class="titulo">Total de la venta: <?=$_REQUEST['total']?> €</h3><br>
<div class="table-responsive">
<table class="table table-bordered">
	<tr class="table-primary text-light">
		<th>Id_Libro</th>
		<th>Imagen</th>
		<th>Título</th>
		<th>Descripcion</th>
		<th>Precio/Unitario</th>
		<th>Cantidad</th>
		<th>Total</th>
    </tr>
    <?php foreach ($ventas as $key => $value) {?>
    <tr>
   		<td><?=$value['id_libro']?></td>
   		<td><img src="../View/img/<?=$value['imagen']?>"width=30></td>
   		<td><?=$value['titulo']?></td>
   		<td><?=$value['descripcion']?></td>
   		<td><?=$value['precio']?></td>
   		<td><?=$value['cantidad']?></td>
   		<td><?=$gastos=$value['cantidad']*$value['precio']?></td>
    </tr>
	<?php }?>
	
</table>
</div>
<!--Utilizo estos datos para generar el pdf de la factura-->
<form action="../Controller/generarpdf.php" method="post">
  <input type="hidden" name="usuario" value="<?=$_REQUEST['usuario']?>">
  <input type="hidden" name="id_venta" value="<?=$_REQUEST['id']?>">
  <input type="hidden" name="fecha" value="<?=$_REQUEST['fecha']?>">
  <input type="hidden" name="total" value="<?=$_REQUEST['total']?>">
  <input type="submit" class="btn btn-info" name="enviar" value="Generar PDF">
</form>

<br><br>
<a href="../Controller/adminVerVentas.php">Volver</a>
</div>
<br><br>
  <!-- Footer -->
  <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container text-center">
      <small>Copyright &copy; The Corner Of Dreams</small>
    </div>
  </footer>
<!-- Footer -->

</body>
</html>