<?php 
session_start();
require_once('../Model/Administrador.php');
include '../View/JS/funciones.js';
include '../Controller/boostrap.php';

 $data['administradores']=Administrador::getAdministrador();
 
 include '../View/vAdminVerAdministradores.php';
 ?>