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
            <a href="#" class="nav-item nav-link">Ventas</a>
        </div>
        <div class="navbar-nav ml-auto">
          <td><a href="../Controller/cerrarSesion.php"><button type="button" class="btn btn-warning">Cerrar sesion</button></a></td>
        </div>
    </div>
</nav>





<!--Comienzo del contenido-->	
<div class="container">

<h1>Detalle de la venta</h1>
<h3>Total de la venta: <?=$_REQUEST['total']?> €</h3><br>
<table class="table table-bordered">
	<tr class="table-success">
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
<br><br>
<a href="../Controller/adminVerVentas.php">Volver</a>
</div>
</body>
</html>