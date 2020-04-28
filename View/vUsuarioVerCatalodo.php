<!DOCTYPE html>
<html>
<head>
	<title>Catálogo de Libros</title>
	<link rel="stylesheet" type="text/css" href="../View/css/estiloPrincipalUsuario.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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
           <a href="../Controller/verContenidoCesta.php"> CESTA: <?=$_SESSION['cantidad']?>Prd Total:<?=$_SESSION['subtotal']?>€</a>
        </div>
        <div class="navbar-nav ml-auto">
          <a href="../Controller/usuarioCerrarSesion.php"><button type="button" class="btn btn-warning">Cerrar sesion</button></a>
        </div>
    </div>
</nav>
<div class="container">
<!--Titulo de la pag-->
 <h1 class="titulo">Catálogo de libros</h1>
 <h3 class="titulo">Deja que tu Imaginación Despierte... Apaga la TV y Enciende un Libro</h3>
 <p class="hastang">#YoMeQuedoEnCasaConTheCornerOfDreams</p>

 <h6 class="titulo">(Entrega gratuita por compras superiores a 19€)</h6>

 <br>

<!--Buscador-->
 <p>Escriba algo en el campo de entrada para buscar por título, autor o género</p>  
 
 <input class="form-control" id="myInput" type="text" placeholder="Buscar...">
 <br><br>


<!--Comienzo de card-->

<div class="row" id="libros">

<?php foreach ($data['lista'] as $lista) {
?>
	<div class="col-sm-3">
		<div class="card card-block">
 			<img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180" src="../View/img/<?=$lista->getImagen()?>" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;"><br>
  				<div class="card-block">
                     <input type="hidden" name="" value="<?=$lista->getId()?>">
    				<h4 class="card-title"><?= $lista->getTitulo()?></h4>
            <i class="material-icons" style="font-size:36px;color:red;">favorite</i>
   					<h6 class="card-title text-center"><?= $lista->getAutor()?></h6>
    				<h6 class="text-center">Género: <?=$lista->getGenero()?></h6>
    				<h6 class="text-center"><?=$lista->getPrecio()?> €</h6>
            <p class="bg-info text-center text-white" data-toggle="tooltip" title="<?=$lista->getDescripcion()?>">Ver sipnosis</p><br>
           <?php 
                if($lista->getCantidadalquiler()>0){
            ?> 
					         <a href="../Controller/usuarioPrestamos.php?id=<?=$lista->getId()?>&titulo=<?=$lista->getTitulo()?>"class="btn btn-secondary">Préstamo</a>
          <?php }else{?>
                  <p id="noprestamo">(Sin Stock en alquiler)</p>

          <?php
                } ?>
    				<a href="../Controller/miCarrito.php?id=<?= $lista->getId()?>"><button type="button" class="btn btn-primary">Compra</button></a>
  				</div>
  		</div>
  		<br>
	</div>

<?php 
}
 ?>
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
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>


                 
         
  
</body>
</html>