
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
	$('#cadastrar_secretaria').on('click', function (e) {
		e.preventDefault();
		data = $('#form_secretaria').serialize();
		$.ajax({
			type: 'post',
			url: 'controller/cadastro_secretaria.php',
			data: data+'&action=cadastrar_secretaria',
			success: function (data) {
				$('#resultado').html(data);
				console.log(data);
			}
		});
	});
});

// alterar secretaria
$(function () {
	$('#alterar_secretaria').on('click', function (e) {
		e.preventDefault();
		data = $('#form_secretaria').serialize();
		$.ajax({
			type: 'post',
			url: 'controller/cadastro_secretaria.php',
			data: data+'&action=alterar_secretaria',
			success: function (data) {
				$('#resultado2').html(data);
				console.log(data);
			}
		});
	});
});

//excluir secretaria
$(function () {
	$('#excluir_secretaria').on('click', function (e) {
		e.preventDefault();
		var id = $('#id').val();

		$.ajax({
			type: 'post',
			url: 'controller/cadastro_secretaria.php',
			data:{
			 action:'excluir_secretaria',
			 id:id
			},
			success: function (data) {
				//$('#resultado').append(data);
				alert(data);
				buscar_secretaria();
			$("#id").val('');
			$("#nome_completo").val('');
			$("#data_nasc").val('');
			$("#cpf").val('');
			$("#telefone").val('');
			$("#endereco").val('');
			$("#nome_user").val('');
			$("#senha").val('');
			}
		});
	});
});

}); //fim ready



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
			$("#id").val(data.cod_secretaria);
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






