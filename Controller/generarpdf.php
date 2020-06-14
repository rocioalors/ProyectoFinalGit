
<?php 
require_once '../Model/Venta.php';
require_once '../Model/Detalle_Venta.php';
require_once '../Model/Usuario.php';
require_once '../View/pdf/fpdf.php';

date_default_timezone_set('Europe/Madrid');
// Unix
setlocale(LC_TIME, 'es_ES.UTF-8');
// En windows
setlocale(LC_TIME, 'spanish');

  
$date= strftime("%d de %B del %Y", strtotime($_REQUEST['fecha']));

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
$pdf->SetFont('Arial','B',10);

// Imprimimos el logo a 300 ppp
$pdf->Image('../View/img/Logo.png',60,20,-300);
$pdf->setY(20);$pdf->setX(80);
$pdf->Cell(10,20,"THE CORNER OF DREAMS"); 
$textypos = 20;//margen
$pdf->setY(12);
$pdf->setX(10);
// Agregamos los datos de la empresa
  
$pdf->setY(45);$pdf->setX(20);
$pdf->Cell(5,$textypos,"DE:");
$pdf->SetFont('Arial','',10);    
$pdf->setY(50);$pdf->setX(20);
$pdf->Cell(5,$textypos,"The Corner Of Dreams");
$pdf->setY(55);$pdf->setX(20);
$pdf->Cell(5,$textypos,"47394439H");
$pdf->setY(60);$pdf->setX(20);
$pdf->Cell(5,$textypos,"C/ Judea, 6 - 41710, Utrera");
$pdf->setY(65);$pdf->setX(20);
$pdf->Cell(5,$textypos,"626278473");
$pdf->setY(70);$pdf->setX(20);
$pdf->Cell(5,$textypos,"thecornerofdreams@gmail.com");



// Agregamos los datos del cliente
$pdf->SetFont('Arial','B',10);    
$pdf->setY(45);$pdf->setX(135);
$pdf->Cell(5,$textypos,"PARA:");
$pdf->SetFont('Arial','',10);    
$pdf->setY(50);$pdf->setX(135);
$pdf->Cell(5,$textypos,utf8_decode($usuario->getNombre()));
$pdf->setY(55);$pdf->setX(135);
$pdf->Cell(5,$textypos,$usuario->getDni());
$pdf->setY(60);$pdf->setX(135);
$pdf->Cell(5,$textypos,utf8_decode($usuario->getDireccion()),$usuario->getCp());
$pdf->setY(65);$pdf->setX(135);
$pdf->Cell(5,$textypos,$usuario->getTelefono());
$pdf->setY(70);$pdf->setX(135);
$pdf->Cell(5,$textypos,$usuario->getCorreo());


/* Otra forma de hacerlo con border
$texto1="Cliente: ".$usuario->getNombre()."\nDireccion: ".$usuario->getDireccion()."\nCP: ".$usuario->getCp()."\nNIF: ".$usuario->getDni()."\n";
$pdf->SetXY(25, 50);
$pdf->MultiCell(90,10,$texto1,1,"L");*/

// 2º Datos de la factura (fecha y numero de factura)
$texto2=utf8_decode("Factura número: ").$_REQUEST['id_venta']." de ".$date;
$pdf->SetXY(25, 95);
$pdf->Cell(150,10,$texto2,0,0,"C");

// 3º Una tabla con los articulos comprados

// La cabecera de la tabla (en azulito sobre fondo rojo)

$pdf->SetXY(20, 120);//indice el ancho de la fila empieza en 20 para dar margen y termina en 120
$pdf->SetFillColor(255,0,0);
//$pdf->SetTextColor(0,255,255);
$pdf->Cell(10,10,"Id",1,0,"C",true);//los primeros dos número indica el ancho de la celada, el 0 sin margen(1 margen), o sin espacio o 1 con espacio
$pdf->Cell(90,10,utf8_decode("Título"),1,0,"C",true);
$pdf->Cell(20,10,utf8_decode("Precio/Ud"),1,0,"C",true);
$pdf->Cell(20,10,"Cant.",1,0,"C",true);
$pdf->Cell(20,10,"Total",1,1,"C",true);
$total=0;

// Los datos (en negro)
$pdf->SetTextColor(0,0,0);

foreach ($ventas as $key ) {
$pdf->SetX(20,120);
$pdf->Cell(10,10,$key['id_libro'],1,0,"C");
$pdf->Cell(90,10,utf8_decode($key['titulo']),1,0,"C");
$pdf->Cell(20,10,number_format($key['precio'],2),1,0,"C");
$pdf->Cell(20,10,$key['cantidad'],1,0,"C");
$pdf->Cell(20,10,number_format($key['cantidad']*$key['precio'],2),1,1,"R");

}
//4º Los totales, IVAs y demás
$pdf->SetX(120);
$pdf->Cell(40,10,"Gastos de envio:",1,0,"C");
$pdf->Cell(20,10,number_format($envio,2),1,1,"R");
$pdf->SetX(120);
//Calcular el iva
$pdf->SetX(120);
$pdf->Cell(40,10,"IVA (4%): ",1,0,"C");
$pdf->Cell(20,10,number_format(0.04*$_REQUEST['total'],2),1,1,"R");
$pdf->SetX(120);
$pdf->Cell(40,10,"Total:",1,0,"C");
$pdf->Cell(20,10,number_format($_REQUEST['total'],2),1,1,"R");


//TERMINOS Y CONDICIONES
$pdf->SetXY(20, 240);
$pdf->Cell(5,$textypos,"TERMINOS Y CONDICIONES");
$pdf->SetXY(20, 245);
$pdf->Cell(10,$textypos,utf8_decode("Este documento contiene todos los Términos y Condiciones de Uso aplicables a la contratación."));

$pdf->SetXY(20, 250);
$pdf->Cell(10,$textypos,"The Corner Of Dreams");


// El documento enviado al navegador
$pdf->Output();
?>