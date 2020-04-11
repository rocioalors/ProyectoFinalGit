function lista_libros(valor){
	$.ajax({
		url:'../../Controller/verCatalogo.php',
		type:'POST',
		data:'valor='+valor+'&boton=search'

	}).done(function(result){
		console.log(result);
		//var valores=eval(resul);
		//alert( valores instanceof String);
	});
}