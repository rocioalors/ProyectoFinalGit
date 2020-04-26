<?php 
include'../Model/Usuario.php';

 $usuarioAux = new Usuario($_POST['id'], $_POST['nombre'],$_POST['dni'],$_POST['correo'],$_POST['direccion'],$_POST['cp'],$_POST['telefono'],$_POST['contraseña']);
 $usuarioAux->update();

 header("location: verUsuarios.php");
 ?>