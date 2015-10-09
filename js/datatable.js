$(document).ready(function($){
	var urlArray = window.location.pathname.split( '/' );
	var url = urlArray[3];

	// Estrutura do Site
	switch(url){
		case 'cadastro_secretaria.html':
		buscar_secretaria();
		break;


	}
});




function dataTable(){
	$("#table_id").DataTable();
}

function buscar_secretaria(){	
		$.ajax({
			type: 'POST',
			dataType: 'html',
			url: 'controller/cadastro_secretaria.php',
			data: {			
				action:'select'
			},
			beforeSend: function(){
				$('#msg').append("<img src='imagens/load.gif' width='50px'>");
			},
			success: function(data, response, req) {
				
				$('#msg').empty();
				//console.log(data);
				$('#result_secretaria').empty();
				$('#result_secretaria').append(data);
				 //dataTable();

				 $('#table_id').DataTable();
				
			}
		});
}