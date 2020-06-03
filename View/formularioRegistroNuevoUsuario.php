
<!DOCTYPE html>
<html>
<head>
	<title>Formulario Registro</title>
 <link rel="stylesheet" type="text/css" href="../View/css/estiloFormularioRegistro.css">
 <script src="../View/JS/funcionFormulario.js"></script>
</head>
<body>

  
 <div class="container">

     <form  id="formularioRegistro" class="col-12 col-md-9" method="POST">
     
      <h1 class="nombre">The Corner of Dreams</h1>

      <h3 class="titulo">Formulario de Registro</h3>

        <div class="form-group">
           
            
            <label class="lavel" for="usr">Usuario:</label>
            <input type="text" class="form-control required" id="nombre" name="nombre" value="" onBlur="comprobarUsuario()" required>

  	        <span id="estadousuario"></span> 
            <p><img src="../View/img/LoaderIcon.gif" id="loaderIcon" style="display:none" /></p>

            <label class="lavel" for="usr">DNI:</label>
            <input type="text"  class="form-control required" id="dni" name="dni" value="" onBlur="comprobarDni()" onkeyup="comprobarPatronDni()">
            <div id="noDni"></div>
            <span id="estadoDni"></span> 
  	        <p><img src="../View/img/LoaderIcon.gif" id="loaderIconDni" style="display:none" /></p>

            <label class="lavel" for="usr">Correo:</label>
            <input type="email" class="form-control required" id="correo" name="correo" value=""  onBlur="comprobarEmail()" onkeyup="comprobarPatronEmail()" >
            <div id="noEmail"></div>
 	 
            <span id="estadoemail"></span> 
   	        <p><img src="../View/img/LoaderIcon.gif" id="loaderIconEmail" style="display:none" /></p>

            <label class="lavel" for="usr">Dirección:</label>
            <input type="text" class="form-control required" id="direccion" name="direccion" value="">

             <label class="lavel" for="usr">Codigo Postal:</label>
            <input type="text" class="form-control required" id="cp" name="cp"  value="" onkeyup="comprobarPatronCp()">
             <div id="noCp"></div>

            <label class="lavel" for="usr">Telefono:</label>
            <input type="text" class="form-control required" id="telefono" name="telefono" value="" onkeyup="comprobarPatronTelefono()">
            <div id="noTelefono"></div>


            <label class="lavel" for="usr">Contraseña:</label>
            <input type="password" class="form-control required" id="contraseña" name="contraseña" value="" onkeyup="comprobarPatronContraseña()">
            <div id="noContraseña"></div>
             
             <!--div que recibe la respuesta de ajax cuando el usuario no se ha podido registrar--> 
             <br>
              <div id="noregistro"></div>
            <br>
             
            <button type="submit" class="btn btn-primary" id="registrarme" onclick="envioAjax('grabarNuevoUsuarioRegistro.php','formularioRegistro','post','.resultado')"><i class="fas fa-sign-in-alt"></i> Registrarme</button>
            <!--<button id="registrarme" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Registrarme </button>-->
  
            <a href="../Controller/index.php">Volver a Inicio</a>

        </div>



</form>

</div>

</body>
</html>