<!DOCTYPE html>
<html>
<head>
	<title>Catálogo de Libros</title>
	<link rel="stylesheet" type="text/css" href="../View/css/estiloPrincipalUsuario.css">
</head>
<body>
<!--Codigo NAV-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
        	<img src="../View/img/Logo.png" width="50px" height="50px">
            <a href="../Controller/principalUsuario.php" class="nav-item nav-link active">Inicio</a>
            <a href="../Controller/usuarioVerCatalago.php" class="nav-item nav-link">Ver Catálogo</a>
            <a href="../Controller/usuarioVerPerfil.php" class="nav-item nav-link">Mi perfil</a>
            <a href="../Controller/usuarioFormularioContacto.php" class="nav-item nav-link">Contacto</a> 
        </div>
        <div class="navbar-nav ml-auto">
          <a href="../Controller/cerrarSesion.php"><button type="button" class="btn btn-warning">Cerrar sesion</button></a>
        </div>
    </div>
</nav>
<div class="container">
<!--Titulo de la pag-->
 <h1 class="titulo">Catálogo de libros</h1>
 <h3 class="titulo">Deja que tu Imaginación Despierte... Apaga la TV y Enciende un Libro</h3>
 <p class="hastang">#YoMeQuedoEnCasaConTheCornerOfDreams</p>

 <br>

<!--Buscador-->
 <p>Escriba algo en el campo de entrada para buscar por título, autor o género</p>  
 
 <input class="form-control" id="myInput" type="text" placeholder="Buscar...">
 <br><br>


<!--Comienzo de card-->

<div class="row" id="libros">

<?php foreach ($data['lista'] as $lista) { ?>

	<div class="col-sm-3">
		<div class="card card-block">
 			<img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180" src="../View/img/<?=$lista->getImagen()?>" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;"><br>
  				<div class="card-block">
                     <input type="hidden" name="" value="<?=$lista->getId()?>">
    				<h4 class="card-title"><?= $lista->getTitulo()?></h4>
   					<h6 class="card-title"><?= $lista->getAutor()?></h6>
    				<h6 class="precio">Género: <?=$lista->getGenero()?></h6>
    				<h6 class="text-center"><?=$lista->getPrecio()?> €</h6>
					<a href="#" onclick="" data-toggle="modal" data-target="#exampleModal">Ver Sipnosis</a><br><br>
					<a href="#" class="btn btn-primary">Préstamo</a>
    				<a href="#" class="btn btn-primary">Compra</a>
  				</div>
  		</div>
  		<br>
	</div>

<?php 
}
 ?>
</div>	

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="mostrar">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

 <!--Codigo para el buscador-->
 <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#libros div").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</body>
</html>