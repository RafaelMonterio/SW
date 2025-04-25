<?php

    class Pessoas{

        public $Nome;
        public $Peso;
        public $Altura;

        public function Mostrardados(){
            echo "Nome de Pessoas: ". $this->Nome."<br>";
            echo "Peso de Pessoas: ". $this->Peso."<br>";
            echo "Altura de Pessoas: ". $this->Altura."<br>";
            echo "<hr>";
        }
    }
    ?>