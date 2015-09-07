<?php


Class Paciente extends Conn{
	private $nome_completo;
	private $cpf;
	private $data_nasc;
	private $telefone;
	private $endereco;
	private $nome_user;
	private $senha;

	public function cadastrar_paciente(){
		$conn =  parent::connect();
    	$result = $conn->query("INSERT INTO paciente (nome,cpf,data_nasc,telefone,endereco,nome_user,senha) VALUES ('".$this->getNome_completo()."','".$this->getCpf()."','".$this->getData_nasc()."','".$this->getTelefone()."','".$this->getEndereco()."','".$this->getNome_user()."','".$this->getSenha()."')");
    	if ($result){
    		$m = 1;
    	}else{
    		$m = 0;
    	}
    	return $m;
	}

	
	function setNome_completo($nome_completo) { $this->nome_completo = $nome_completo; }
	function getNome_completo() {
	 return $this->nome_completo;
	 }
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



}
?>