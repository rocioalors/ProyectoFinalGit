$(document).on('ready',function(){       
    $('#ingresar').click(function(){
        
        $.ajax({                        
           type: "POST",                 
           url: "../Controller/compruebaLogin.php",                    
           data: $("#formulario").serialize(), 
           success: function(data)             
           {
              $('#resultado').html(resp)               
           }
       });
    });
});