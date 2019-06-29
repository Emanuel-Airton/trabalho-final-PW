<?php  


class MedicoDAO
{
	public function inserir_medico($conn, $crm, $nome_med, $telefone, $email){
		//exeuta uma série de instruções SQL
		$result = $conn->exec("INSERT INTO medico(crm, nome_med, telefone, email) VALUES ('{$crm}', '{$nome_med}','{$telefone}', '{$email}') ");
		if ($result) {
			echo "Medico cadastrado com sucesso!";
			header("Location: ../Views/Pesquisar_medico.php");
		}
	}

	public function alterar_medico($conn, $crm, $nome_med, $telefone, $email, $id){
		$result = $conn -> query("UPDATE medico SET 
								crm = '{$crm}', nome_med = '{$nome_med}', telefone = '{$telefone}', email = '{$email}'
								WHERE id = '{$id}'");
		if ($result) {
			header("Location: ../Views/Pesquisar_medico.php");
		}else{
			echo "Erro ao atualizar!";
		}	
	}

	public function listar_medico($conn){
		$result = $conn -> query("SELECT * FROM medico");
		return $result;
	}

	public function deletar_medico($conn, $id){
		$result = $conn -> query("DELETE FROM medico 
							WHERE id = '{$id}'");
		if($result){
			$msg = "Deletado com sucesso!";
			header("Location: ../Views/Listar_medico.php?msg=$msg");
		}else{
			$msg_erro = "Erro ao deletar.";
			header("Location: ../Views/Listar_medico.php?msg_erro=$msg_erro");
		}
	}



	public function buscar_medico_id($conn, $id)
	{
		$result = $conn -> query("SELECT * from medico where id = '{$id}'");		
		return $result;
	}



}

?>