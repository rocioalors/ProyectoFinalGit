<?php 
session_start();
require_once '../Model/Usuario.php';

  // inserta el usuario en la base de datos
  $usuarioAux = new Usuario("",$_POST['nombre'],$_POST['dni'],$_POST['correo'],$_POST['direccion'],$_POST['cp'],$_POST['telefono'],$_POST['contraseña']);
  $usuarioAux->insert();
  header("Location: verUsuarios.php");

 ?>