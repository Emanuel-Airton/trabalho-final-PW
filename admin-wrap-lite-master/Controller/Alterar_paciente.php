<?php
	
	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$prontuario = $_POST['prontuario'];
	$cpf = $_POST['cpf'];
	$telefone = $_POST['telefone'];
	$email = $_POST['email'];
	$endereco = $_POST['endereco'];


	require_once '../Model/conexao.php';
	require_once '../Model/PacienteDAO.php';
	require_once '../Controller/Paciente.php';


	$paciente = new PacienteDAO();
	$pac = new Paciente();

	$pac -> setNome($nome);
	$pac -> setProntuario($prontuario);
	$pac -> setCpf($cpf);
	$pac -> setTelefone($telefone);
	$pac -> setEmail($email);
	$pac -> setEndereco($endereco);


	$paciente -> alterar_paciente($conn, $pac -> getNome(), $pac -> getProntuario(), $pac -> getCpf(), $pac -> getTelefone(), $pac -> getEmail(), $pac -> getEndereco(), $id);




?>