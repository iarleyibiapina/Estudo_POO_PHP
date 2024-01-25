<?php

require_once('./Mamifero.php');

class Cachorro extends Mamifero
{
    public function enterrarOsso()
    {
        echo "enterrando osso";
        return;
    }
    public function abanarRabo()
    {
        echo "abanando rabo";
        return;
    }
    public function locomover()
    {
        echo "Andar quatro patas";
        return;
    }
    public function alimentar()
    {
        echo "comer ração";
        return;
    }
    public function emitirSom()
    {
        echo "au au au au";
        return;
    }
}
