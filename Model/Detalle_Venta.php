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

    public static function tresLibrosMasVendidos(){
        $conexion = proyectoBD::connectDB();
        $seleccion="SELECT d.id_libro,SUM(d.cantidad) AS cantidad,l.imagen,l.titulo,l.descripcion,l.precio,l.autor,l.edicion,l.cantidadvender FROM detalle_venta d INNER JOIN libros l ON d.id_libro=l.id GROUP BY d.id_libro ORDER BY SUM(d.cantidad) DESC LIMIT 0,3";
        $consulta=$conexion->query($seleccion);
         while ($registro = $consulta->fetchObject()) {
            $objeto=array("id_libro"=>$registro->id_libro,"cantidad"=>$registro->cantidad,"imagen"=>$registro->imagen,"titulo"=>$registro->titulo,"descripcion"=>$registro->descripcion,"precio"=>$registro->precio,"autor"=>$registro->autor,"edicion"=>$registro->edicion,"cantidadvender"=>$registro->cantidadvender);
            $total[]=$objeto;
           
        }

            

        return $total; 

    }

   public static function detalleVenta($id){
    $conexion = proyectoBD::connectDB();
    $seleccion="SELECT d.id_libro,l.imagen, l.titulo,l.descripcion,l.precio,d.cantidad FROM detalle_venta d INNER JOIN libroS l ON d.id_libro=l.id WHERE d.id_venta='$id'";
    $consulta=$conexion->query($seleccion);
     while ($registro = $consulta->fetchObject()) {
            $objeto =array("id_libro"=>$registro->id_libro,"imagen"=>$registro->imagen,"titulo"=>$registro->titulo,"descripcion"=>$registro->descripcion,"precio"=>$registro->precio,"cantidad"=>$registro->cantidad);

           $total[]=$objeto;
        }

           

        return $total; 

   }

}
    