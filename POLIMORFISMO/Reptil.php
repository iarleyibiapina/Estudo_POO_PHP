<?php

require_once("./Animal.php");

class Reptil extends Animal
{
    private $corEscama;
    // sobre-escrevendo metodos da classe animal
    public function locomover()
    {
        echo "escalar";
        return;
    }
    public function alimentar()
    {
        echo "comer planta";
        return;
    }
    public function emitirSom()
    {
        echo "som lagartixa";
        return;
    }
}
