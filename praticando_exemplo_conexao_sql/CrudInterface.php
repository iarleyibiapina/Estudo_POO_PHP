<?php

require_once('./ExemploModel.php');

interface CrudInterface
{
    public function create($dados = []);
    public function update();
}
