<?php
include"../model/class.connect.php";
include"../model/class.paciente.php";
@$action = $_POST['action'];
@$nome_completo = $_POST['nome_completo'];
@$cpf = $_POST['cpf'];
@$data_nasc = $_POST['data_nasc'];
@$telefone = $_POST['telefone'];
@$endereco = $_POST['endereco'];
@$nome_user = $_POST['nome_user'];
@$senha = $_POST['senha'];

$paciente = new Paciente();
$paciente->setNome_completo($nome_completo);
$paciente->setCpf($cpf);
$paciente->setData_nasc($data_nasc);
$paciente->setTelefone($telefone);
$paciente->setEndereco($endereco);
$paciente->setNome_user($nome_user);
$paciente->setSenha($senha);


switch ($action) {
	case 'cadastrar_paciente':
	$valor = $paciente->cadastrar_paciente();
	if($valor == 1){
		echo"Inserido com sucesso!";
	}else{
		echo"Falha ao inserir!";
	}
	
	break;
	
}



?>