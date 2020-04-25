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
        return $this->id_producto;
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


}