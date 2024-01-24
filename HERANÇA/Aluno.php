<?php
// superclasse Pessoas
require_once('./Pessoas.php');
// subclasse Bolsista e Funcionario

// herança do tipo diferença, onde inclui mais dados
class Aluno extends Pessoas
{
    private $curso;

    public function matricula()
    {
    }
}
