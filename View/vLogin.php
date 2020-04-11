
<!DOCTYPE html>
<html>
<head>
<!-- Nuestro css -->
<link rel="stylesheet" type="text/css" href="../View/css/style.css">

</head>
<body>
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">

                <div class="col-12 user-img">
                    <img src="../View/img/user.png">
                </div>
                <h3 class="nombre">The Corner Of Dreams</h3>
                <h5 class="nombre">¡Que empieze la aventura!</h5><br>
                <form class="col-12" method="POST" action="return false" onsubmit="return false">
                    <div id="resultado"></div>
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Introduce tu DNI" name="user" id="user" required/>
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Contraseña" name="pass" id="pass" required/>
                    </div>
                    <button  class="btn btn-primary" onclick="Validar(document.getElementById('user').value, document.getElementById('pass').value);"><i class="fas fa-sign-in-alt"></i>  Ingresar </button><br>
                </form>
                    <h5 class="textoregistro"> ¿Eres nuevo? Registrate</h6>
                <form class="col-12">
                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-sign-in-alt"></i>  Registro </button>
                </form>
              
            </div>
        </div>
    </div>
 <!--modal div-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
         <h5 class="modal-title" id="exampleModalCenterTitle">Formulario de registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">NOMBRE:</label>
            <input type="text" class="form-control" id="nombre">
          </div>
         <div class="form-group">
            <label for="recipient-name" class="col-form-label">DNI:</label>
            <input type="text" class="form-control" id="correo">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Correo:</label>
            <input type="email" class="form-control" id="correo">
          </div>
           <div class="form-group">
            <label for="recipient-name" class="col-form-label">DIRECCIÓN:</label>
            <input type="email" class="form-control" id="direccion">
          </div>
           <div class="form-group">
            <label for="recipient-name" class="col-form-label">TELÉFONO:</label>
            <input type="email" class="form-control" id="telefono">
          </div>
           <div class="form-group">
            <label for="recipient-name" class="col-form-label">CONTRASEÑA:</label>
            <input type="password" class="form-control" id="contraseña">
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>