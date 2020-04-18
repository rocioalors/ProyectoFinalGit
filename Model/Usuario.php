<?php 
include_once 'proyectoBD.php';
class  Usuario{
	private $id;
	private $nombre;
	private $dni;
	private $correo;
	private $direccion;
	private $telefono;
	private $contraseña;
	

	
	function __construct($id=0,$nombre='',$dni='',$correo='',$direccion='',$telefono=0, $contraseña='')
	{
		$this->id = $id;
		$this->nombre=$nombre;
		$this->dni = $dni;
		$this->correo=$correo;
		$this->direccion=$direccion;
		$this->telefono=$telefono;
		$this->contraseña=$contraseña;
		
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

    public function getDni()
    {
        return $this->dni;
    }

    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    public function getCorreo()
    {
        return $this->correo;
    }

    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    
    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

     public function getContraseña()
    {
        return $this->contraseña;
    }

    public function setContraseña($contraseña)
    {
        $this->contraseña = $contraseña;

        return $this;
    }

 

	public function insert() {
		$conexion = proyectoBD::connectDB();
		
		$insercion = "INSERT INTO usuarios (id,nombre,dni,correo,direccion,telefono,contraseña) VALUES ('$this->id','$this->nombre','$this->dni','$this->correo','$this->direccion','$this->telefono','$this->contraseña')";
		//echo $insercion;
		$conexion->exec($insercion);
	}

	public function delete() {
		$conexion = proyectoBD::connectDB();
	
		$borrado = "DELETE FROM usuarios WHERE id=\"".$this->id."\"";
	
		$conexion->exec($borrado);
	}

    public function update(){
        $conexion=proyectoBD::connectDB();
        $actualiza="UPDATE usuarios SET nombre=\"".$this->nombre."\",dni=\"".$this->dni."\",correo=\"".$this->correo."\",direccion=\"".$this->direccion."\",telefono=\"".$this->telefono."\",contraseña=\"".$this->contraseña."\"WHERE id=\"".$this->id."\"";
        echo $actualiza;
        $conexion->exec($actualiza);
    }

	public static function getUsuario() {
	
		$conexion = proyectoBD::connectDB();
		
		$seleccion = "SELECT * FROM usuarios ";
		
		$consulta = $conexion->query($seleccion);
		
		$usuarios = [];
		
		while ($registro = $consulta->fetchObject()) {
			$usuarios[] = new Usuario($registro->id, $registro->nombre,$registro->dni,$registro->correo,$registro->direccion,$registro->telefono,$registro->contraseña);
		}

		return $usuarios;
	}

	   public static function getComprobar($dni,$contraseña) {
        $conexion = proyectoBD::connectDB();
        $seleccion = "SELECT * FROM usuarios WHERE dni='$dni 'AND contraseña='$contraseña'";
        //echo $seleccion;
        $consulta = $conexion->query($seleccion);
        $total=$consulta->rowCount();
        return $total ;
    }

       public static function getComprobarUsuario($nombre) {
        $conexion = proyectoBD::connectDB();
        $seleccion = "SELECT * FROM usuarios WHERE nombre='$nombre'";
        //echo $seleccion;
        $consulta = $conexion->query($seleccion);
        $total=$consulta->rowCount();
        return $total ;
      }

      public static function getComprobarDni($dni) {
        $conexion = proyectoBD::connectDB();
        $seleccion = "SELECT * FROM usuarios WHERE dni='$dni'";
        //echo $seleccion;
        $consulta = $conexion->query($seleccion);
        $total=$consulta->rowCount();
        //echo $total;
        return $total ;
      }

      public static function getComprobarCorreo($correo) {
        $conexion = proyectoBD::connectDB();
        $seleccion = "SELECT * FROM usuarios WHERE correo='$correo'";
        //echo $seleccion;
        $consulta = $conexion->query($seleccion);
        $total=$consulta->rowCount();
        return $total ;
      }

      public static function getUsurioLinea($dni){
        $conexion = proyectoBD::connectDB();
        $seleccion = "SELECT * FROM usuarios WHERE correo='$correo'";
      }


        public static function getUsuarioByDni($dni) {
        $conexion = proyectoBD::connectDB();
        $seleccion = "SELECT * FROM usuarios WHERE dni=\"".$dni."\"";
        $consulta = $conexion->query($seleccion);
        $registro = $consulta->fetchObject();
        $usuario = new Usuario($registro->id,$registro->nombre, $registro->dni, $registro->correo, $registro->direccion, $registro->telefono, $registro->contraseña);
        return $usuario;
    }

}
    


 ?>