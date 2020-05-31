<?php 
session_start();
require_once('../Model/Administrador.php');



 $data['administradores']=Administrador::getAdministrador();


 include '../View/boostrap.php';
 include '../View/vAdminVerAdministradores.php';
 ?>