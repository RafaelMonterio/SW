<?php
include_once "Livro.class.php";

$livro1 = new Livro("Ortodoxia", "G. K. Chesterton");

echo $livro1->exibirStatus() . "<br>";

$livro1->emprestar();
echo $livro1->exibirStatus() . "<br>";

$livro1->devolver();
echo $livro1->exibirStatus() . "<br>";

$livro1->emprestar();
echo $livro1->exibirStatus() . "<br>";

$livro1->devolver();
echo $livro1->exibirStatus() . "<br>";

?>