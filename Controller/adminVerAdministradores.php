<?php 
session_start();
require_once('../Model/Administrador.php');

include 'boostrap.php';

 $data['administradores']=Administrador::getAdministrador();
 
 include '../View/vAdminVerAdministradores.php';
 ?>