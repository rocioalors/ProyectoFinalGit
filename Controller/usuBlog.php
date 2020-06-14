<?php 
session_start();
require_once '../Model/Comentarios.php';

date_default_timezone_set('Europe/Madrid');
// Unix
setlocale(LC_TIME, 'es_ES.UTF-8');
// En windows
setlocale(LC_TIME, 'spanish');

$fecha=date("Y-m-d");;
if(isset($_REQUEST['enviar'])){
	$ComentarioAux = new Comentarios('',$_SESSION['user'],$fecha,$_REQUEST['comentario']);
	$ComentarioAux->insert();

}
$data['comentarios']=Comentarios::getComentarios();
$registros=sizeof($data['comentarios']);


include '../View/usuBlog.php';
 ?>