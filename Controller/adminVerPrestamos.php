<?php 
require_once('../Model/Prestamo.php');
include '../View/JS/funciones.js';
include '../Controller/boostrap.php';

 $data['prestamo']=Prestamo::getPrestamos();
 
 include '../View/vAdminVerPrestamos.php';
 ?>
