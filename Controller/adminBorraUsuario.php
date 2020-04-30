<?php 
session_start();
require_once '../Model/Usuario.php';
require_once '../Model/Prestamo.php';
//Borro todos los prestamos que existan activos de ese usuario...No añado los libros al stock ya que esto será un caso excepcional porque no devuelva los libros.

$prestamoAux=new Prestamo($_REQUEST['nombre']);
$prestamoAux->BorrarPorUsuario($_REQUEST['nombre']);

//Borro el usuario con ese id
$usuarioAux=new Usuario($_REQUEST['id']);
$usuarioAux->delete();

header("Location:verUsuarios.php");
 ?>