<?php 
session_start();
if(isset($_SESSION['usuario'])){
	if($_SESSION['usuario']=='usuario'){
		//Si he recibido un cupón descuento
$_SESSION['contador']=0;

   if(isset($_REQUEST['descuento'])){
   	if(isset($_COOKIE['token'])){
   	if($_SESSION['contador']==0){
      if($_REQUEST['descuento']==$_COOKIE['token']){
        $_SESSION['total']=round($_SESSION['subtotal']-($_SESSION['subtotal']*($_COOKIE['descuento']/100))+$_SESSION['envio'],2);
        $_SESSION['contador']=1;
      }
  }
      }else{
        $_SESSION['total']=$_SESSION['subtotal']+$_SESSION['envio'];
      }
    }

 include '../View/usuRealizarPago.php';
}else{
	 header('Location: index.php');
}
}
 ?>