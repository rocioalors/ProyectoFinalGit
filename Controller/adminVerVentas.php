<?php 
session_start();



if(isset($_SESSION['usuario'])){
	if($_SESSION['usuario']=='administrador'){
		if(!isset($_SESSION['acceso'])){
			header('Location: index.php');
		}else if($_SESSION['acceso']=='ok'){
	

date_default_timezone_set('Europe/Madrid');
// Unix
setlocale(LC_TIME, 'es_ES.UTF-8');
// En windows
setlocale(LC_TIME, 'spanish');


require_once'../Model/Venta.php';
require_once'../Model/Detalle_Venta.php';

if(isset($_REQUEST['operacion'])){
	    
	
  		$consulta=file_get_contents("http://localhost/ProyectoFinalGit/controller/adminConsultas.php?datos=$_GET[operacion]");
  		$datos=json_decode($consulta);
      }
    

//Ver promedio anual
$promedio =Venta::promedio();
$datoUno=round($promedio);

//Usuario que mas ha gastado y cantidad gastada
$masCompra=Venta::usuarioQueMasCompra();

//Total ingresos anuales
$ingresos=Venta::totalIngresos();
$total=round($ingresos);

//Tres libros más vendidos
$ventaAux=Detalle_Venta::tresLibrosMasVendidos();

//Ver grafica trimestral
$trimestre=Venta::ventasTrimestrales();

include'../View/adminGestionVentas.php';
}else{
	header('Location: index.php');
}

}else{
	header('Location: index.php');
}
}