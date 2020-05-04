<?php 
session_start();
require_once '../Model/Usuario.php';


  if($_REQUEST['nombre']==''||$_REQUEST['dni']==''||$_REQUEST['correo']==''||$_REQUEST['direccion']==''||$_REQUEST['cp']==''||$_REQUEST['telefono']==''|| $_REQUEST['contraseña']==''){
  	echo '<span style="font-weight:bold;color: red;">Debe rellenar todos los campos</span>';
  }else{
  	$total=Usuario::getComprobarDni($_REQUEST['dni']);
    $totalDos=Usuario::getComprobarCorreo($_REQUEST['correo']);
    $totalTres=Usuario::getComprobarUsuario($_REQUEST['nombre']);
	
		if($total==0 && $totalDos==0 && $totalTres==0){
			

     		$Aux = new Usuario("",$_POST['nombre'],$_POST['dni'],$_POST['correo'],$_POST['direccion'],$_POST['cp'],$_POST['telefono'],$_POST['contraseña']);
  			$Aux->insert();

        //Guardo el nombre del usuari en una variable de sesion
      $usuario=Usuario::getUsuarioByDni($_REQUEST['dni']);
      $_SESSION['user']=$usuario->getNombre();
      $_SESSION['dni']=$usuario->getDni();
  	 		echo '<script>location.href = "principalUsuario.php"</script>';
		}else{
			echo '<span style="font-weight:bold;color: red;">Alguno de los datos introducidos son erróneos. Pruebe de nuevo o inicie sesión</span>';
		}
    }
