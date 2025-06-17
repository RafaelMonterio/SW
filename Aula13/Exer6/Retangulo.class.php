<?php

class Retangulo {
    private $largura;
    private $altura;

    public function setLargura($l) {
        $this->largura = $l;
    }

    public function setAltura($a) {
        $this->altura = $a;
    }

    public function getLargura() {
        return $this->largura;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function Area() {
        return $this->largura * $this->altura;
    }

    public function Perimetro() {
        return 2 * ($this->largura + $this->altura);
    }
}
?>