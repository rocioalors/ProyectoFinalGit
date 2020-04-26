<?php 
include_once 'proyectoBD.php';
class  Prestamo{
    private $id;
	private $fechaPrestamo;
	private $fechaDevolucion;
	private $id_libro;
    private $titulo;
	private $usuario;
	
	
	function __construct($id=0,$fechaPrestamo=0,$fechaDevolucion=0,$id_libro='',$titulo='',$usuario='')
	{
        $this->id=$id;
		$this->fechaPrestamo = $fechaPrestamo;
		$this->fechaDevolucion=$fechaDevolucion;
		$this->id_libro = $id_libro;
        $this->titulo=$titulo;
		$this->usuario=$usuario;
		
		
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


    public function getFechaPrestamo()
    {
        return $this->fechaPrestamo;
    }

    public function setFechaPrestamo($fechaPrestamo)
    {
        $this->fechaPrestamo = $fechaPrestamo;

        return $this;
    }

 
    public function getFechaDevolucion()
    {
        return $this->fechaDevolucion;
    }

    public function setFechaDevolucion($fechaDevolucion)
    {
        $this->fechaDevolucion = $fechaDevolucion;

        return $this;
    }

    public function getId_Libro()
    {
        return $this->id_libro;
    }

    public function setId_Libro($id_libro)
    {
        $this->id_libro = $id_libro;

        return $this;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titlo;

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


 

	public function insert() {
		$conexion = proyectoBD::connectDB();
		
		$insercion = "INSERT INTO prestamos (id,fechaPrestamo,fechaDevolucion,id_libro,titulo,usuario) VALUES ('$this->id','$this->fechaPrestamo','$this->fechaDevolucion','$this->id_libro','$this->titulo','$this->usuario')";
		//echo $insercion;
		$conexion->exec($insercion);
	}

	public function delete() {
		$conexion = proyectoBD::connectDB();
	
		$borrado = "DELETE FROM prestamos WHERE id=\"".$this->id."\"";
	    //echo $borrado;
		$conexion->exec($borrado);
	}

    /*public function update(){
        $conexion=proyectoBD::connectDB();
        $actualiza="UPDATE usuarios SET nombre=\"".$this->nombre."\",dni=\"".$this->dni."\",correo=\"".$this->correo."\",direccion=\"".$this->direccion."\",telefono=\"".$this->telefono."\",contraseña=\"".$this->contraseña."\"WHERE id=\"".$this->id."\"";
        echo $actualiza;
        $conexion->exec($actualiza);
    }*/

	public static function getPrestamos() {
	
		$conexion = proyectoBD::connectDB();
		
		$seleccion = "SELECT * FROM prestamos ";
		
		$consulta = $conexion->query($seleccion);
		
		$prestamos = [];
		
		while ($registro = $consulta->fetchObject()) {
			$prestamos[] = new Prestamo($registro->id, $registro->fechaprestamo,$registro->fechadevolucion,$registro->id_libro,$registro->titulo,$registro->usuario);
		}

		return $prestamos;
	}

    public static function getFueraPlazo($use) {
    
        $conexion = proyectoBD::connectDB();
        
        $seleccion = "SELECT * FROM prestamos WHERE usuario='$use' AND fechadevolucion<CURDATE()";
        
        $consulta = $conexion->query($seleccion);
        
        $prestamos = [];
        
        while ($registro = $consulta->fetchObject()) {
            $prestamos[] = new Prestamo($registro->id, $registro->fechaprestamo,$registro->fechadevolucion,$registro->id_libro,$registro->titulo,$registro->usuario);
        }

        return $prestamos;
    }

	public static function getPrestamoByUsuario($usuario) {
		$conexion = proyectoBD::connectDB();
		$seleccion = "SELECT * FROM prestamos WHERE usuario=\"".$usuario."\"";
        //echo $seleccion;
           $consulta = $conexion->query($seleccion);
        
        $prestamos = [];
        
        while ($registro = $consulta->fetchObject()) {
            $prestamos[] = new Prestamo($registro->id, $registro->fechaprestamo,$registro->fechadevolucion,$registro->id_libro,$registro->titulo,$registro->usuario);
        }

        return $prestamos;
		
	}

}
    


 ?>