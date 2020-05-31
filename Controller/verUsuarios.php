<?php 
session_start();
require_once('../Model/Usuario.php');



 $data['usuarios']=Usuario::getUsuario();


 include '../View/boostrap.php';
 include '../View/vAdminListadoUsuario.php';
 ?>
