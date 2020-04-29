<!DOCTYPE html>
<html>
<head>
	<title>Gestion de ventas</title>
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
            <a href="#" class="nav-item nav-link">Ventas</a>
        </div>
        <div class="navbar-nav ml-auto">
          <td><a href="../Controller/cerrarSesion.php"><button type="button" class="btn btn-warning">Cerrar sesion</button></a></td>
        </div>
    </div>
</nav>
<div class="container">
 <h1>Gestión de ventas</h1>
  <form>
    <div class="form-group">
    <label>Seleccione el tipo de dato</label>
    <select class="form-control" id="operacion" name="operacion">
      <option value="todas">Todas las ventas</option>
      <option value="meses">Agrupar por meses</option>
    </select><br>
     <input type="submit" name="consultar" value="Consultar"><br>
   
   </div>
  </form>


  <div>
  	<?php 
  	//Compruebo que he recibido operacion
  		if(isset($_REQUEST['operacion'])){
  			//Compruebo si el valor es todas
  			if($_REQUEST['operacion']=='todas'){?>
  			<h4>El total de ventas anual es <?=$total?>€</h4>
  			<br>Buscar datos
  				<input class="form-control" id="myInput" type="text" placeholder="Search.."> <br>	
  				<table class="table table-bordered">
    				<thead>
      					<tr>
        					<th>id</th>
        					<th>Fecha Compra</th>
        					<th>Usuario</th>
        					<th>Total</th>
        					<th>Ver detalle</th>
      					</tr>
    				</thead>
    			<tbody id="myTable">
    			<?php

    			foreach ($var as $key) {?>
      					<tr>
        					<td><?= $key->id?></td>
        					<td><?= $key->fechacompra?></td>
        					<td><?= $key->usuario?></td>
        					<td><?= $key->total?></td>
        					<td><a href="../Controller/detalle_venta.php?id=<?=$key->id?>&total=<?=$key->total?>"><button type="button" class="btn btn-success">Success</button></a></td>
     					 </tr>
 	 	
  				<?php 
  				}
  				?>
 				</tbody>
 				 </table>
  				<?php
  				}
            //Compruebo que operacion vale meses
    		if($_REQUEST['operacion']=='meses'){
    		?>	
  				<table class="table table-bordered">
    				<thead>
      					<tr>
        					<th>Mes</th>
        					<th>Total Mes</th>
      					</tr>
    				</thead>
    			<tbody id="myTable">
    			<?php

    			foreach ($var as $key) {?>
      					<tr>
        					<td><?= $key->mes?></td>
        					<!--bcdiv redondeo con dos decimales-->
        					<td><?= bcdiv($key->total_mes,1,2)?></td>
     					 </tr>
 	 	
  				<?php 
  				}
  				?>
 				</tbody>
 				 </table>
  
  	<?php
    }
  }
  ?>
  
  </div>
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