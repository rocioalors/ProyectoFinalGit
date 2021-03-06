
//Función par devolver préstamo desde el lado del usuario
function borrarPrestamo(id,id_libro){
 	
 	if (confirm('¿Confirma que desea devolver el ejemplar?')) {
	    $.ajax({
	        url: "../Controller/usuDevolverPréstamo.php",
	        type: "POST",
	        data: "id="+id+"&id_libro="+id_libro,
		        success: function(resp){
		        window.location.reload(); //Para que se actualice el contenido de la tabla y ya no aparezca el prestamo borrado
		          alert(resp)
		        }       
	    });
	}
}

//Función que avisa al usuario de si el préstamo se realizo con éxito o no. Hay 3 estados posibles
 function realizarPrestamo(id,titulo){
    $.ajax({
	        url: "../Controller/usuarioPrestamos.php",
	        type: "POST",
	        data: "id="+id+"&titulo="+titulo,
		        success: function(resp){
	
		          alert(resp)
		        }       
	 });
  
}

//Funcion para meter libros en el carrito desde las diferentes paginas de la aplicacion 
 function meteCarro(id){
    $.ajax({
	        url: "../Controller/miCarrito.php",
	        type: "POST",
	        data: "id="+id,
	        success: function(resp){
		        window.location.reload();
		    }
		            
	 });
  
}
//Funcion para cerrar session desde el lado del usuarios
 function cerrarSesion(){
 	if (confirm('¿Está seguro que desea cerrar sesion? Los productos de la cesta se perderan')) {
   		 $.ajax({
    	    url: "../Controller/usuarioCerrarSesion.php",
	        type: "POST",
		    success: function(resp){
		        if(resp==1){
		        	 location.href ="../Controller/index.php";
		        }
		    }
         
	 });
  }
}


//buscador en tiempo real con jquery usuario ver catálogo
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#libros div").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
  });

//Funcion que muestra el tooltip con la descripcion de los libros
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});

//Función cambio de contraseña

$(document).ready(function(){
	 $("#cambio").on("click", function() {
        $.ajax({                        
           type: "POST", 
           data: $("#formulario").serialize(),                
           url:"../Controller/compruebaCambioContraseña.php",                     
           success: function(data)             
           {
             $('#correcto').html(data);               
           }
       });
    });
 });

//funcion mostrar ocultar el slieder
$(document).ready(function(){

    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
 });

//Función muestra o oculta la info de proteccion de datos
$(document).ready(function(){
	 $("#boton1").on("click", function() {
	 	 var x=$("#descripcion");
  			x.toggle("slow");

    });
 })

//Funcion movimiento pagina de ayuda
//Funcion para que al pasar el raton aparezca el contenido en la pag de ayuda
function openTexto(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
//datatable usuario ver compras
$(document).ready(function() {
$('#example').DataTable({
  "columnDefs": [{
   "targets": 0
  }],
  language: {
   "sProcessing": "Procesando...",
   "sLengthMenu": "Mostrar _MENU_ resultados",
   "sZeroRecords": "No se encontraron resultados",
   "sEmptyTable": "Ningún dato disponible en esta tabla",
   "sInfo": "Mostrando resultados _START_-_END_ de  _TOTAL_",
   "sInfoEmpty": "Mostrando resultados del 0 al 0 de un total de 0 registros",
   "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
   "sSearch": "Buscar:",
   "sLoadingRecords": "Cargando...",
   "oPaginate": {
    "sFirst": "Primero",
    "sLast": "Último",
    "sNext": "Siguiente",
    "sPrevious": "Anterior"
   },
  }
 });
});
