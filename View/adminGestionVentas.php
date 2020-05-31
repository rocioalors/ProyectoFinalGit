<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="../View/css/estilos.css">
   <!--DATATABLES-->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css"/>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.js"></script>
   <!--script necesario para ver la gráfica-->
   <script src="../View/JS/chart.min.js"></script>
   <script src="../View/JS/funciones.js"></script>
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
            <a href="../Controller/adminVerAdministradores.php" class="nav-item nav-link">Administradores</a>
            <a href="../Controller/adminLecturaEmail.php" class="nav-item nav-link">Emails</a>
            <a href="#" class="nav-item nav-link">Ventas</a>
        </div>
        <div class="navbar-nav ml-auto">
          <td><a href="../Controller/cerrarSesion.php"><button type="button" class="btn btn-warning">Cerrar sesion</button></a></td>
        </div>
    </div>
</nav>
<div class="container">
 <h1 class="titulo">Gestión de ventas</h1>
  <form>
    <div class="form-group">
    <label class="texto">Seleccione el tipo de dato</label>
    <select class="form-control" id="operacion" name="operacion">
      <option value="gmensual">Grafico mensual</option>
      <option value="meses">Agrupar por meses</option>
      <option value="todas">Todas las ventas</option>
    </select><br>
     <input type="submit" class="btn btn-info" name="consultar" value="Consultar"><br>
   
   </div>
  </form>
  


  	<?php 
  	//Compruebo que he recibido operacion
  		if(isset($_REQUEST['operacion'])){
  			//Compruebo si el valor es todas
  			if($_REQUEST['operacion']=='todas'){
            if($datos!=null){
     ?>
  			<h4 class="titulo">El total de ventas anual es <?=$total?>€</h4>
  			<br><p class="texto">Buscar datos</p>
  				  	
            <div>
  				    <table id="example"   data-page-length='10'class="table table-bordered">
    				    <thead>
      					   <tr class="table-primary text-light">
        					     <th>id</th>
        					     <th>Fecha Compra</th>
        					     <th>Usuario</th>
        					     <th>Total</th>
        					     <th>Ver detalle</th>
    			     <tbody id="myTable">
    	<?php
        foreach ($datos as $key) {
      $fecha=$key->fechacompra;
  
        $date= strftime("%d de %B del %Y", strtotime($fecha));

          ?>
      					   <tr>
        					     <td><?= $key->id?></td>
        					     <td><?= $date?></td>
        					     <td><?= $key->usuario?></td>
        					     <td><?= $key->total?></td>
        					     <td>
                      <!--Utilizo estos datos para generar el pdf de la factura-->
                          <form action="../Controller/detalle_venta.php" method="post">
                              <input type="hidden" name="usuario" value="<?=$key->usuario?>">
                              <input type="hidden" name="id" value="<?=$key->id?>">
                              <input type="hidden" name="fecha" value="<?=$key->fechacompra?>">
                              <input type="hidden" name="total" value="<?=$key->total?>">
                              <input type="submit" class="btn btn-success" name="enviar" value="Ver Venta">
                          </form>
                      </td>
     					      </tr>
 	 	
  		    <?php } 
          
          
          }else{?>
            <h1>Lo siento, aún no existen datos registrados</h1>
          <?php
          }
  			}
  				?>
 				</tbody>
 				 </table>
  				<?php
  				
            //Compruebo que operacion vale meses
    		if($_REQUEST['operacion']=='meses'){
          if($datos==Null){?>
            <h1>Lo siento, actualmente no existe ventas</h1>
             
    		<?php }else{?>	
  				<table  id="meses" class="table table-bordered">
    				<thead>
      					<tr class="table-primary text-light">
        					<th>Mes</th>
        					<th>Total Mes</th>
                  <th>Ver Ventas</th>
      					</tr>
    				</thead>
    			<tbody id="myTable">
    			<?php

    			foreach ($datos as $key) {?>
      					<tr>
        					<td><?= $key->mes?></td>
        					<!--bcdiv redondeo con dos decimales-->
        					<td><?= bcdiv($key->total_mes,1,2)?></td>
                  <td><a href="../Controller/venta_mes.php?mes=<?=$key->mes?>"><button type="button" class="btn btn-success">Ver Ventas</button></a></td>
     					 </tr>
 	 	
  				<?php 
  				}
  				?>
 				</tbody>
 				 </table>
  
  	<?php
  }//fin del ese de si hay datos
  }//fin compruebo si he recibido meses

        if($_REQUEST['operacion']=='gmensual'){
          if($datos==Null){?>
            <h1>Lo siento, actualmente no existe ventas</h1>
             
        <?php }else{?>  
         <h1 class="titulo">Grafica de Ventas por Meses</h1>
<div class="chart-container" style="position: relative; height:40vh; width:40vw">
    <canvas id="chart1"></canvas>
</div>

<script>
var ctx = document.getElementById("chart1");
var datos = {
        labels: [ 
        <?php foreach($datos as $d):?>
        "<?php echo $d->mes?>", 
        <?php endforeach; ?>
        ],
        datasets: [{
            label: '$ Ventas',
            data: [
        <?php foreach($datos as $d):?>
        <?php echo $d->total_mes;?>, 
        <?php endforeach; ?>
            ],
            backgroundColor: "#3898db",
            borderColor: "#9b59b6",
            borderWidth: 2
        }]
    };
var options = {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    };
var chart1 = new Chart(ctx, {
    type: 'bar', /* valores: line, bar,doughnut,pie*/
    data: datos,
    options: options

});
</script>
<br><br>
<?php
        }//fin del else operaciones igual a gmensual(grafico)
      }//fin del if operacion igual a gmensual
  }else{?>
    <img class="imgVentas" src="../View/img/ventas2.jpg">
  <?php
  }
  ?>
  
  </div>
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