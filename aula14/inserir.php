<?php
include "conexao.php";

$titulo = "O Príncipe";
$autor = "Nicolau Maquíavel ";
$ano = 1532;

$sql = "INSERT INTO livros (titulo, autor, ano) VALUES ('$titulo', '$autor', $ano)";

if (mysqli_query($conexao, $sql)) {
    echo "Livro inserido com sucesso!";
} else {
    echo "Erro: " . mysqli_error($conexao);
}

mysqli_close($conexao);
?>