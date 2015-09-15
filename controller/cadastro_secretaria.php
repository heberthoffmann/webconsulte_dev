<?php
include"../model/class.connect.php";
include"../model/class.secretaria.php";
@$action = $_POST['action'];
@$nome_completo = $_POST['nome_completo'];
@$cpf = $_POST['cpf'];
@$data_nasc = $_POST['data_nasc'];
@$telefone = $_POST['telefone'];
@$endereco = $_POST['endereco'];
@$nome_user = $_POST['nome_user'];
@$senha = $_POST['senha'];

$secretaria = new Secretaria();
$secretaria->setNome_completo($nome_completo);
$secretaria->setCpf($cpf);
$secretaria->setData_nasc($data_nasc);
$secretaria->setTelefone($telefone);
$secretaria->setEndereco($endereco);
$secretaria->setNome_user($nome_user);
$secretaria->setSenha($senha);


switch ($action) {
	case 'cadastrar_secretaria':
	$valor = $secretaria->cadastrar_secretaria();
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