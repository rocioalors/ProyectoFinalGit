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
	//Sesión establecida para controlar los accesos.
					$_SESSION['usuario']='usuario';
	//Si no se ha cerrado sesión con el botón borro lo que haya en las anteriores sesiones realacionadas con la cesta
					if (isset($_SESSION['enCesta'])) {
    					$_SESSION['enCesta'] = [];
    					$_SESSION['subtotal'] = 0;
    					$_SESSION['cantidad'] = 0;
    					$_SESSION['envio']=0;
						}
	//Contabilizo una nueva visita a la web
	                if(isset($_COOKIE['contador'])){
						setcookie('contador',$_COOKIE['contador']+1,time()+365*24*60*60);
					}else{
						setcookie('contador',1,time()+365*24*60*60);
					}
	//mando info para que con ajax me dirija a la pag principal de usuario
					echo '0';
	 				
	//Compruebo entonces si es administrador
				}else{
					$total=Administrador::getComprobar($_SESSION['dni'],$_SESSION['pass']);
						if($total>0){
                        $usuario=Administrador::getAdministradorByDni($_SESSION['dni']);
						$_SESSION['user']=$usuario->getUsuario();
						//Sesión establecida para controlar los accesos
						$_SESSION['usuario']='administrador';
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