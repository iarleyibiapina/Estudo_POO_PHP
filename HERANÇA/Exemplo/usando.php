<?php
require_once __DIR__ . '/PrimeiraGeracao/Filho.php';
require_once __DIR__ . '/Avo.php';

$avo   = new Avo('kz');
$filho = new Filho($avo);

print_r($filho->get());