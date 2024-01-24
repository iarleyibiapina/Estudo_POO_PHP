<?php
// supeclasse Aluno
require_once('./Aluno.php');
// classe folha 
// descendente de Pessoas

class Tecnico extends Aluno
{
    private $registro;

    public function praticar()
    {
    }
}
