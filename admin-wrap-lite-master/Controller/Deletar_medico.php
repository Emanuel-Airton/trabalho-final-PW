<?php

// pegando o id da categoria
$id = $_GET['id'];

require_once '../Model/conexao.php';
require_once '../Model/MedicoDAO.php';

$md = new MedicoDAO();

$md -> deletar_medico($conn, $id);
