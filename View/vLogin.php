
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
                  <a href="../Controller/registroUsuario.php">
                     <button type="button" class="btn btn-primary"> <i class="fas fa-sign-in-alt"></i>  Registro </button></a>
                </form>
              
            </div>
        </div>
    </div>
</body>
</html>