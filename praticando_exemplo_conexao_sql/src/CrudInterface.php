<?php

// require_once('./ExemploModel.php');
namespace praticando_exemplo_conexao_sql;

require('../vendor/autoload.php');


interface CrudInterface
{
    public function create($dados = []);
    public function update();
}
