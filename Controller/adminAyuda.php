<?php 
session_start();

if(isset($_REQUEST['file'])){
//Codigo para descargarnos el pdf del Manual de ayuda.
if(!empty($_GET['file'])){
    $fileName = basename($_GET['file']);
    $filePath = '../ficherosAyuda/'.$fileName;
    if(!empty($fileName) && file_exists($filePath)){
        // Define headers
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$fileName");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");
        
        // Read the file
        readfile($filePath);
        exit;
    }
}
}



include '../View/vAdminAyuda.php';

 ?>