<?php  

class Medico{

	private $crm;
	private $nome_med;
	private $telefone;
	private $email;

	public function setCrm($crm){
		if (is_string($crm)) {
			$this -> crm = $crm;
		}else{
			echo "verifique o crm";
		}
	}
	public function getCrm(){
		return $this -> crm;
	}
	public function setNome_med($nome_med){
		if (is_string($nome_med)) {
			$this -> nome_med = $nome_med;
		}else{
			echo "verifique o nome";
		}
	}
	public function getNome_med(){
		return $this -> nome_med;
	}
	public function setTelefone($telefone){
		if (is_string($telefone)) {
			$this -> telefone = $telefone;
		}else{
			echo "verifique o telefone";
		}
	}
	public function getTelefone(){
		return $this -> telefone;
	}
	public function setEmail($email){
		if (is_string($email)) {
			$this -> email = $email;
		}else{
			echo "verifique o email";
		}
	}
	public function getEmail(){
		return $this -> email;
	}

}













?>