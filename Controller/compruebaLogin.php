<?php 
session_start();

require_once '../Model/Usuario.php';
require_once '../Model/Administrador.php';

if(isset($_REQUEST['user']) && isset($_REQUEST['pass'])){
  
    $_SESSION['dni']=$_REQUEST['user'];
   	$_SESSION['pass']=$_REQUEST['pass'];
   	//Compruebo si el perfil es usuario
	    $total=Usuario::getComprobar($_SESSION['dni'],$_SESSION['pass']);
				if($total>0){
					$usuario=Usuario::getUsuarioByDni($_SESSION['dni']);
					$_SESSION['user']=$usuario->getNombre();
					echo '0';
	 				
	//Compruebo entonces si es administrador
				}else{
					$total=Administrador::getComprobar($_SESSION['dni'],$_SESSION['pass']);
						if($total>0){
                        $usuario=Administrador::getAdministradorByDni($_SESSION['dni']);
						$_SESSION['user']=$usuario->getUsuario();
						echo '1';
	 					
	 //Si no se ha encontrado registro de usuario y contraseña muestro mensaje de error

	 					}else{
	 						echo '2';
	 						
	 					}
				}
	//Si no se recibe algún dato muestro mensaje de error			
		}else{
			echo '2';
  	
  }




 ?>