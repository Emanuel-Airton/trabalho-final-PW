<?php

//$paciente = array();
//$nome['nome'] = $_POST['nome'];
$nome = $_POST['nome'];
$prontuario = $_POST['prontuario'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];


require_once '../Model/conexao.php';
require_once '../Controller/Paciente.php';
require_once '../Model/PacienteDAO.php';

  
$pacientes = new Paciente();
$cs = new PacienteDAO();

$pacientes-> setNome($nome);
$pacientes -> setProntuario($prontuario); 
$pacientes -> setCpf($cpf); 
$pacientes -> setTelefone($telefone);
$pacientes -> setEmail($email);
$pacientes -> setEndereco($endereco);    

$cs -> inserir_paciente($conn, $pacientes->getNome(), $pacientes->getProntuario(), $pacientes->getCpf(), $pacientes->getTelefone(), $pacientes->getEmail(), $pacientes->getEndereco());

?>