<?php
// Conexão com o banco de dados
require_once "conexao.php";

// Verifica se o ID do aluno foi informado
if (isset($_GET['id'])) {
    // Obtém o ID do aluno
    $id = $_GET['id'];
    
    // Prepara a consulta SQL para excluir o registro
    $sql = "DELETE FROM alunos WHERE id = $id";
    
    // Executa a consulta SQL
    if (mysqli_query($conn, $sql)) {
        // Redireciona para a página de dados dos alunos
        header("Location: dados_alunos.php");
        exit();
    } else {
        echo "Erro ao excluir o aluno: " . mysqli_error($conn);
    }
} else {
    echo "ID do aluno não informado.";
}

// Fechamento da conexão com o banco de dados
mysqli_close($conn);
?>