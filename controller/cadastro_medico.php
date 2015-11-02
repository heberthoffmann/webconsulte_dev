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
@$id = $_POST['id'];

$medico = new Medico();
$medico->setCrn($crn);
$medico->setNome_completo($nome_completo);
$medico->setCpf($cpf);
$medico->setData_nasc($data_nasc);
$medico->setTelefone($telefone);
$medico->setEndereco($endereco);
$medico->setNome_user($nome_user);
$medico->setSenha($senha);
$medico->setId($id);


switch ($action) {
	case 'cadastrar_medico':
	$valor = $medico->cadastrar_medico();
	if($valor == 1){
		echo "<script> 
				alert('Cadastro concluido com sucesso!'); 
				window.location.href = 'http://localhost:8080/projects/webconsulte_dev/cadastro_medico.html'; 
			  </script>"; 
	}else{
		echo"Falha ao inserir!";
	}
	
	break;

	//Pesquisar Médico

	case 'select':
		$result = $medico->pesquisar_medico();
	//echo json_encode($result);
	//var_dump($result);
		for ($i=0; $i <= sizeof($result) ; $i++) { 
	  		echo "<tr><td>{$result[$i]['cod_medico']}</td><td>{$result[$i]['nome_completo']}</td><td>{$result[$i]['cpf']}</td><td><button onclick=\"visualizar_medico({$result[$i]['cod_medico']})\" class='btn btn-default'>Visualizar</button></td></tr>";		
		}
	
	break;	

	// Alterar Médico

	case 'alterar_medico':
		$valor = $medico->alterar_medico();
		if($valor == 1){
			echo "<script> 
			alert('Alterado com sucesso!'); 
			window.location.href = 'http://localhost:8080/projects/webconsulte_dev/cadastro_medico.html'; 
		</script>"; 
		}else
		{
		echo"Falha ao alterar!";
		}
	break;


	// Visualizar no form

	case 'visualizar_medico_id':
		
		$result = $medico->pesquisar_medico($id);
		echo json_encode($result);
	break;

	case 'excluir_medico':
		$result = $medico->excluir_medico();
		if($result == '1'){
			echo 'Exclusao Realizada';
		}
		else{
			echo 'Falha ao Excluir';
		}
	break;
}
?>