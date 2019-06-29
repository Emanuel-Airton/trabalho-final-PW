<?php

// pegando o id da categoria
$id = $_GET['id'];

require_once '../Model/conexao.php';
require_once '../Model/PacienteDAO.php';

$cd = new PacienteDAO();

$cd -> deletar_paciente($conn, $id);
