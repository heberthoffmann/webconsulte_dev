
// Cadastra os dados do paciente

$(document).ready(function() {
	$(function () {
		$('#form_paciente').on('submit', function (e) {
			e.preventDefault();
			$.ajax({
				type: 'post',
				url: 'http://localhost:8080/projects/webconsulte_dev/controller/cadastro_paciente.php',
				data: $('#form_paciente').serialize(),
				success: function (data) {
					$('#resultado').html(data);
					console.log(data);
				}
			});
		});
	});

// Cadastra os dados do médico

$(function () {
	$('#form_medico').on('submit', function (e) {
		e.preventDefault();
		$.ajax({
			type: 'post',
			url: 'http://localhost:8080/projects/webconsulte_dev/controller/cadastro_medico.php',
			data: $('#form_medico').serialize(),
			success: function (data) {
				$('#resultado').html(data);
				console.log(data);
			}
		});
	});
});

// Cadastra os dados da secretária

$(function () {
	$('#form_secretaria').on('submit', function (e) {
		e.preventDefault();
		$.ajax({
			type: 'post',
			url: 'controller/cadastro_secretaria.php',
			data: $('#form_secretaria').serialize(),
			success: function (data) {
				$('#resultado').html(data);
				console.log(data);
			}
		});
	});
});

});

// Preecher campos secretária

function visualizar_secretaria(id){
	$.ajax({
		type: 'post',
		dataType: 'json',
		url: 'controller/cadastro_secretaria.php',
		data: {
			action:'visualizar_secretaria_id',
			id: id
		},
		success: function (data) {
			$("#nome_completo").val(data.nome_completo);
			$("#data_nasc").val(data.data_nasc);
			$("#cpf").val(data.cpf);
			$("#telefone").val(data.telefone);
			$("#endereco").val(data.endereco);
			$("#nome_user").val(data.nome_user);
			$("#senha").val(data.senha);
			console.log(data);
			
			
		}
	});
	
	
}






