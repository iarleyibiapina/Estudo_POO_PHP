<?php

require './vendor/autoload.php';

use src\ExemploModel;
use src\test\MaisUm;
use src\test\Name;

$p = new ExemploModel();

$p->create([
    'coluna1' => 'nome',
    'coluna2' => 'sobrenome',
    'coluna3' => 'outro valor',
    // 'coluna4' => 'outro valor',
]);


$test = new Name;
$oul = new MaisUm("vibora");
echo ($oul->name);
