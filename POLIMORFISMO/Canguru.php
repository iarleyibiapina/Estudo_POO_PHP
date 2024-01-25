<?php

require_once('./Mamifero.php');

class Canguru extends Mamifero
{
    // nesta classe, vai haver sobrescrição de sobrescrição, pois o canguru possui uma forma 
    // diferente de se locomover
    public function usarBolsa()
    {
        return;
    }

    public function locomover()
    {
        echo "pular";
        return;
    }
    public function alimentar()
    {
        echo "comer";
        return;
    }
    public function emitirSom()
    {
        echo "som de canguru";
        return;
    }
}
