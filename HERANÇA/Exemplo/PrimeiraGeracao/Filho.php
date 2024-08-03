<?php

// namespace ;
require_once __DIR__ . '../../Avo.php';

// herança vertical, estendendo de avo
class Filho extends Avo
{
    protected string $variavel = 'classe Filho';

    // atributo é do tipo clase, logo tambem possui os mesmos metodos.
    // ** parametro deve ser a classe do tipo tambem.
    public function __construct(protected Avo $avo)
    {
        // acessar construtor pai ou metodos pai - parent
        // parent::__construct
        $avo->nome = 'kz segundo';
    }

    public function get(): string
    {
        return $this->avo->nome;
    }
}
