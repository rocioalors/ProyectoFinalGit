<?php 
session_start();


	//Establecemos la fecha
$fecha="#".date("d-m-Y")."#";

//si pulsamos grabar, guardamos los datos en el fichero
if(isset($_REQUEST['enviar'])){
	$file=fopen("../emailRecibidos/email.txt","a");//abrimos el fichero
	fwrite($file, $fecha.PHP_EOL);//guardamos la fecha
	
	fwrite($file,'Nombre:'. $_REQUEST['contact_name'].PHP_EOL);
	fwrite($file,'Email:'.$_REQUEST['contact_email'].PHP_EOL);
	fwrite($file,'Mensaje:'. $_REQUEST['contact_message'].PHP_EOL);
	fwrite($file,PHP_EOL);

	fclose($file);//cerramos el fichero
 
}

include '../View/vUsuFormularioContacto.php'
 ?>