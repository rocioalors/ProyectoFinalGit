<?php 
require_once '../Model/Usuario.php';
$usuarioAux=new Usuario($_REQUEST['id']);
$usuarioAux->delete();
header("Location:verUsuarios.php");
 ?>