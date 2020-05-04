
<?php 
require_once '../Model/Venta.php';
require_once '../Model/Detalle_Venta.php';
require_once '../Model/Usuario.php';
require_once '../View/pdf/fpdf.php';

$ventas=Detalle_Venta::detalleVenta($_REQUEST['id_venta']);
$usuario=Usuario::getUsuarioByNombre($_REQUEST['usuario']);

$envio=0;
if(isset($_REQUEST['total'])){
  if($_REQUEST['total']<19){
  $envio=2.95;
}
}


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

// Imprimimos el logo a 300 ppp
$pdf->Image('../View/img/Logo.png',10,10,-300);




// 1º Datos del cliente
$texto1="Cliente: ".$usuario->getNombre()."\nDireccion: ".$usuario->getDireccion()."\nCP: ".$usuario->getCp()."\nNIF: ".$usuario->getDni()."\n";
$pdf->SetXY(25, 50);
$pdf->MultiCell(90,10,$texto1,1,"L");

// 2º Datos de la factura (fecha y numero de factura)
$texto2="Factura número: ".$_REQUEST['id_venta']." de fecha: ".$_REQUEST['fecha'];
$pdf->SetXY(25, 95);
$pdf->Cell(150,10,$texto2,0,0,"C");

// 3º Una tabla con los articulos comprados

// La cabecera de la tabla (en azulito sobre fondo rojo)
$pdf->SetXY(20, 120);
$pdf->SetFillColor(255,0,0);
$pdf->SetTextColor(0,255,255);
$pdf->Cell(10,10,"Id",1,0,"C",true);
$pdf->Cell(90,10,"Titulo",1,0,"C",true);
$pdf->Cell(20,10,"€/Ud",1,0,"C",true);
$pdf->Cell(20,10,"Cant.",1,0,"C",true);
$pdf->Cell(20,10,"Total",1,1,"C",true);
$total=0;

// Los datos (en negro)
$pdf->SetTextColor(0,0,0);

foreach ($ventas as $key ) {
$pdf->SetX(20,120);
$pdf->Cell(10,10,$key['id_libro'],1,0,"L");
$pdf->Cell(90,10,$key['titulo'],1,0,"C");
$pdf->Cell(20,10,number_format($key['precio'],2),1,0,"C");
$pdf->Cell(20,10,$key['cantidad'],1,0,"C");
$pdf->Cell(20,10,number_format($key['cantidad']*$key['precio'],2),1,1,"R");

}
//4º Los totales, IVAs y demás
$pdf->SetX(110);
$pdf->Cell(50,10,"Gastos de envio:",1,0,"C");
$pdf->Cell(20,10,number_format($envio,2),1,1,"R");
$pdf->SetX(120);
//Calcular el iva
$pdf->SetX(110);
$pdf->Cell(50,10,"IVA (4%): ",1,0,"C");
$pdf->Cell(20,10,number_format(0.04*$envio,2),1,1,"R");
$pdf->SetX(110);
$pdf->Cell(50,10,"Total:",1,0,"C");
$pdf->Cell(20,10,number_format($_REQUEST['total'],2),1,1,"R");

// El documento enviado al navegador
$pdf->Output();
?>