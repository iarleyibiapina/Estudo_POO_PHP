<?php

require_once('./Conexao.php');
require_once('./Crud.php');
require_once('./CrudInterface.php');

$p = new Crud();

echo $p->create([
    'teste' => 'valor',
]);
