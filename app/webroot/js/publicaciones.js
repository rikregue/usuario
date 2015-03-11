var Publicacion = {
	guardar: function(){
		var formulario = $("#frmPublicacion");
		var url = formulario.attr('action');
		console.log(url);
		$.post(url, formulario.serialize(), function(result){
			console.log(result);
		});
	}
} 


var Autor = {
	guardar: function(){
		var formulario = $("#frmAutor");
		var url = formulario.attr('action');
		console.log(url);
		$.post(url, formulario.serialize(), function(result){
			console.log(result);
		});
	}
} 