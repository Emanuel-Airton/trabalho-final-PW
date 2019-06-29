<?php

// pegando o id da categoria
$id = $_GET['id'];

require_once '../Model/conexao.php';
require_once '../Model/ConsultaDAO.php';

$md = new ConsultaDAO();

$md -> deletar_consulta($conn, $id);
