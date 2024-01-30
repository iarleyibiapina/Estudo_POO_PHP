<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$p = new ExemploModel();

$p->create([
    'coluna1' => 'nome',
    'coluna2' => 'sobrenome',
    'coluna3' => 'outro valor',
    // 'coluna4' => 'outro valor',
]);
