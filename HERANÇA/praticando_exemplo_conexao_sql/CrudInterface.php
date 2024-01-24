<?php

require_once('./Crud.php');

interface CrudInterface
{
    public function create($dados = array());
    public function update();
}
