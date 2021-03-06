<?php 
include_once 'proyectoBD.php';
class  Libro{
	private $id;
    private $imagen;
	private $titulo;
	private $autor;
	private $descripcion;
    private $precio;
	private $cantidadalquiler;
	private $cantidadvender;
	private $genero;
    private $edicion;
    private $estado;

	
	function __construct($id=0,$imagen='',$titulo='',$autor='',$descripcion='',$precio=0,$cantidadalquiler=0,$cantidadvender=0,$genero='',$edicion='', $estado='')
	{
		$this->id = $id;
        $this->imagen=$imagen;
		$this->titulo=$titulo;
		$this->autor = $autor;
		$this->descripcion=$descripcion;
        $this->precio=$precio;
		$this->cantidadalquiler=$cantidadalquiler;
		$this->cantidadvender=$cantidadvender;
		$this->genero=$genero;
        $this->edicion=$edicion;
        $this->estado=$estado;
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

    public function getImagen()
    {
        return $this->imagen;
    }

    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

 
    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

       public function getPrecio()
    {
        return $this->precio;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    
    public function getCantidadalquiler()
    {
        return $this->cantidadalquiler;
    }

    public function setCantidadalquiler($cantidadalquiler)
    {
        $this->cantidadalquiler = $cantidadalquiler;

        return $this;
    }

    public function getCantidadvender()
    {
        return $this->cantidadvender;
    }

    public function setCantidadvender($cantidadvender)
    {
        $this->cantidadvender = $cantidadvender;

        return $this;
    }

    public function getGenero()
    {
        return $this->genero;
    }

    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    public function getEdicion()
    {
        return $this->edicion;
    }

    public function setEdicion($edicion)
    {
        $this->edicion = $edicion;

        return $this;
    }

        public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }


	public function insert() {
		$conexion = proyectoBD::connectDB();
		
		$insercion = "INSERT INTO libros (id,imagen,titulo,autor,descripcion,precio,cantidadalquiler,cantidadvender,genero,edicion,estado) VALUES ('$this->id','$this->imagen','$this->titulo','$this->autor','$this->descripcion','$this->precio','$this->cantidadalquiler','$this->cantidadvender','$this->genero','$this->edicion','$this->estado')";
        //echo $insercion;
		$conexion->exec($insercion);

	}

	public function delete() {
		$conexion = proyectoBD::connectDB();
	
		$borrado = "DELETE FROM libros WHERE id=\"".$this->id."\"";
	
		$conexion->exec($borrado);
	}

	public function update(){
		$conexion=proyectoBD::connectDB();
	 $actualiza="UPDATE libros SET titulo=\"".$this->titulo."\",autor=\"".$this->autor."\",descripcion=\"".$this->descripcion."\",precio=\"".$this->precio."\",cantidadalquiler=\"".$this->cantidadalquiler."\",cantidadvender=\"".$this->cantidadvender."\",genero=\"".$this->genero."\",edicion=\"".$this->edicion."\",estado=\"".$this->estado."\"WHERE id=\"".$this->id."\"";
		//echo $actualiza;
		$conexion->exec($actualiza);
	}

	public static function getLibro() {
	
		$conexion = proyectoBD::connectDB();
		
		$seleccion = "SELECT * FROM libros ";
		
		$consulta = $conexion->query($seleccion);
		
		$libros = [];
		
		while ($registro = $consulta->fetchObject()) {
			$libros[] = new Libro($registro->id,$registro->imagen, $registro->titulo,$registro->autor,$registro->descripcion,$registro->precio,$registro->cantidadalquiler,$registro->cantidadvender,$registro->genero,$registro->edicion,$registro->estado);
		}

		return $libros;
	}

	public static function getLibroById($id) {
		$conexion = proyectoBD::connectDB();
		$seleccion = "SELECT * FROM libros WHERE id=\"".$id."\"";
		$consulta = $conexion->query($seleccion);
		$registro = $consulta->fetchObject();
		$libro = new Libro($registro->id,$registro->imagen, $registro->titulo,$registro->autor,$registro->descripcion,$registro->precio,$registro->cantidadalquiler,$registro->cantidadvender,$registro->genero,$registro->edicion,$registro->estado);
		return $libro;
	}

    public static function prestar($id){
        $conexion=proyectoBD::connectDB();
        $actualiza="UPDATE libros SET cantidadalquiler=cantidadalquiler-1 WHERE id='$id'";
        //echo $actualiza;
        $conexion->exec($actualiza);

    }
    public static function devolver($id){
        $conexion=proyectoBD::connectDB();
        $actualiza="UPDATE libros SET cantidadalquiler=cantidadalquiler+1 WHERE id='$id'";
        //echo $actualiza;
        $conexion->exec($actualiza);

    }

    public static function comprar($id,$cantidad){
        $conexion=proyectoBD::connectDB();
        $actualiza="UPDATE libros SET cantidadvender=cantidadvender-$cantidad WHERE id=\"".$id."\"";
        //echo $actualiza;
        $conexion->exec($actualiza);

    }

     public static function habilitar($id){
        $conexion=proyectoBD::connectDB();
        $actualiza="UPDATE libros SET estado='Habilitado' WHERE id=\"".$id."\"";
        //echo $actualiza;
        $conexion->exec($actualiza);

    }

     public static function Deshabilitar($id){
        $conexion=proyectoBD::connectDB();
        $actualiza="UPDATE libros SET estado='Deshabilitado' WHERE id=\"".$id."\"";
        //echo $actualiza;
        $conexion->exec($actualiza);

    }
    
    public static function novedades(){
        $conexion = proyectoBD::connectDB();
        
        $seleccion = "SELECT * FROM libros WHERE estado != 'Deshabilitado'ORDER BY id DESC LIMIT 4";
        
        $consulta = $conexion->query($seleccion);
        
        $libros = [];
        
        while ($registro = $consulta->fetchObject()) {
            $libros[] = new Libro($registro->id,$registro->imagen, $registro->titulo,$registro->autor,$registro->descripcion,$registro->precio,$registro->cantidadalquiler,$registro->cantidadvender,$registro->genero,$registro->edicion,$registro->estado);
        }

        return $libros;
    
    }
    public static function getComprobar($titulo,$autor,$edicion) {
        $conexion = proyectoBD::connectDB();
        $seleccion = "SELECT * FROM libros WHERE titulo='$titulo 'AND autor='$autor'";
        //echo $seleccion;
        $consulta = $conexion->query($seleccion);
        $total=$consulta->rowCount();
        return $total ;
    }
 
   

}
    


 ?>