
//Función par devolver préstamo
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

//Función que avisa al usuario de que si el préstamo se ha realizado con éxito o no
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

//Funcion para meter libros en el carrito
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
//FUNCION PARA CONFIRMAR QUE DESEA CERRAR SESION
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

