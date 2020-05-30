<?php 
include_once 'proyectoBD.php';
class Comentarios{
    private $id;
    private $nombre;
	private $fecha;
    private $comentario;

	
	
	
	function __construct($id,$nombre='',$fecha=0,$comentario='')
	{
        $this->id=$id;
        $this->nombre=$nombre;
		$this->fecha = $fecha;	
        $this->comentario=$comentario;
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

     public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }


    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }


    public function getComentario()
    {
        return $this->comentario;
    }

    public function setComentario($comentario)
    {
        $this->comentario = $comentario;

        return $this;
    }

       



	public function insert() {
		$conexion = proyectoBD::connectDB();
		
		$insercion = "INSERT INTO Comentarios (id,nombre,fecha,comentario) VALUES ('$this->id','$this->nombre','$this->fecha','$this->comentario')";
		//echo $insercion;
		$conexion->exec($insercion);
	}

    public function delete() {
        $conexion = proyectoBD::connectDB();
    
        $borrado = "DELETE FROM comentarios WHERE id=\"".$this->id."\"";
    
        $conexion->exec($borrado);
    }
 
    public static function getComentarios() {
    
        $conexion = proyectoBD::connectDB();

        
        $seleccion = "SELECT * FROM comentarios ORDER BY fecha DESC LIMIT 0,5";
        
        $consulta = $conexion->query($seleccion);
        
        $comentarios = [];
        
        while ($registro = $consulta->fetchObject()) {
            $comentarios[] = new Comentarios($registro->id,$registro->nombre, $registro->fecha,$registro->comentario);
        }

        return $comentarios;
    }

}