<?php
session_start();
if(isset($_SESSION['usuario'])){
    if($_SESSION['usuario']=='usuario'){

require_once '../Model/Libro.php';

if (isset($_GET['quitapro'])) {
    $prod = $_GET['quitapro'];
    $libroAux=Libro::getLibroById($prod);
    $_SESSION['enCesta'][$prod]--;
    if ($_SESSION['enCesta'][$prod]==0) {
        unset($_SESSION['enCesta'][$prod]);
    }
    $_SESSION['cantidad']--;

     if($_SESSION['cantidad']==0){
    	$_SESSION['subtotal']=0;
    }else{
    $_SESSION['subtotal'] -= $libroAux->getPrecio();
    }
 
}
header('Location:verContenidoCesta.php');
}else{
     header('Location: index.php');
 }
 }