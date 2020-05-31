
<!DOCTYPE html>
<html>
<head>
<!-- css -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!--JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

 
 <!-- Los iconos tipo Solid de Fontawesome-->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
 <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

<!-- Nuestro css -->
<link rel="stylesheet" type="text/css" href="../View/css/style.css">
<script src="../View/JS/funciones.js"></script>
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
                <form id="inicio" class="col-12" method="POST" action="return false" onsubmit="return false">
                    <div id="resultado"></div>
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Introduce tu DNI" name="user" id="user" required/>
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Contraseña" name="pass" id="pass" required/>
                    </div>

                    <p class="nombre"><input type="checkbox" onclick="verContraseña()"> <i class="fas fa-eye"></i> Mostrar Contraseña</p>
                 
                    <button  id="formularioInicio" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Ingresar </button>
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