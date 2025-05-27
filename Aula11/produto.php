<?php
include_once 'produto.class.php';


$produto = new Produto("PC", 2000, 20);


$produto->adicionarEstoque(5);
$produto->removerEstoque(3);


$produto->mostrarDetalhes();
?>
