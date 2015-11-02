$(document).ready(function($){
	var urlArray = window.location.pathname.split( '/' ); // Pega URL e joga a URL dentro de um array
	
	var url = urlArray[3]; 


	// Estrutura 
	switch(url){
		case 'cadastro_secretaria.html':
		buscar_secretaria();
		break;

		case 'cadastro_medico.html':
		buscar_medico();
		break;
	}
});



function dataTable(){
	$("#table_id").DataTable();
}

	//Médico

function buscar_medico(){	
		$.ajax({
			type: 'POST',
			dataType: 'html',
			url: 'controller/cadastro_medico.php',
			data: {			
				action:'select'
			},
			beforeSend: function(){
				$("#table_id").hide();
				$('#msg').append("<center><img src='imagens/loader.gif' width='50px'></center>");
			},
			success: function(data, response, req) {
				
				$('#msg').empty();
				//console.log(data);
				$('#result_medico').empty();
				$('#result_medico').append(data);
				 //dataTable();

				 $("#table_id").show();
				 $('#table_id').DataTable();
				
			}
		});
}

	//Secretária

function buscar_secretaria(){	
		$.ajax({
			type: 'POST',
			dataType: 'html',
			url: 'controller/cadastro_secretaria.php',
			data: {			
				action:'select'
			},
			beforeSend: function(){
				$("#table_id").hide();
				$('#msg').append("<center><img src='imagens/loader.gif' width='50px'></center>");
			},
			success: function(data, response, req) {
				
				$('#msg').empty();
				//console.log(data);
				$('#result_secretaria').empty();
				$('#result_secretaria').append(data);
				 //dataTable();

				 $("#table_id").show();
				 $('#table_id').DataTable();
				
			}
		});
}

