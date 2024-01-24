<?php
// superclasse Aluno
require_once('./Aluno.php');
// classe folha
// descendente de Pessoas
class Bolsista extends Aluno
{
    private $bolsa;

    // definir sobrepor, pois o  metodo é o mesmo da classe pai
    // é preciso apenas criar o mesmo metodo com mesmas visibilidades e nome
    public function matricula()
    {
        // este metodo vai sobrepor matricula contida em aluno
    }
}
