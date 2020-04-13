<?php 
require_once '../Model/Usuario.php';

if(!empty($_POST['nombre'])){
	$total=Usuario::getComprobarUsuario($_POST['nombre']);
	if($total>0){
		echo "<span class='estado-no-disponible-usuario'> Ya existe un usuario registrado con ese nombre.</span>";
	}else{
      echo "<span  class='estado-disponible-usuario'> Usuario Disponible.</span>";
	}
 }

if(!empty($_REQUEST['dni'])){
	$total=Usuario::getComprobarDni($_REQUEST['dni']);
	if($total>0){
		echo "<span class='estado-no-disponible-usuario'> Ya existe un usuario registrado con ese DNI.Pruebe a iniciar sesion.</span>";
	}else{
      echo "<span class='estado-disponible-usuario'> Usuario Disponible.</span>";
	}
 }

  if(!empty($_POST['correo'])){
	$correo=Usuario::getComprobarCorreo($_POST['correo']);
	if($correo>0){
		echo "<span class='estado-no-disponible-usuario'> Ya existe un usuario registrado con ese correo.</span>";
	}else{
      echo "<span class='estado-disponible-usuario'> Usuario Disponible.</span>";
	}
 }
