<?php  


class ConsultaDAO
{
	public function inserir_consulta($conn, $data_cons, $horario, $id_paciente, $id_medico, $valor){
		//exeuta uma série de instruções SQL
		$result = $conn->exec("INSERT INTO consulta(data_cons, horario, id_paciente, id_medico, valor) VALUES ('{$data_cons}','{$horario}', '{$id_paciente}', '{$id_medico}', '{$valor}') ");
		if ($result) {
			echo "Consulta cadastrada com sucesso!";
			header("Location:../Views/Pesquisar_consulta.php");
		}
	}

	public function alterar_consulta($conn, $data_cons, $horario, $id_paciente, $id_medico, $valor, $id){
		$result = $conn -> query("UPDATE consulta SET 
								data_cons = '{$data_cons}', horario = '{$horario}', id_paciente = '{$id_paciente}', id_medico = '{$id_medico}', valor = '{$valor}'
								WHERE id = '{$id}'");
		if ($result) {
			


echo "<script>alert('Usuario cadastrado com sucesso.');</script>";

			header("Location: ../Views/Listar_consulta.php");
		//	echo '<script>alert("Dados cadastrados!");</script>';
		}else{
			echo "erro ao atualizar";
		}	
	}

	public function listar_consulta_pac($conn){
		$result = $conn -> query("SELECT consulta.data_cons, consulta.horario, paciente.nome, medico.nome_med, consulta.valor, consulta.id FROM paciente  INNER JOIN consulta ON paciente.id = consulta.id_paciente
INNER JOIN medico ON medico.id = consulta.id_medico");
		return $result;
	}
	public function listar_consulta($conn){
		$result = $conn -> query("SELECT * FROM consulta");
		return $result;
	}

	public function deletar_consulta($conn, $id){
		$result = $conn -> query("DELETE FROM consulta 
							WHERE id = '{$id}'");
		if($result){
			$msg = "Deletado com sucesso!";
			header("Location: ../Views/Listar_consulta.php?msg=$msg");
		}else{
			$msg_erro = "Erro ao deletar.";
			header("Location: ../Views/Listar_consulta.php?msg_erro=$msg_erro");
		}
	}

	public function buscar_consulta_id($conn, $id)
	{
		$result = $conn -> query("SELECT * from consulta where id = '{$id}'");		
		return $result;
	}



}

?>