<?php 
session_start();
require_once'../Model/Prestamo.php';
require_once'../Model/Libro.php';

//Comprobamos el número de préstamos que tiene el usuario

 $data['prestamos']=Prestamo::getPrestamoByUsuario($_SESSION['user']);

//Si el usuario tiene 2 préstamos activos le mostramos el mensaje de que no puede alquilar más
 if(sizeof($data['prestamos'])>=2){
 	echo 'Lo siento, no se puede tener más de dos préstamos activos';
 }else{

//Comprobamos si el usuario ya tiene alquilado ese libro
	$prestamo=Prestamo::getPrestamoByUsuarioById($_REQUEST['id'],$_SESSION['user']);
    if(sizeof($prestamo)==1){
    	echo 'Ya dispones de ese libro entre tus préstamos activos';
    }else{
 
		//COMPROBAMOS LA DISPONIBILIDAD DEL LIBRO 
  
		$libro=Libro::getLibroById($_REQUEST['id']);

			if($libro->getcantidadalquiler()>0){
			 	//ESTABLECEMOS LAS FECHAS
 					$fechaactual=date("Y-m-d");
 					$fechadevolucion=date("Y-m-d",strtotime($fechaactual."+ 15 days"));

					//INSERTAMOS UN REGISTRO EN LA TABLA PRESTAMO
 					$prestamo=new Prestamo("",$fechaactual,$fechadevolucion,$_REQUEST['id'],$_REQUEST['titulo'],$_SESSION['user']);
 					$prestamo->insert();

					//QUITAMOS UN EJEMPLAR DE LA CANTIDAD A PRESTAR DE LA TABLA LIBRO
 					$libro->prestar($_REQUEST['id']);
				
					 echo 'Préstamo realizado correctamente. Puede consultar sus préstamos activos en Mi Pefil';
			}
	}
}

 ?>