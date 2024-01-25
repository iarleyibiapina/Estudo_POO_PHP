<?php

require_once('./Ave.php');

class Arara extends Ave
{
    public function locomover()
    {
        echo "arara voando";
        return;
    }
    public function alimentar()
    {
        echo "arara comendo";
        return;
    }
    public function emitirSom()
    {
        echo "arara repetindo";
        return;
    }
}
