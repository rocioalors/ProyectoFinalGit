<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	 <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&display=swap" rel="stylesheet">
</head>
<body>


<!--Código barra de navegación-->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="../Controller/principalAdmin.php" class="nav-item nav-link active">Inicio</a>
            <a href="../Controller/verCatalogo.php" class="nav-item nav-link">Libros</a>
            <a href="../Controller/verUsuarios.php" class="nav-item nav-link">Usuarios</a>
            <a href="#" class="nav-item nav-link">Prestamos</a>
            <a href="#" class="nav-item nav-link">Ventas</a>
        </div>
        <div class="navbar-nav ml-auto">
          <td><a href="../Controller/cerrarSesion.php"><button type="button" class="btn btn-warning">Cerrar sesion</button></a>
        </div>
    </div>
</nav>



  <!--Código Formulario-->
<form action="../Controller/<?=$destino?>" enctype="multipart/form-data" method="POST">
<div class="container"> 
  <h1 class="titulo">Formulario</h1>
  <div class="form-group">


 <label for="usr">Imagen del Libro:</label><br>
  <input type="file" id="imagen" name="imagen" value="<?=$imagen?>">
 <br>
  <label for="usr">Titulo:</label>
  <input type="text" class="form-control" id="titulo" name="titulo" value="<?=$titulo?>" required>

  <label for="usr">Autor:</label>
  <input type="text" class="form-control" id="autor" name="autor" value="<?=$autor?>" required>

  <label for="usr">Descripcion:</label>
  <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?=$descripcion?>" required>

  <label for="usr">Precio:</label>
  <input type="text" class="form-control" id="precio" name="precio" value="<?=$precio?>" required>

  <label for="usr">Cantidad en alquiler:</label>
  <input type="text" class="form-control" id="cantdalquiler" name="cantAlquiler" value="<?=$cantidadalquiler?>" required>


  <label for="usr">Cantidad en venta:</label>
  <input type="text" class="form-control" id="cantVender" name="cantVender" value="<?=$cantidadvender?>" required>


 <label for="usr">Genero:</label>
  <input type="text" class="form-control" id="genero" name="genero" value="<?=$genero?>" required>

 <label for="usr">Edición:</label>
  <input type="text" class="form-control" id="edicion" name="edicion" value="" required>
 

 

  <br><br>

  <input type="submit" value="GRABAR">
</div>

</div>
</body>
</html>