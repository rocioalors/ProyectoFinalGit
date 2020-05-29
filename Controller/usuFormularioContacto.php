<?php 
session_start();


	//Establecemos la fecha
$fecha="#".date("d-m-Y")."#";


//si pulsamos grabar, guardamos los datos en el fichero
if(isset($_REQUEST['enviar'])){
//Comprobamos que no exista la fecha actual en el fichero
	$pagina = file_get_contents('../emailRecibidos/email.txt');
	//Guardamos la pos si la hemos encontrado
    $pos = strpos($pagina, $fecha);



	$file=fopen("../emailRecibidos/email.txt","a");//abrimos el fichero

	if ($pos === false) {
	fwrite($file, $fecha.PHP_EOL);//guardamos la fecha
	}
	fwrite($file,$_REQUEST['contact_name'].'-'.$_REQUEST['contact_email'].'-'.$_REQUEST['contact_message'].PHP_EOL);

	fclose($file);//cerramos el fichero
 
}

include '../View/vUsuFormularioContacto.php'
 ?>