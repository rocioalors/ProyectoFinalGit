<?php 
session_start();
require_once '../Model/Usuario.php';

 
 $usuAux=new Usuario($_REQUEST['usuario']);

 $usuAux=Usuario::getUsuarioByNombre($_REQUEST['usuario']);


 include '../View/boostrap.php';

 include '../View/adminVerContacto.php';

 ?>