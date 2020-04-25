<?php 
session_start();
require_once ('../Model/Libro.php');
require_once ('../Model/Venta.php');
require_once ('../Model/Detalle_Venta.php');

//Creo un objeto libro();
$librito=new Libro();
//Establezco la Fecha Actual
$fechaactual=date("Y-m-d");
//Registro la venta en la tabla Venta
$ventaAux=new Venta("",$fechaactual,$_SESSION['user'],$_SESSION['total']);
$ventaAux->insert();
//Guardo el id de la última venta realizada
$ventaAux=new Venta();
$ultimoId=$ventaAux->prueba();
$id=$ultimoId->getId();
 

foreach ($_SESSION['enCesta'] as $libro => $cantidad) {
	
  $detalle=new Detalle_Venta($id,$libro,$cantidad);
  $detalle->insert();
  $librito->comprar($libro,$cantidad);
}

/*$ventaAux=new Venta("",$fechaactual,$_SESSION['user'],$_SESSION['total']);
$ventaAux->insert();*/
/*print_r($librito);
echo "<br>";
echo $_SESSION['user']."<br>";
echo "cantidad ".$_SESSION['cantidad']."<br>";
print_r($_SESSION['enCesta']);*/



 ?>