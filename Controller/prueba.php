
<?php 
require_once '../Model/Venta.php';
require_once '../Model/Detalle_Venta.php';
require_once '../Model/Libro.php';

/*$Ventaaux=Detalle_Venta::tresLibrosMasVendidos();
//$datos=json_decode($Ventaaux);
print_r($Ventaaux);

echo '<br><br>';
foreach ($Ventaaux as $key => $value) {
	
	echo $value['id_libro'].' tiene '.$value['cantidad'].'<br>';

}
echo '<br><br>';
$id=1;
$ventas=Detalle_Venta::detalleVenta($id);
print_r($ventas);


echo '<br><br>';

$ventaMes=Venta::mesDeterminado(4);
if($ventaMes==Null){
	echo 'no';
}
print_r($ventaMes);
foreach ($ventaMes as $key) {
	echo $key->getId().'<br>';
	echo $key->getUsuario().'<br>';
	echo $key->getfechacompra().'<br>';

}*/
$data=Venta::meses();
$datos=json_decode($data);
/*foreach ($datos as $key) {
	echo $key->mes;
}*/
?>
<!DOCTYPE html>
<html>
<head>
    <title>Grafica de Barra y Lineas con PHP y MySQL</title>
    <script src="chart.min.js"></script>
</head>
<body>
<h1>Grafica de Barra y Lineas con PHP y MySQL</h1>
<canvas id="chart1" style="width:100%;" height="100"></canvas>
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
    type: 'bar', /* valores: line, bar*/
    data: datos,
    options: options
});
</script>
</body>
</html>