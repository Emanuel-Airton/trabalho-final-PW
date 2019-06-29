<?php
	
	$id = $_POST['id'];
	$data_cons = $_POST['data_cons'];
	$horario = $_POST['horario'];
	$id_paciente = $_POST['id_paciente'];
	$id_medico = $_POST['id_medico'];
	$valor = $_POST['valor'];


	require_once '../Model/conexao.php';
	require_once '../Model/ConsultaDAO.php';
	require_once '../Controller/Consulta.php';


	$consulta = new ConsultaDAO();
	$cons = new Consulta();

	$cons -> setData_cons($data_cons);
	$cons -> setHorario($horario);
	$cons -> setId_paciente($id_paciente);
	$cons -> setId_medico($id_medico);
	$cons -> setValor($valor);


	$consulta -> alterar_consulta($conn, $cons -> getData_cons(), $cons -> getHorario(), $cons -> getId_paciente(), $cons -> getId_medico(), $cons -> getValor(), $id);


?>