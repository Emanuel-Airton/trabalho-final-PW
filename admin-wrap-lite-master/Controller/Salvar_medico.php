<?php

//$paciente = array();
//$nome['nome'] = $_POST['nome'];
$crm = $_POST['crm'];
$nome_med = $_POST['nome_med'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

require_once '../Model/conexao.php';
require_once '../Controller/Medico.php';
require_once '../Model/MedicoDAO.php';


$medicos = new Medico();
$cs = new MedicoDAO();

$medicos-> setCrm($crm);
$medicos -> setNome_med($nome_med); 
$medicos -> setTelefone($telefone);
$medicos -> setEmail($email);

$cs -> inserir_medico($conn, $medicos->getCrm(),  $medicos->getNome_med(), $medicos->getTelefone(), $medicos->getEmail());

?>