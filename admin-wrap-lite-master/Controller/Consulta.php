<?php  

class Consulta{

	private $data_cons;
	private $horario;
	private $id_paciente;
	private $id_medico;
	private $valor;

	public function setData_cons($data_cons){
		if (is_string($data_cons)) {
			$this -> data_cons = $data_cons;
		}else{
			echo "verifique a data";
		}
	}
	public function getData_cons(){
		return $this -> data_cons;
	}
	public function setHorario($horario){
		if (is_string($horario)) {
			$this -> horario = $horario;
		}else{
			echo "verifique o horario";
		}
	}
	public function getHorario(){
		return $this -> horario;
	}
	public function setId_paciente($id_paciente){
		if (is_string($id_paciente)) {
			$this -> id_paciente = $id_paciente;
		}else{
			echo "verifique o ID do paciente";
		}
	}
	public function getId_paciente(){
		return $this -> id_paciente;
	}
	public function setId_medico($id_medico){
		if (is_string($id_medico)) {
			$this -> id_medico = $id_medico;
		}else{
			echo "verifique o ID do medico";
		}
	}
	public function getId_medico(){
		return $this -> id_medico;
	}
	public function setValor($valor){
		if (is_string($valor)) {
			$this -> valor = $valor;
		}else{
			echo "verifique o valor";
		}
	}
	public function getValor(){
		return $this -> valor;
	}

}













?>