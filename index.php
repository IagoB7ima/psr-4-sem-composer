<?php

    require_once 'autoload.php';

    $jogador = new Jogador();
    $jogador->cadastrar('Stephen Curry', 34);

    $habilidade = new Habilidade();

    $habilidade->cadastrar('Arremesso de 3 pontos');

    $fixa = new Ficha();
    $fixa->cadastrar(
        array(
            'habilidade' => $habilidade,
        ), $jogador
    );

    echo $fixa->imprimir();

?>