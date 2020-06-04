<?php 
session_start();
//echo $_GET['file'];
if(isset($_REQUEST['file'])){
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
include '../View/vUsuAyuda.php';


 ?>