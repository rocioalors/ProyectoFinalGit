<?php 
session_start();
include'../Model/Prestamo.php';
include'../Model/Libro.php';
 /*$data['prestamo']=Prestamo::getFueraPlazo($_SESSION['user']);
 print_r($data['prestamo']);
 if(sizeof($data['prestamo'])>0){
 	echo 'tiene prestamos';
 }else{
 	echo 'no tiene prestamos';
 }*/


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
 header ('location:usuarioVerCatalago.php');
}

 ?>