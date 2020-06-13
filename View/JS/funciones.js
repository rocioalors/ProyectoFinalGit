//Permite ver la contraseña introducida en el formulario de inicio de sesion
function verContraseña() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

//Función que se utiliza para el cierre de sesion y para confirmar el borrado de algunos datos
function confirmar ( mensaje ) {
        return confirm( mensaje );
}



$(document).ready(function(){
//Funcion para validar el registro de nuevos usuarios

//Comprueba si el usuario esta iniciando session correctamente o no
   $("#formularioInicio").on("click", function() {
    $.ajax({
        url: "../Controller/compruebaLogin.php",
        type: "POST",
        data: $("#inicio").serialize(), 
        success: function(resp){
          if(resp){
            if(resp=='0'){
             window.location.href = "principalUsuario.php";
            }else if(resp==1){
              window.location.href = "principalAdmin.php";
            }else if(resp==2){
              $('#resultado').html('<span style="font-weight:bold;color: red;">Usuario o contraseña incorrecto</span>');

          }
         }
        }       
    });

  });
   
//Funcion para entrar en el apartado de ventas del lado del administrador --Pide clave de acceso

   $("#entrar").on("click", function() {
 
            $.ajax({
                url: "../Controller/adminCompruebaLoginVentas.php",
                type: "POST",
                data: "contraseña="+$("#contraseña").val(),
                success: function(resp){
                  if(resp){
                    if(resp=='0'){
                         $('#info').html('<span style="font-weight:bold;color: red;">Contraseña incorrecta. Acceso denegado</span>');
                    }else if(resp=='1'){
                          window.location.href = "adminVerVentas.php";
                    }
                  }
                
                }       
            });
   });

//datatable.

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

//datatable prestamos
$('#prestamos').DataTable({
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


//datatable administradores

$('#administradores').DataTable({
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

