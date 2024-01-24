<?php

require_once('./Conexao.php');
require_once('./CrudInterface.php');

class Crud extends Conexao implements CrudInterface
{
    private $dados;

    public function create($dados = array())
    {
        return $this->conectar($dados);
    }

    public function update()
    {
    }
}
