<?php 
session_start();
if($_SESSION['acceso']!='ok'){
 header('Location:index.php');
}else{
$total=0;
include'boostrap.php';
require_once'../Model/Venta.php';
require_once'../Model/Detalle_Venta.php';

if(isset($_REQUEST['operacion'])){
	    
	
  		$datos=file_get_contents("http://localhost/ProyectoFinalGit/controller/adminConsultas.php?datos=$_GET[operacion]");
  		$var=json_decode($datos);
  		if($_REQUEST['operacion']=='todas'){
  			foreach ($var as $key) {
				$total+=$key->total;
  		}
      }
    
}
include'../View/adminGestionVentas.php';

}
 ?>