<?php

// require_once('./ExemploModel.php');
// require('../vendor/autoload.php');
namespace src;

interface CrudInterface
{
    public function create($dados = []);
    public function update();
}
