<?php
// Conexão com o banco de dados
require_once "conexao.php";

// Consulta SQL para selecionar todos os alunos
$sql = "SELECT * FROM alunos";
$result = mysqli_query($conn, $sql);

// Exibição dos dados em uma tabela HTML
echo "<h2>Dados dos Alunos</h2>";
echo "<table>";
echo "<tr><th>ID</th><th>Nome</th><th>Matrícula</th><th>Data de Nascimento</th><th>Ações</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>".$row['id']."</td><td>".$row['nome']."</td><td>".$row['matricula']."</td><td>".$row['data_nascimento']."</td><td><a href='editar_aluno.php?id=".$row['id']."'>Editar</a> | <a href='excluir_aluno.php?id=".$row['id']."'>Excluir</a></td></tr>";
}
echo "</table>";

// Fechamento da conexão com o banco de dados
mysqli_close($conn);
?>