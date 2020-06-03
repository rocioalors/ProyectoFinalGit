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
    var correcto=comprobarPatronEmail();
    if(correcto){
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
}

function comprobarDni() {
    var correcto=comprobarPatronDni();
    if(correcto){
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
}


 function validarForm(idForm,) {
    var exprTel = /^[\d]{3}[-]*([\d]{2}[-]*){2}[\d]{2}$/;
    var exprCp = /^(?:0[1-9]|[1-4]\d|5[0-2])\d{3}$/;
    var exprEmail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var exprDni=/\d{8}[a-z A-Z]$/;
    var exprContraseña=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$/;
    //Validamos que ningún campo este vacio
    if( $(idForm + " input[id='nombre']").val() == "" )
    {
        //Ponemos el fondo del input de color rojo
        $(idForm + " input[id='nombre']").css("background-color", "#ffb3b3");
        //ponemos un alert advirtiendo que hay campos vacios
        $("#noregistro").html('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>¡Campos sin rellenar!</strong> Todos los campos son obligatorios.</div>');
        
        return false;
    }
    else if( $(idForm + " input[id='dni']").val() == "" )
    {
        $(idForm + " input[id='dni']").css("background-color", "#ffb3b3");
        $("#noregistro").html('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>¡Campos sin rellenar!</strong> Todos los campos son obligatorios.</div>');
        return false;
    }

      else if( $(idForm + " input[id='correo']").val() == "" )
    {
        $(idForm + " input[id='correo']").css("background-color", "#ffb3b3");
        $("#noregistro").html('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>¡Campos sin rellenar!</strong> Todos los campos son obligatorios.</div>');
        return false;
    }
      else if( $(idForm + " input[id='direccion']").val() == "" )
    {
         $(idForm + " input[id='direccion']").css("background-color", "#ffb3b3");
        $("#noregistro").html('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>¡Campos sin rellenar!</strong> Todos los campos son obligatorios.</div>');
        return false;
    }
      else if( $(idForm + " input[id='cp']").val() == "" )
    {
        $(idForm + " input[id='cp']").css("background-color", "#ffb3b3");
        $("#noregistro").html('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>¡Campos sin rellenar!</strong> Todos los campos son obligatorios.</div>');
        
        return false;
    }
      else if( $(idForm + " input[id='telefono']").val() == "" )
    {
        $(idForm + " input[id='telefono']").css("background-color", "#ffb3b3");
        $("#noregistro").html('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>¡Campos sin rellenar!</strong> Todos los campos son obligatorios.</div>');
        return false;
    }

      else if( $(idForm + " input[id='contraseña']").val() == "" )
    {
         $(idForm + " input[id='contraseña']").css("background-color", "#ffb3b3");
         $("#noregistro").html('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>¡Campos sin rellenar!</strong> Todos los campos son obligatorios.</div>');
         return false;
    }

     //Comprobamos si el dni cumple con el patron
    else if(  !exprDni.test(($(idForm + " input[id='dni'].required").val()) ) ){
        $("#noDni").html('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>¡Formato invalido!</strong> Debe tener 8 números y una letra.</div>');        
        return false;
    }
       //Comprobamos si existe input de tipo email con la clase 'require y validamos su formato
    else if( $(idForm + " input[type='email'].required").length && !exprEmail.test($(idForm + " input[type='email'].required").val()) ){
        $("#noEmail").html('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>¡Formato invalido!</strong></div>');
        return false;
    }

     //Comprobamos si existe input de tipo tel con la clase 'require y validamos su formato
    else if( $(idForm + " input[id='cp'].required").length && !exprCp.test($(idForm + " input[id='cp'].required").val()) ){
        $("#noCp").html('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>¡Formato invalido!</strong>Tiene que contener 5 dígitos</div>');
        return false;
    }
    //Comprobamos si existe input de tipo tel con la clase 'require y validamos su formato
    else if( $(idForm + " input[id='telefono'].required").length && !exprTel.test($(idForm + " input[id='telefono'].required").val()) ){
        $("#noTelefono").html('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>¡Formato invalido!</strong>Tiene que contener 9 dígitos</div>');
        return false;
    }

     else if( $(idForm + " input[id='contraseña'].required").length && !exprContraseña.test($(idForm + " input[id='contraseña'].required").val()) ){
        $("#noContraseña").html('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>¡Formato invalido!</strong>Debe contener una mayúscula, una minuscula y al menos un número</div>');
        return false;
    }
 
   
    //Devuelve true si todo está correcto
    else {
        return true;
    }
}
function envioAjax(url,idForm,method,capa) {
    event.preventDefault();
    var selectorjQform = "#" + idForm;
    var validado = validarForm(selectorjQform);
    if(validado) {
        $.ajax({
            url:'../Controller/' +url,
            method: method,
            data: $(selectorjQform).serialize(),
            dataType: 'html',
            error: function(jqXHR,textStatus,strError){
                alert("Error de conexión. Por favor, vuelva a intentarlo");
            },
            success: function(data){
                if(data) {
                    if(data=='1'){
                      window.location.href = "principalUsuario.php";
                 }else if(data==0) {
                  $('#noregistro').html('<span style="font-weight:bold;color: red;">Alguno de los datos introducidos ya existe en nuestra base de datos. Pruebe de nuevo o inicie sesión</span>');
                 }
                }
            }
        });
    }
}

function comprobarPatronDni(){
    var exprDni= /\d{8}[a-z A-Z]$/;
    var DNI=document.getElementById("dni").value;
    //console.log(dni);
    if(  !exprDni.test(DNI ) ){
        $("#noDni").html('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>¡Formato invalido!</strong> Debe tener 8 números y una letra.</div>');
        return false;   
    }else {
        $("#noDni").html('<div class="alert alert-success "><button type="button" class="close" data-dismiss="alert">&times;</button><strong>¡Formato Correto!</strong></div>'); 
        return true;
    }
    }

function comprobarPatronEmail(){
  var exprEmail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var Email=document.getElementById("correo").value;
    //console.log(dni);
    if(  !exprEmail.test(Email ) ){
        $("#noEmail").html('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>¡Formato invalido!</strong></div>');
        return false;   
    }else {
        $("#noEmail").html('<div class="alert alert-success "><button type="button" class="close" data-dismiss="alert">&times;</button><strong>¡Formato Correto!</strong></div>'); 
        return true;
    }
    }

    function comprobarPatronTelefono(){
   var exprTel = /^[\d]{3}[-]*([\d]{2}[-]*){2}[\d]{2}$/;
    var Telefono=document.getElementById("telefono").value;
    //console.log(dni);
    if(  !exprTel.test(Telefono ) ){
        $("#noTelefono").html('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>¡Formato invalido!</strong>Debe contener 9 dígitos</div>');
        return false;   
    }else {
        $("#noTelefono").html('<div class="alert alert-success "><button type="button" class="close" data-dismiss="alert">&times;</button><strong>¡Formato Correto!</strong></div>'); 
        return true;
    }
    }

     function comprobarPatronContraseña(){
    var exprContraseña=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$/;
    var Contraseña=document.getElementById("contraseña").value;
    //console.log(dni);
    if(  !exprContraseña.test(Contraseña ) ){
        $("#noContraseña").html('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>¡Formato invalido!</strong>Debe Debe contener una mayúscula, una minuscula y al menos un número</div>');
        return false;   
    }else {
        $("#noContraseña").html('<div class="alert alert-success "><button type="button" class="close" data-dismiss="alert">&times;</button><strong>¡Formato Correto!</strong></div>'); 
        return true;
    }
    }
   
      function comprobarPatronCp(){
   var exprCp = /^(?:0[1-9]|[1-4]\d|5[0-2])\d{3}$/;
    var cp=document.getElementById("cp").value;
    //console.log(dni);
    if(  !exprCp.test(cp ) ){
        $("#noCp").html('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>¡Formato invalido!</strong>Debe contener 5 dígitos</div>');
        return false;   
    }else {
        $("#noCp").html('<div class="alert alert-success "><button type="button" class="close" data-dismiss="alert">&times;</button><strong>¡Formato Correto!</strong></div>'); 
        return true;
    }
    }
    

