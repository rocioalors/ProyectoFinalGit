<?php 
session_start();
require_once('../Model/Usuario.php');
include '../Controller/boostrap.php';


 $data['usuarios']=Usuario::getUsuario();
 
 include '../View/vAdminListadoUsuario.php';
 ?>
