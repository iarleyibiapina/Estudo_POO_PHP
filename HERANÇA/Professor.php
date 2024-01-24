<?php
// superclasse Pessoas
require_once('./Pessoas.php');
// classe folha (ultima de uma linhagem)
class Professor extends Pessoas
{
    private $especializacao;

    public function darAula()
    {
    }
}
