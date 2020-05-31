<?php 
session_start();

if($_SESSION['acceso']!='ok'){
 header('Location:index.php');
}else{
date_default_timezone_set('Europe/Madrid');
// Unix
setlocale(LC_TIME, 'es_ES.UTF-8');
// En windows
setlocale(LC_TIME, 'spanish');

$total=0;

require_once'../Model/Venta.php';
require_once'../Model/Detalle_Venta.php';

if(isset($_REQUEST['operacion'])){
	    
	
  		$consulta=file_get_contents("http://localhost/ProyectoFinalGit/controller/adminConsultas.php?datos=$_GET[operacion]");
  		$datos=json_decode($consulta);
  		if($_REQUEST['operacion']=='todas'){
  			foreach ($datos as $key) {
				$total+=$key->total;
  		}
      }
    
}
include'../View/boostrap.php';
include'../View/adminGestionVentas.php';

}
 ?>