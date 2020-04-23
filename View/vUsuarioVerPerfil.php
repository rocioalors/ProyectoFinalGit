<!DOCTYPE html>
<html>
<head>
	<title></title>


</head>
<body>
	<!--Codigo del nav-->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
        	<img src="../View/img/Logo.png" width="50px" height="50px">
            <a href="../Controller/principalUsuario.php" class="nav-item nav-link active">Inicio</a>
            <a href="../Controller/usuarioVerCatalago.php" class="nav-item nav-link">Ver Catálogo</a>
            <a href="../Controller/usuarioVerPerfil.php" class="nav-item nav-link">Mi perfil</a>
            <a href="../Controller/usuarioFormularioContacto.php" class="nav-item nav-link">Contacto</a> 
            
        </div>
         
                    
        <div class="navbar-nav ml-auto">
          <a href="../Controller/cerrarSesion.php"><button type="button" class="btn btn-warning">Cerrar sesion</button></a>
        </div>
    </div>
</nav>


  <h1><?= $_SESSION['user']?></h1><br>
  
 <div class="container">
  <div class="row">
    <div class="col-sm-3">
      <img src="../View/img/user.png" width="180">
    </div>
    <div class="col-sm-8 bg-warning">
    	<h3>Datos del usuario</h3>
      	<p>Telefono: <?= $usuario->getTelefono()?>.</p>
      	<p>DNI: <?= $usuario->getDni()?>.</p>
      	<p>Correo: <?= $usuario->getCorreo()?>.</p>
        <p>Correo: <?= $usuario->getDireccion()?>.</p>
    </div>
  </div>
<br><br>
 <H6>Actualmente tienes <?= $_SESSION['fueraplazo']?> préstamos fuera de plazo</H6> 
 <h3>Prestamos Fuera de Plazo</h3>
 <table class="table table-bordered">
 	<tr class="table-success">
 		<th>Fecha Préstamo</th>
 		<th>Fecha Devolución</th>
 		<th>Libro</th>
 		<th>Devolver</th>
 	</tr>

 	<?php foreach ($data['prestamofueraplazo'] as $prestamo) {?>
 	<tr>
 		<td class="text-danger"><?=$prestamo->getFechaPrestamo()?></td>
 		<td class="text-danger"><?=$prestamo->getFechaDevolucion()?></td>
 		<td class="text-danger"><?=$prestamo->getLibro()?></td>
 		<td><a href="../Controller/usuDevolverPréstamo.php?id=<?=$prestamo->getId()?>&titulo=<?=$prestamo->getLibro()?>"><input type="submit" class="btn btn-success" value ="Devolver"></a></td>
 	</tr>
 	<?php }?>
 </table>

 <br><br>

  <h3>Todos mis prestamos en vigor</h3>
 <table class="table table-bordered">
 	<tr class="table-success">
 		<th>Fecha Préstamo</th>
 		<th>Fecha Devolución</th>
 		<th>Libro</th>
 		<th>Devolver</th>
 	</tr>

 	<?php foreach ($data['prestamos'] as $prestamo) {?>
 	<tr>
 		<td><?=$prestamo->getFechaPrestamo()?></td>
 		<td><?=$prestamo->getFechaDevolucion()?></td>
 		<td><?=$prestamo->getLibro()?></td>
 		<td><a href="../Controller/usuDevolverPréstamo.php?id=<?=$prestamo->getId()?>&titulo=<?=$prestamo->getLibro()?>"><input type="submit" class="btn btn-success" value ="Devolver"></a></td>
 	<?php }?>
 	</tr>
 </table>
 </div>


</body>
</html>