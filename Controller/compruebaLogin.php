<?php 
session_start();

require_once '../Model/Usuario.php';

if(isset($_REQUEST['user']) && isset($_REQUEST['pass'])){
	
   $_SESSION['dni']=$_REQUEST['user'];
   $_SESSION['pass']=$_REQUEST['pass'];

	if($_REQUEST['user']=='47394439h' && $_REQUEST['pass']=='1234'){
		echo '<script>location.href = "principalAdmin.php"</script>';
	}else{

       //header('Location:compruebaLogin.php');
		$total=Usuario::getComprobar($_SESSION['dni'],$_SESSION['pass']);
	if($total>0){
		$usuario=Usuario::getUsuarioByDni($_SESSION['dni']);
		$_SESSION['user']=$usuario->getNombre();
	 echo '<script>location.href = "principalUsuario.php"</script>';
}else{
		echo '<span style="font-weight:bold;color: red;">Usuario o contraseña incorrecto</span>';
}
}
}

 ?>