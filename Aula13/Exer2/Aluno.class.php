<?php

class Aluno {
    private $Nome;
    private $nota1;
    private $nota2;

    public function __construct($n, $n1, $n2) {
        $this->Nome = $n;
        $this->nota1 = $n1; 
        $this->nota2 = $n2;
    }

    public function getNome() {
        return $this->Nome;
    }
    public function getNota1() {
        return $this->nota1;
    }
    public function getNota2() {
        return $this->nota2; 
    }

    public function calculamedia($n1, $n2) {
        $media = ($n1 + $n2) / 2;
        return $media;
    }

    public function verificarsituacao($media) {
        if ($media >= 7) {
            return "Aprovado";
        } else {
            return "Reprovado";
        }
    }
}
?>