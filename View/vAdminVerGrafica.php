<!DOCTYPE html>
<html>
<head>
    <title>Grafica de Ventas por Meses</title>
    <link rel="stylesheet" type="text/css" href="../View/css/estiloFormulario.css">
    <script src="../View/JS/chart.min.js"></script>
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



<div class="container">
<br>
<h1>Grafica de Ventas por Meses</h1>
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
<a href="../Controller/adminVerVentas.php">Volver</a>
</div>
</body>
</html>