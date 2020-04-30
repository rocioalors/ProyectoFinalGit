<?php 
session_start();
require_once('../Model/Usuario.php');
include '../Controller/boostrap.php';
include '../View/JS/funciones.js';

 
 $data['usuarios']=Usuario::getUsuario();
 
 include '../View/vAdminListadoUsuario.php';
 ?>
