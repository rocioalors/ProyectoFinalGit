<?php 
session_start();
require_once '../Model/Usuario.php';

//Se comprueba que no exista en la base de datos ni el dni, ni el correo ni el nombre de se asi devuelve 0 y no se procede a registrar al usuario.
 
  	$total=Usuario::getComprobarDni($_REQUEST['dni']);
    $totalDos=Usuario::getComprobarCorreo($_REQUEST['correo']);
    $totalTres=Usuario::getComprobarUsuario($_REQUEST['nombre']);
	
		if($total==0 && $totalDos==0 && $totalTres==0){
			

     		$Aux = new Usuario("",$_POST['nombre'],$_POST['dni'],$_POST['correo'],$_POST['direccion'],$_POST['cp'],$_POST['telefono'],$_POST['contraseña']);
  			$Aux->insert();

        //Guardo el nombre del usuario en una variable de sesion
      $usuario=Usuario::getUsuarioByDni($_REQUEST['dni']);
      $_SESSION['user']=$usuario->getNombre();
      $_SESSION['dni']=$usuario->getDni();
      //Si no se ha cerrado sesión con el botón borro lo que haya en las anteriores sesiones realacionadas con la cesta
          if (isset($_SESSION['enCesta'])) {
              $_SESSION['enCesta'] = [];
              $_SESSION['subtotal'] = 0;
              $_SESSION['cantidad'] = 0;
              $_SESSION['envio']=0;
            }
      //Establezco la sesion como usuario para el control de acceso
      $_SESSION['usuario']='usuario';

      //Contabilizo una nueva visita a la web
          if(isset($_COOKIE['contador'])){
            setcookie('contador',$_COOKIE['contador']+1,time()+365*24*60*60);
          }else{
            setcookie('contador',1,time()+365*24*60*60);
          }

        echo '1';
  	 		
		}else{
      echo '0';
			
		}
    
