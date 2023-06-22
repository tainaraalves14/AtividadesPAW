<?php
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $ano = $_POST['ano'];

    $host = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'biblioteca';

    $conexao = mysqli_connect($host, $usuario, $senha, $banco);

    $sql = "insert into livro (titulo,autor,ano) values ('$titulo','$autor','$ano') ";

    $resultado = mysqli_query($conexao,$sql);

    if ($resultado){
        echo 'Livro Cadastrado com Sucesso';
    }
    else {
        echo 'Erro ao Cadastrar o Livro';
    }
?>