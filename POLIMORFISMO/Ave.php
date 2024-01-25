<?php

require_once('./Animal.php');

class Ave extends Animal
{
    private $corPena;

    public function fazerNinho()
    {
        echo "passaro fazendo ninho";
        return;
    }
    // sobre-escrevendo metodos da classe animal

    public function locomover()
    {
        echo "Voar";
        return;
    }
    public function alimentar()
    {
        echo "comer ave";
        return;
    }
    public function emitirSom()
    {
        echo "pru pru";
        return;
    }
}
