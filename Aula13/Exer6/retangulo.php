<?php
include_once "Retangulo.class.php";

$ret = new Retangulo();

$ret->setLargura(5);
$ret->setAltura(20);

echo "Largura: " . $ret->getLargura() . "<br>";
echo "Altura: " . $ret->getAltura() . "<br>";
echo "Area: " . $ret->Area() . "<br>";
echo "Perímetro: " . $ret->Perimetro() . "<br>";
echo "<hr>";
?>