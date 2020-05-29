<?php 
session_start();
//echo $cant;
if(isset($_COOKIE['contador'])){
	setcookie('contador',$_COOKIE['contador']+1,time()+365*24*60*60);
}else{
	setcookie('contador',1,time()+365*24*60*60);
}
 
session_destroy();
echo '1';
 ?>