<?php

require_once('./Peixe.php');

class Goldfish extends Peixe
{
    public function locomover()
    {
        echo "nadando rapido";
        return;
    }
    public function alimentar()
    {
        echo "comer peixinhos";
        return;
    }
    public function emitirSom()
    {
        echo "peixinho nao emitir";
        return;
    }
}
