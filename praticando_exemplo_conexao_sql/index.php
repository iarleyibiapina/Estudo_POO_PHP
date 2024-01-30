<?php

require './vendor/autoload.php';

// use praticando_exemplo_conexao_sql\ExemploModel;

$p = new ExemploModel();

$p->create([
    'coluna1' => 'nome',
    'coluna2' => 'sobrenome',
    'coluna3' => 'outro valor',
    // 'coluna4' => 'outro valor',
]);
