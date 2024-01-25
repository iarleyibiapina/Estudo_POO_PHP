<?php

require_once('./Animal.php');

class Peixe extends Animal
{
    private $corEscama;

    public function soltarBolha()
    {
        echo "blu blu blu";
        return;
    }
    // sobre-escrevendo metodos da classe animal

    public function locomover()
    {
        echo "nadar";
        return;
    }
    public function alimentar()
    {
        echo "comer peixe";
        return;
    }
    public function emitirSom()
    {
        echo "peixe nao emite som";
        return;
    }
}
