<?php
require_once "conexao.php";

// Verificando se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebendo as informações do formulário
    $nome = $_POST["nome"];
    $periodo = $_POST["periodo"];
    $professor_id = $_POST["professor"];

    // Query para inserir a nova turma no banco de dados
    $sql = "INSERT INTO turmas (nome, periodo, professor_id) VALUES ('$nome', '$periodo', '$professor_id')";

    if (mysqli_query($conn, $sql)) {
        echo "Turma cadastrada com sucesso!";
    } else {
        echo "Erro ao cadastrar turma: " . mysqli_error($conn);
    }
}

// Fechando conexão
$conn->close();
?>
