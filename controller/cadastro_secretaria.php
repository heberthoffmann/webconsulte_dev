<?php
header("Access-Control-Allow-Origin: *");
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
@$id = $_POST['id'];

$secretaria = new Secretaria();
$secretaria->setNome_completo($nome_completo);
$secretaria->setCpf($cpf);
$secretaria->setData_nasc($data_nasc);
$secretaria->setTelefone($telefone);
$secretaria->setEndereco($endereco);
$secretaria->setNome_user($nome_user);
$secretaria->setSenha($senha);
$secretaria->setId($id);


switch ($action) {
	case 'cadastrar_secretaria':
		$valor = $secretaria->cadastrar_secretaria();
		if($valor == 1){
			echo "<script> 
			alert('Cadastro concluido com sucesso!'); 
			window.location.href = 'http://localhost:8080/projects/webconsulte_dev/cadastro_secretaria.html'; 
		</script>"; 
		}else
		{
		echo"Falha ao inserir!";
		}
	break;

	//Pesquisar secretaria

	case 'select':
		$result = $secretaria->pesquisar_secretaria();
	//echo json_encode($result);
	//var_dump($result);
		for ($i=0; $i <= sizeof($result) ; $i++) { 
	  		echo "<tr><td>{$result[$i]['cod_secretaria']}</td><td>{$result[$i]['nome_completo']}</td><td>{$result[$i]['cpf']}</td><td><button onclick=\"visualizar_secretaria({$result[$i]['cod_secretaria']})\" class='btn btn-default'>Visualizar</button></td></tr>";		
		}
	
	break;	

	// Alterar secretária

	case 'alterar_secretaria':
		$valor = $secretaria->alterar_secretaria();
		if($valor == 1){
			echo "<script> 
			alert('Alterado com sucesso!'); 
			window.location.href = 'http://localhost:8080/projects/webconsulte_dev/cadastro_secretaria.html'; 
		</script>"; 
		}else
		{
		echo"Falha ao alterar!";
		}
	break;


	// Visualizar no form

	case 'visualizar_secretaria_id':
		
		$result = $secretaria->pesquisar_secretaria($id);
		echo json_encode($result);
	break;

	case 'excluir_secretaria':
		$result = $secretaria->excluir_secretaria();
		if($result == '1'){
			echo 'Exclusao Realizada';
		}
		else{
			echo 'Falha ao Excluir';
		}
	break;

}

	//Deletar secretaria
	




?>