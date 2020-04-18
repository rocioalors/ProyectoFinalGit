
<!DOCTYPE html>
<html>
<head>
	<title>Formulario Registro</title>
 <link rel="stylesheet" type="text/css" href="../View/css/estiloFormularioRegistro.css">
</head>
<body>

  
 <div class="container">

     <form class="col-12 col-md-9" method="POST" action="return false" onsubmit="return false">
     
      <h1 class="nombre">The Corner of Dreams</h1>

      <h3 class="titulo">Formulario de Registro</h3>

        <div class="form-group">
           
            
            <label class="lavel" for="usr">Usuario:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="" onBlur="comprobarUsuario()" required>

  	        <span id="estadousuario"></span> 
            <p><img src="../View/img/LoaderIcon.gif" id="loaderIcon" style="display:none" /></p>

            <label class="lavel" for="usr">DNI:</label>
            <input type="text" class="form-control" id="dni" name="dni" value="" onBlur="comprobarDni()" required="Por favor introduce el DNI">
            
            <span id="estadoDni"></span> 
  	        <p><img src="../View/img/LoaderIcon.gif" id="loaderIconDni" style="display:none" /></p>

            <label class="lavel" for="usr">Correo:</label>
            <input type="email" class="form-control" id="correo" name="correo" value="" required onBlur="comprobarEmail()">
 	 
            <span id="estadoemail"></span> 
   	        <p><img src="../View/img/LoaderIcon.gif" id="loaderIconEmail" style="display:none" /></p>

            <label class="lavel" for="usr">Dirección:</label>
            <input type="text" class="form-control" id="direccion" name="direccion" value="" required>

            <label class="lavel" for="usr">Telefono:</label>
            <input type="text" class="form-control" id="telefono" name="telefono" value="" required>


            <label class="lavel" for="usr">Contraseña:</label>
            <input type="text" class="form-control" id="contraseña" name="contraseña" value="" required>
             
             <!--div que recibe la respuesta de ajax cuando el usuario no se ha podido registrar--> 
              <div id="noregistro"></div>
            <br>
             
             <!--Botón que se direige la funcion ValidarRegistro dentro del archivo funciones.js-->
            <button  class="btn btn-primary" onclick="ValidarRegistro(document.getElementById('nombre').value, document.getElementById('dni').value,document.getElementById('correo').value,document.getElementById('direccion').value,document.getElementById('telefono').value,document.getElementById('contraseña').value);"><i class="fas fa-sign-in-alt"></i> Registrarme </button>
  
            <a href="../Controller/index.php">Volver a Inicio</a>
        </div>

</div>

</form>
</body>
</html>