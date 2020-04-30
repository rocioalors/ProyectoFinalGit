<?php 
include_once 'proyectoBD.php';
class  Administrador{
	private $usario;
    private $contraseña;
    private $dni;
    private $email;
    private $telefono;
	
	

	
	function __construct($usuario='',$contraseña='',$dni='',$email='',$telefono=0)
	{
		$this->usuario = $usuario;
		$this->contraseña=$contraseña;
        $this->dni=$dni;
		$this->email=$email;
		$this->telefono=$telefono;
		
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario($id)
    {
        $this->usuario = $usuario;

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

     public function getDni()
    {
        return $this->dni;
    }

    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }



    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

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



	public function insert() {
		$conexion = proyectoBD::connectDB();
		
		$insercion = "INSERT INTO administradores (usuario,contraseña,dni,email,telefono) VALUES ('$this->usuario','$this->contraseña','$this->dni','$this->email','$this->telefono')";
		//echo $insercion;
		$conexion->exec($insercion);
	}

    public function delete($dni) {
        $conexion = proyectoBD::connectDB();
    
        $borrado = "DELETE FROM administradores WHERE dni='$dni'";
         //echo $borrado;
        $conexion->exec($borrado);
    }


    public function update(){
        $conexion=proyectoBD::connectDB();
        $actualiza="UPDATE administradores SET usuario=\"".$this->usuario."\",contraseña=\"".$this->contraseña."\",dni=\"".$this->dni."\",email=\"".$this->email."\",telefono=\"".$this->telefono."\" WHERE dni=\"".$this->dni."\"";
        //echo $actualiza;
        $conexion->exec($actualiza);
    }

	public static function getAdministrador() {
	
		$conexion = proyectoBD::connectDB();
		
		$seleccion = "SELECT * FROM administradores ";
		
		$consulta = $conexion->query($seleccion);
		
		$usuarios = [];
		
		while ($registro = $consulta->fetchObject()) {
			$usuarios[] = new Administrador($registro->usuario, $registro->contraseña,$registro->dni,$registro->email,$registro->telefono);
		}

		return $usuarios;
	}

	   public static function getComprobar($dni,$contraseña) {
        $conexion = proyectoBD::connectDB();
        $seleccion = "SELECT * FROM administradores WHERE dni='$dni 'AND contraseña='$contraseña'";
        //echo $seleccion;
        $consulta = $conexion->query($seleccion);
        $total=$consulta->rowCount();
        return $total ;
    }


        public static function getAdministradorByDni($dni) {
        $conexion = proyectoBD::connectDB();
        $seleccion = "SELECT * FROM administradores WHERE dni=\"".$dni."\"";
        $consulta = $conexion->query($seleccion);
        $registro = $consulta->fetchObject();
        $usuario = new Administrador($registro->usuario,$registro->contraseña, $registro->dni, $registro->email, $registro->telefono);
        return $usuario;
    }

}
    


 ?>