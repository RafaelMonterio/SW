<?php
    include_once 'Pessoas.class.php';

    // Instancia
    $pessoa1 = new Pessoas;

    //Atribuição
    $pessoa1->Nome = 'Fulano da Silva';
    $pessoa1->Peso = 320;
    $pessoa1->Altura = 1.40;

    $pessoa1->Mostrardados();
    



?>