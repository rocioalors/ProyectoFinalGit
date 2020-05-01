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
	    
	
  		$consulta=file_get_contents("http://localhost/ProyectoFinalGit/controller/adminConsultas.php?datos=$_GET[operacion]");
  		$datos=json_decode($consulta);
  		if($_REQUEST['operacion']=='todas'){
  			foreach ($datos as $key) {
				$total+=$key->total;
  		}
      }
    
}
include'../View/adminGestionVentas.php';

}
 ?>