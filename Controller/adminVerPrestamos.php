<?php 
session_start();
if(isset($_SESSION['usuario'])){
	if($_SESSION['usuario']=='administrador'){

require_once('../Model/Prestamo.php');

date_default_timezone_set('Europe/Madrid');
// Unix
setlocale(LC_TIME, 'es_ES.UTF-8');
// En windows
setlocale(LC_TIME, 'spanish');

//Si he recibido algún valor del select
if(isset($_REQUEST['operacion'])){
   //si el valor del select es todos--vemos todos los prestamos
	if($_REQUEST['operacion']=='todos'){
   		 $data['prestamo']=Prestamo::getPrestamos();
	}
   //Si el valor del select es fuera--vemos los prestamos fuera de plazo
	if($_REQUEST['operacion']=='fuera'){
	     $data['fueraPlazo']=Prestamo::getTodosLosFueraPlazo();
    }

}
 $data['prestamo']=Prestamo::getPrestamos();

 
 
 include '../View/vAdminVerPrestamos.php';
}else{
	 header('Location: index.php');
}

}
 ?>
