<?php
include"../model/class.connect.php";
include"../model/class.medico.php";
@$action = $_POST['action'];
@$crn = $_POST['crn'];
@$nome_completo = $_POST['nome_completo'];
@$cpf = $_POST['cpf'];
@$data_nasc = $_POST['data_nasc'];
@$telefone = $_POST['telefone'];
@$endereco = $_POST['endereco'];
@$nome_user = $_POST['nome_user'];
@$senha = $_POST['senha'];

$medico = new Medico();
$medico->setCrn($crn);
$medico->setNome_completo($nome_completo);
$medico->setCpf($cpf);
$medico->setData_nasc($data_nasc);
$medico->setTelefone($telefone);
$medico->setEndereco($endereco);
$medico->setNome_user($nome_user);
$medico->setSenha($senha);


switch ($action) {
	case 'cadastrar_medico':
	$valor = $medico->cadastrar_medico();
	if($valor == 1){
		echo "<script> 
				alert('Cadastro concluido com sucesso!'); 
				window.location.href = 'http://localhost:8080/projects/webconsulte_dev/index.html'; 
			  </script>"; 
	}else{
		echo"Falha ao inserir!";
	}
	
	break;
}



?>