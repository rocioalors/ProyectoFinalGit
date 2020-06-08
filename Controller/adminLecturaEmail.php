<?php 
session_start();
if(isset($_SESSION['usuario'])){
  if($_SESSION['usuario']=='administrador'){

//Creamos el array de los email

if(!isset($_SESSION['emails'])){
	$_SESSION['emails']=[];
}

if(file_exists('../emailRecibidos/email.txt')){
//Creamos el array de las fechas
$fecha=[];

$archivo = fopen ("../emailRecibidos/email.txt", "r");
$linea=trim(fgets($archivo));//Inicializamos la linea

while(!feof($archivo)){//mientras no sea el final del archivo vamos leyendo lineas
	if(substr($linea,0,1)=="#"){
		$fechaProvisional=substr($linea,1,-1); //guardamos el el array las fechas solo sin las almohadillas de delante.
		//Guardamos las fechas sin repetir
		if(!in_array($fechaProvisional, $fecha)){
			$fecha[]=$fechaProvisional;
		}
	}
	$linea=trim(fgets($archivo)); //vamos leyendo filas
}
fclose($archivo);

//print_r($fecha);


//Muestro el número de filas y de caracteres que tiene el fichero

//inicializo una variable para llevar la cuenta de las líneas y los caracteres
$num_lineas = 0;
$caracteres = 0;

//Hago un bucle para recorrer el archivo línea a línea hasta el final del archivo
$file = fopen ("../emailRecibidos/email.txt", "r");
while (!feof ($file)) {
    //si extraigo una línea del archivo y no es false
    if ($linea = fgets($file)){
       //acumulo una en la variable número de líneas
       $num_lineas++;
       //acumulo el número de caracteres de esta línea
       $caracteres += strlen($linea);
    }
}
fclose ($file);
/*echo "
Líneas: " . $num_lineas;
echo "
Caracteres: " . $caracteres;*/



//muestro el contenido los email recibido en funcion de la fecha a buscar

if(isset($_REQUEST['consultar'])){
	//Borro si teniamos realizada una búsqueda anterior
	unset($_SESSION['emails']);

$consultar="#".$_REQUEST['consultar']."#";
	$fichero= fopen("../emailRecibidos/email.txt","r");
	$linea=trim(fgets(($fichero)));//quitamos los espacis en blanco a cada linea
	//Recorremos el fichero hasta que encontremos la fecha o se llegue al final del fichero

 		while($linea!=$consultar && !feof($fichero)){
 			$linea=trim(fgets($fichero));
 			
        }
        //Recorremos hasta la siguiente fecha o fin del fichero
        do{
        	$linea=fgets($fichero);
        	if(substr($linea,0,1)!="#" && $linea!=""){
        		$datos=explode('-',$linea);
        			$_SESSION['emails'][$datos[0]]=[$datos[1],$datos[2]];	
        			
        	}

 		}while(substr($linea, 0, 1)!="#" && !feof($fichero));

 
 	
 fclose($fichero);

}
}
if(isset($_REQUEST['borrar'])){
  if(file_exists('../emailRecibidos/email.txt')){
  unlink('../emailRecibidos/email.txt');
}
}
include '../View/vAdminLecturaEmail.php';
}else{
   header('Location: index.php');
}
}
 ?>