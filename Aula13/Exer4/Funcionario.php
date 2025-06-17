<?php
include_once "Funcionario.class.php";

$func = new Funcionario("Rafael", 2000);

echo $func->exibirInformacoes() . "<br>";

$func->aumentarSalario(10);

echo $func->exibirInformacoes() . "<br>";
?>