<?php   
   session_start();
   require_once '../Model/Usuario.php';

if($_REQUEST['contraseñaActual']=='' || $_REQUEST['nuevaContraseña']==''||$_REQUEST['repetirContraseña']==''){
	
	echo '<span style="font-weight:bold;color: red;">Debe rellenar todos los campos</span>';
}else{
   $total=Usuario::getComprobar($_REQUEST['dni'],$_REQUEST['contraseñaActual']);
   if($total>0){
   		if($_REQUEST['nuevaContraseña']==$_REQUEST['repetirContraseña']){
   			$usuario=new Usuario($_REQUEST['dni']);
   			$usuario->cambiarContraseña($_REQUEST['dni'],$_REQUEST['nuevaContraseña']);
   			echo '<span style="font-weight:bold;color: green;">CONTRASEÑA CAMBIADA</span>';
   		}else{
   			echo '<span style="font-weight:bold;color: red;">Las contraseñas no coinciden</span>';
   		}
   }else{
   	echo '<span style="font-weight:bold;color: red;">Contraseña actual es incorrecta</span>';
   }
 }
?>