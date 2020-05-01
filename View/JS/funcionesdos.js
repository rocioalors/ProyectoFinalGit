 function borrarPrestamo(id,id_libro){
    $.ajax({
        url: "../Controller/usuDevolverPréstamo.php",
        type: "POST",
        data: "id="+id+"&id_libro="+id_libro,
        success: function(resp){
        $('#resultado').html(resp)
        }       
    });
}

