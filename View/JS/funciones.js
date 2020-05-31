function verContraseña() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function confirmar ( mensaje ) {
        return confirm( mensaje );
}

//Comprueba si el usuario esta iniciando session correctamente o no
$(document).ready(function(){
   $("#formularioInicio").on("click", function() {
    $.ajax({
        url: "../Controller/compruebaLogin.php",
        type: "POST",
        data: $("#inicio").serialize(), 
        success: function(resp){
        $('#resultado').html(resp)
        }       
    });

  });
 });


function comprobarUsuario() {
    $("#loaderIcon").show();
    jQuery.ajax({
    url: "../Controller/compruebaRegistro.php",
    data:'nombre='+$("#nombre").val(),
    type: "POST",
    success:function(data){
        $("#estadousuario").html(data);
        $("#loaderIcon").hide();
    },
    error:function (){}
    });
}
function comprobarEmail() {
    $("#loaderIconEmail").show();
    jQuery.ajax({
    url: "../Controller/compruebaRegistro.php",
    data:'correo='+$("#correo").val(),
    type: "POST",
    success:function(data){
        $("#estadoemail").html(data);
        $("#loaderIconEmail").hide();
    },
    error:function (){}
    });
}

function comprobarDni() {
    $("#loaderIconDni").show();
    jQuery.ajax({
    url: "../Controller/compruebaRegistro.php",
    data:'dni='+$("#dni").val(),
    type: "POST",
    success:function(data){
        $("#estadoDni").html(data);
        $("#loaderIconDni").hide();
    },
    error:function (){}
    });
}

//Funcion para validar el registro de nuevos usuarios
$(document).ready(function(){
   $("#registrarme").on("click", function() {
             $.ajax({
                url: "../Controller/grabarNuevoUsuarioRegistro.php",
                type: "POST",
                data: $("#formularioRegistro").serialize(),
                success: function(resp){
                $('#noregistro').html(resp)
                }       
            });
    });
});
        
//Funcion para entrar en las ventas --Pide clave de acceso
$(document).ready(function(){
   $("#entrar").on("click", function() {
 
            $.ajax({
                url: "../Controller/adminCompruebaLoginVentas.php",
                type: "POST",
                data: "contraseña="+$("#contraseña").val(),
                success: function(resp){
                $('#info').html(resp)
                }       
            });
   });
 });
//datatable.
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

//datatable prestamos
$(document).ready(function() {
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
});

//datatable administradores
$(document).ready(function() {
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

