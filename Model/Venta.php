<?php 
include_once 'proyectoBD.php';
class Venta{
    private $id;
	private $fechacompra;
    private $usuario;
    private $total;
	
	
	
	function __construct($id=0,$fechacompra=0,$usuario='',$total=0)
	{
        $this->id=$id;
		$this->fechacompra = $fechacompra;	
        $this->usuario=$usuario;
        $this->total=$total;
    }

     public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }


    public function getFechacompra()
    {
        return $this->fechacompra;
    }

    public function setFechacompra($fechacompra)
    {
        $this->fechacompra = $fechacompra;

        return $this;
    }


    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

       

    public function getTotal()
    {
        return $this->total;
    }

    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }


	public function insert() {
		$conexion = proyectoBD::connectDB();
		
		$insercion = "INSERT INTO venta (id,fechacompra,usuario,total) VALUES ('$this->id','$this->fechacompra','$this->usuario','$this->total')";
		//echo $insercion;
		$conexion->exec($insercion);
	}
    public function prueba(){
        $conexion = proyectoBD::connectDB();
        $seleccion = "SELECT * from venta order by id desc limit 1";

        $consulta = $conexion->query($seleccion);
        $registro = $consulta->fetchObject();   
 
        $venta = new Venta($registro->id,$registro->fechacompra,$registro->usuario,$registro->total);
        return $venta;
  
    }

    public static function getVentas(){
      $conexion = proyectoBD::connectDB();
      $seleccion= "SELECT * from venta"; 
        $consulta = $conexion->query($seleccion);
        
        
        
        while ($registro = $consulta->fetchObject()) {
            $objeto =array("id"=>$registro->id,"fechacompra"=>$registro->fechacompra,"usuario"=> $registro->usuario,"total"=>$registro->total);
            $json[]=$objeto;
        }

            $datos=json_encode($json);

        return $datos; 
    }
//calcula el total de ingresos
    public static function total(){
        $conexion = proyectoBD::connectDB();
        $seleccion= "SELECT * from venta"; 
        $consulta = $conexion->query($seleccion);
        //$total=0;
        while ($registro = $consulta->fetchObject()) {
            $objeto =array("id"=>$registro->id,"fechacompra"=>$registro->fechacompra,"usuario"=> $registro->usuario,"total"=>$registro->total);
           $total[]=$objeto;
        }

            $datos=json_encode($total);

        return $datos; 
    }
//Calcula el total por meses
    public static function meses(){
        $conexion = proyectoBD::connectDB();
        $seleccion="SELECT MONTH(fechacompra) Mes, SUM(total) total_mes FROM venta GROUP BY Mes";
        $consulta=$conexion->query($seleccion);
         while ($registro = $consulta->fetchObject()) {
            $objeto =array("mes"=>$registro->Mes,"total_mes"=>$registro->total_mes);

           $total[]=$objeto;
        }

            $datos=json_encode($total);

        return $datos; 
    }

 //Ver todas las compras de un mes determinado
    public static function mesDeterminado($mes){
        $conexion = proyectoBD::connectDB();
        $seleccion="SELECT * FROM venta WHERE MONTH(fechacompra)='$mes'";
        $consulta = $conexion->query($seleccion);
        $ventas = [];
        
        while ($registro = $consulta->fetchObject()) {
            $ventas[] = new Venta($registro->id,$registro->fechacompra, $registro->usuario,$registro->total);
        }

        return $ventas;
     
    }

       public static function ventasPorUsuario($usuario){
        $conexion = proyectoBD::connectDB();
        $seleccion="SELECT * FROM venta WHERE usuario='$usuario'";
        $consulta = $conexion->query($seleccion);
        $ventas = [];
        
        while ($registro = $consulta->fetchObject()) {
            $ventas[] = new Venta($registro->id,$registro->fechacompra, $registro->usuario,$registro->total);
        }

        return $ventas;
     
    }

}