<?php 
session_start();
require_once '../Model/Comentarios.php';
$fecha=date("Y-m-d");;
if(isset($_REQUEST['enviar'])){
	$ComentarioAux = new Comentarios('',$_SESSION['user'],$fecha,$_REQUEST['comentario']);
	$ComentarioAux->insert();

}
$comentarios=Comentarios::getComentarios();
$registros=sizeof($comentarios);


include '../View/usuBlog.php';
 ?>