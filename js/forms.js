
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

// Pesquisar secretária

	
});






