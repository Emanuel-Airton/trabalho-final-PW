<?php  


class PacienteDAO
{
	public function inserir_paciente($conn, $nome, $prontuario, $cpf, $telefone, $email, $endereco){
		//exeuta uma série de instruções SQL
		$result = $conn->exec("INSERT INTO paciente(nome, prontuario, cpf, telefone, email, endereco) VALUES ('{$nome}','{$prontuario}', '{$cpf}', '{$telefone}', '{$email}', '{$endereco}') ");
		if ($result) {
			echo "Paciente cadastrado com sucesso!";
			header("Location: ../Views/Pesquisar_paciente.php");
		}
	}

	public function alterar_paciente($conn, $nome, $prontuario, $cpf, $telefone, $email, $endereco, $id){
		$result = $conn -> query("UPDATE paciente SET 
								nome = '{$nome}', prontuario = '{$prontuario}', cpf = '{$cpf}', telefone = '{$telefone}', email = '{$email}', endereco = '{$endereco}'
								WHERE id = '{$id}'");
		if ($result) {
			$msg = "alterado com sucesso!";
			header("Location: ../Views/Pesquisar_paciente.php");
		}else{
			$msg_erro = "Erro ao atualizar.";
			header("Location: ../Views/Listar_paciente.php?msg_erro=$msg_erro");
		}	
	}

	public function listar_paciente($conn){
		$result = $conn -> query("SELECT * FROM paciente");
		return $result;
	}

	public function deletar_paciente($conn, $id){
		$result = $conn -> query("DELETE FROM paciente 
							WHERE id = '{$id}'");
		if($result){
			//$msg = "Deletado com sucesso!";
			header("Location: ../Views/Pesquisar_paciente.php");
		}else{
			
			header("Location: ../Views/Pesquisar_paciente.php");
		}
	}

	public function buscar_paciente_id($conn, $id)
	{
		$result = $conn -> query("SELECT * from paciente where id = '{$id}'");		
		return $result;
	}



}

?>