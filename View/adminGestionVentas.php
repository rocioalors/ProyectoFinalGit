<!DOCTYPE html>
<html>
<head>
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

<!--Estilo personalizado-->
<link rel="stylesheet" href="../View/css/estilos.css">
   <!--DATATABLES-->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.js"></script>
   <!--script necesario para ver la gráfica-->
<script src="../View/JS/chart.min.js"></script>
<!--Funciones-->
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
            <a href="../Controller/adminAyuda.php" class="nav-item nav-link">Ayuda</a>
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
      <option value="gmensual">Graficos e información general</option>
      <option value="meses">Agrupar ventas por meses</option>
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
   
  		
  				  	
            <div>
  				    <table id="example"   data-page-length='10'class="table table-bordered">
    				    <thead>
      					   <tr class="table-primary text-light">
        					     <th>id</th>
        					     <th>Fecha Compra</th>
        					     <th>Usuario</th>
        					     <th>Total</th>
        					     <th>Ver detalle</th>
                       <th>Descargar Fra.</th>
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
                      <!--para ver el detalle-->
                          <form action="../Controller/detalle_venta.php" method="post">
                              <input type="hidden" name="usuario" value="<?=$key->usuario?>">
                              <input type="hidden" name="id" value="<?=$key->id?>">
                              <input type="hidden" name="fecha" value="<?=$key->fechacompra?>">
                              <input type="hidden" name="total" value="<?=$key->total?>">
                              <input type="submit" class="btn btn-success" name="enviar" value="Ver Venta">
                          </form>
                      </td>
                      <!--Para descargar el pdf-->
                       <td><form action="../Controller/generarpdf.php" method="post">
                              <input type="hidden" name="usuario" value="<?=$key->usuario?>">
                              <input type="hidden" name="id_venta" value="<?=$key->id?>">
                              <input type="hidden" name="fecha" value="<?=$key->fechaCompra?>">
                              <input type="hidden" name="total" value="<?=$key->total?>">
                              <input type="submit" class="btn btn-info" name="enviar" value="Generar PDF">
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

    			foreach ($datos as $key) {
           //Traducir el nombre del mes al español
            $fecha=$key->mes;
            $mes= strftime("%B", strtotime($fecha));

            ?>
      					<tr>
        					<td><?= $mes?></td>
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
<div class="row">
  <div class="col-md-6">
         <h1 class="titulo">Gráfica de Ventas por Meses</h1>
             <div class="chart-container">
                 <canvas id="chart1"></canvas>
             </div>

<script>
var ctx = document.getElementById("chart1");
var datos = {
        labels: [ 
        <?php foreach($datos as $d):
          //Traduce el nombre del mes al español
           $fecha=$d->mes;
          $mes= strftime("%B", strtotime($fecha));
          ?>
        "<?php echo $mes?>", 
        <?php endforeach; ?>
        ],
        datasets: [{
            label: '$ Ventas',
            data: [
        <?php foreach($datos as $d):?>
        <?php echo round($d->total_mes);?>, 
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
</div>
<div class="col-md-6">
<h1 class="titulo">Gráfica Trimestral</h1>
  <div class="chart-container">
      <canvas id="grafico"></canvas>
  </div>
<script>
var ctx = document.getElementById("grafico");
var datos = {
        labels: [ 
        <?php foreach($trimestre as $d):?>
        "<?php echo $d['trimestre']?>", 
        <?php endforeach; ?>
        ],
        datasets: [{
            label: '$ Ventas por trimestre',
            data: [
        <?php foreach($trimestre as $d):?>
        <?php echo round($d['total']);?>, 
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
</div>

</div>
  <!--Div en el que muestro información de las ventas-->
  <h1 class="titulo">Infomación General Sobre Ventas</h1>
    <div class="card-deck" id="datos">
        <div class="card ">
          <div class="card-header bg-primary text-white">TOTAL ANUAL DE INGRESOS</div>
          <div class="card-body text-white bg-info">
              <p class="card-text" id="totales"><?=$total?> €</p>
          </div>
        </div>
        <div class="card">
          <div class="card-header bg-primary text-white">PROMEDIO DE COMPRA</div>
          <div class="card-body text-white bg-info">
             <p class="card-text" id="totales"><?=$datoUno?> €</p>
          </div>
        </div>
         <div class="card">
          <div class="card-header bg-primary text-white">USUARIO QUE MÁS HA COMPRADO</div>
          <div class="card-body text-white bg-info">
            <p class="card-text" id="totales"> <?=$masCompra[0]['usuario']?>, <?=round($masCompra[0]['total'])?> € </p>
         </div>
        </div>
        <div class="card">
          <div class="card-header bg-primary text-white">LIBROS MÁS VENDIDOS </div>
          <div class="card-body text-white bg-info">
           <?php foreach ($ventaAux as $key) {?>
            <p class="card-text" id="libro"><?=$key['titulo']?>, <?=$key['cantidad']?> Uds</p>
           <?php
         }?>
            
         </div>
        </div>
       
</div>

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