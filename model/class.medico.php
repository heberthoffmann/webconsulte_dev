<?php
Class Medico extends Conn{
	private $crn;
	private $nome_completo;
	private $cpf;
	private $data_nasc;
	private $telefone;
	private $endereco;
	private $nome_user;
	private $senha;
	private $id;

	public function cadastrar_medico(){
		$conn =  parent::connect();
		$result = $conn->query("INSERT INTO medico (crn,nome_completo,cpf,data_nasc,telefone,endereco,nome_user,senha) VALUES ('".$this->getCrn()."','".$this->getNome_completo()."','".$this->getCpf()."','".$this->getData_nasc()."','".$this->getTelefone()."','".$this->getEndereco()."','".$this->getNome_user()."','".$this->getSenha()."')") or die(mysqli_error($conn)) ;
		if ($result){
			$m = 1;
		}else{
			$m = 0;
		}
		return $m;
	}


// Pesquisar Médico

	public function pesquisar_medico($id = null) {
		$conn =  parent::connect();
		if ($id == null) {
			$result = $conn->query("SELECT cod_medico, nome_completo, cpf FROM medico");
			$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
		}
		else{
			$result = $conn->query("SELECT * FROM medico WHERE cod_medico = {$id} limit 1" );
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		}
		return $row;
	}

// Alterar Médico

	public function alterar_medico(){
		$conn =  parent::connect();

		// campos update
		$crn = $this->getCrn();
		$nome_completo = $this->getNome_completo();
		$cpf = $this->getCpf();
		$senha = $this->getSenha();
		$data_nasc = $this->getData_nasc();
		$id = $this->getId();

		$result = $conn->query("UPDATE medico SET crn = \"$crn\", nome_completo = \"$nome_completo\", senha = \"$senha\", cpf = \"$cpf\", data_nasc = \"$data_nasc\" WHERE cod_medico = \"$id\"");
		if ($result){
			$m = 1;
		}else{
			$m = 0;
		}
		return $m;
	}

	//Deletar Médico

	public function excluir_medico(){
		$conn =  parent::connect();
		$id = $this->getId();
		$result = $conn->query("DELETE FROM medico WHERE cod_medico = {$id}");

		if ($result){
			$result = 1;
		}else{
			$result = 0;
		}
		return $result;
	}

	
	function setCrn($crn) { $this->crn = $crn; }
	function getCrn() { return $this->crn; }
	function setNome_completo($nome_completo) { $this->nome_completo = $nome_completo; }
	function getNome_completo() { return $this->nome_completo; }
	function setCpf($cpf) { $this->cpf = $cpf; }
	function getCpf() { return $this->cpf; }
	function setData_nasc($data_nasc) { $this->data_nasc = $data_nasc; }
	function getData_nasc() { return $this->data_nasc; }
	function setTelefone($telefone) { $this->telefone = $telefone; }
	function getTelefone() { return $this->telefone; }
	function setEndereco($endereco) { $this->endereco = $endereco; }
	function getEndereco() { return $this->endereco; }
	function setNome_user($nome_user) { $this->nome_user = $nome_user; }
	function getNome_user() { return $this->nome_user; }
	function setSenha($senha) { $this->senha = $senha; }
	function getSenha() { return $this->senha; }
	function setId($id) { $this->id = $id; }
	function getId() { return $this->id; }



}
?>


