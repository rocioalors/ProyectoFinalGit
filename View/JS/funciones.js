<script language="JavaScript">

function confirmar ( mensaje ) {
        return confirm( mensaje );
}

 function Validar(user, pass){
    $.ajax({
        url: "../Controller/compruebaLogin.php",
        type: "POST",
        data: "user="+user+"&pass="+pass,
        success: function(resp){
        $('#resultado').html(resp)
        }       
    });
}

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

 function ValidarRegistro(nombre,dni,correo,direccion,cp,telefono, contraseña)
        {
            $.ajax({
                url: "../Controller/grabarNuevoUsuarioRegistro.php",
                type: "POST",
                data: "nombre="+nombre+"&dni="+dni+"&correo="+correo+"&direccion="+direccion+"&cp="+cp+"&telefono="+telefono+"&contraseña="+contraseña,
                success: function(resp){
                $('#noregistro').html(resp)
                }       
            });
        }


  function ventas(contraseña){
            $.ajax({
                url: "../Controller/adminCompruebaLoginVentas.php",
                type: "POST",
                data: "contraseña="+contraseña,
                success: function(resp){
                $('#info').html(resp)
                }       
            });
  }
</script>
