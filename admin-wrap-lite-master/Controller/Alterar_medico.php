<?php
	
	$id = $_POST['id'];
	$nome_med = $_POST['nome_med'];
	$crm = $_POST['crm'];
	$telefone = $_POST['telefone'];
	$email = $_POST['email'];


	require_once '../Model/conexao.php';
	require_once '../Model/MedicoDAO.php';
	require_once '../Controller/Medico.php';


	$medico = new MedicoDAO();
	$med = new Medico();

	$med -> setNome_med($nome_med);
	$med -> setCrm($crm);
	$med -> setTelefone($telefone);
	$med -> setEmail($email);


	$medico -> alterar_medico($conn, $med -> getCrm(), $med -> getNome_med(), $med -> getTelefone(), $med -> getEmail(), $id);




?>