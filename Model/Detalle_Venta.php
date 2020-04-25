<?php 
include_once 'proyectoBD.php';
class  Detalle_Venta{
    private $id_venta;
	private $id_libro;
    private $cantidad;
	
	
	
	function __construct($id_venta=0,$id_libro=0,$cantidad=0)
	{
        $this->id_venta=$id_venta;
		$this->id_libro = $id_libro;	
        $this->cantidad=$cantidad;
    }

     public function getId_venta()
    {
        return $this->id_venta;
    }

    public function setId_venta($id_venta)
    {
        $this->id_venta = $id_venta;

        return $this;
    }


    public function getId_libro()
    {
        return $this->id_producto;
    }

    public function setId_libro($id_libro)
    {
        $this->id_libro = $id_libro;

        return $this;
    }


      public function getCantidad()
    {
        return $this->cantidad;
    }

    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

 


	public function insert() {
		$conexion = proyectoBD::connectDB();
		
		$insercion = "INSERT INTO detalle_venta (id_venta,id_libro,cantidad) VALUES ('$this->id_venta','$this->id_libro','$this->cantidad')";
		//echo $insercion;
		$conexion->exec($insercion);
	}





}
    