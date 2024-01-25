<?php

require_once('./Reptil.php');

class Tartaruga extends Reptil
{
    public function locomover()
    {
        echo "andar devagar";
        return;
    }
    public function alimentar()
    {
        echo "comer algas";
        return;
    }
    public function emitirSom()
    {
        echo "tartaruga nao emite som";
        return;
    }
}
