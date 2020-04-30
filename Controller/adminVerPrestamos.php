<?php 
session_start();
require_once('../Model/Prestamo.php');
include '../View/JS/funciones.js';
include '../Controller/boostrap.php';
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
 ?>
