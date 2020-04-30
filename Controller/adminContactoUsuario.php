<?php 
session_start();
require_once '../Model/Usuario.php';
include 'boostrap.php';
 
 $usuAux=new Usuario($_REQUEST['usuario']);

 $usuAux=Usuario::getUsuarioByNombre($_REQUEST['usuario']);

 include '../View/adminVerContacto.php';

 ?>