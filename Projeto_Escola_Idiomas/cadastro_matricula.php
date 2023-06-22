<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Matrículas</title>
</head>
<body>
	<h1>Cadastro de Matrículas</h1>
	<form method="POST" action="processa_matricula.php">
		<label>Aluno:</label><br>
		<select name="aluno_id">
			<?php
			// conexão com o banco de dados
			require_once "conexao.php";

			// consulta SQL para buscar os alunos
			$sql = "SELECT * FROM alunos";
			// executa a consulta SQL e armazena o resultado em uma variável
			$resultado = $conn->query($sql);
			// itera pelos resultados e cria as opções do select
			while ($linha = $resultado->fetch_assoc()) {
				echo "<option value='" . $linha["id"] . "'>" . $linha["nome"] . "</option>";
			}
						
			?>
		</select><br><br>
		<label>Turma:</label><br>
		<select name="turma_id">
			<?php
			// conexão com o banco de dados
			require_once "conexao.php";

			// consulta SQL para buscar as turmas
			$sql = "SELECT * FROM turmas";
			// executa a consulta SQL e armazena o resultado em uma variável
			$resultado = $conn->query($sql);
			// itera pelos resultados e cria as opções do select
			while ($linha = $resultado->fetch_assoc()) {
				echo "<option value='" . $linha["id"] . "'>" . $linha["nome"] . "</option>";
			}
			// fecha a conexão com o banco de dados
			$conn->close();
			?>
		</select><br><br>
		<label>Data de Matrícula:</label><br>
		<input type="date" name="data_matricula"><br><br>
		<input type="submit" value="Cadastrar">
	</form>
</body>
</html>