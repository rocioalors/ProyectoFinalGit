<script language="JavaScript">
function confirmar ( mensaje ) {
return confirm( mensaje );
}

 function Validar(user, pass)
        {
            $.ajax({
                url: "../Controller/compruebaLogin.php",
                type: "POST",
                data: "user="+user+"&pass="+pass,
                success: function(resp){
                $('#resultado').html(resp)
                }       
            });
        }
</script>
