<?php 
include '../Model/Usuario.php';
$total=Usuario::getComprobarDni($_REQUEST['dni']);
$totalDos=Usuario::getComprobarCorreo($_REQUEST['correo']);
$totalTres=Usuario::getComprobarUsuario($_REQUEST['nombre']);
	if($total==0 && $totalDos==0 && $totalTres==0){
     $Aux = new Usuario("",$_POST['nombre'],$_POST['dni'],$_POST['correo'],$_POST['direccion'],$_POST['telefono'],$_POST['contraseña']);
  	$Aux->insert();
  	 echo '<script>location.href = "principalUsuario.php"</script>';
	}else{
		echo '<span style="font-weight:bold;color: red;">Usuario, dni o correo ya registrado. Inicie sesion o pruebe de nuevo</span>';
	}
 ?>