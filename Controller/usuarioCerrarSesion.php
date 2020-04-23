<?php 

session_destroy();
setcookie("cantidad", NULL, -1);
setcookie("total", NULL, -1);
setcookie("cesta", NULL, -1);

header('Location:index.php');
 ?>