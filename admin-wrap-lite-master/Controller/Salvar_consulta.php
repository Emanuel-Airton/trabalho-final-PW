<?php

//$paciente = array();
//$nome['nome'] = $_POST['nome'];
$data_cons = $_POST['data_cons'];
$horario = $_POST['horario'];
$id_paciente = $_POST['id_paciente'];
$id_medico = $_POST['id_medico'];
$valor = $_POST['valor'];

require_once '../Model/conexao.php';
require_once '../Controller/Consulta.php';
require_once '../Model/ConsultaDAO.php';


$consulta = new Consulta();
$cons = new ConsultaDAO();

$consulta-> setData_cons($data_cons);
$consulta -> setHorario($horario); 
$consulta -> setId_paciente($id_paciente);
$consulta -> setId_medico($id_medico);
$consulta -> setValor($valor);

$cons -> inserir_consulta($conn, $consulta->getData_cons(),  $consulta->getHorario(), $consulta->getId_paciente(), $consulta->getId_medico(), $consulta->getValor());

?>