<?php

require_once('./Animal.php');

class Mamifero extends Animal
{
    private $corPelo;

    // por estar estendendo classe Animal, precisa definir aqui os metodos

    public function locomover()
    {
        echo "Andar";
        return;
    }
    public function alimentar()
    {
        echo "comer";
        return;
    }
    public function emitirSom()
    {
        echo "som de mamifero";
        return;
    }
}
