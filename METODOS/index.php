<?php
require_once 'metodos.php';

$novoMetodo = new metodo;
$novoMetodo->setModelo("inserindoMetodoUm");
$novoMetodo->setModeloDois("inserindoMetodoDois");

echo ($novoMetodo->getModelo());
echo ("<br>");
echo ($novoMetodo->getModeloDois());
echo ("<br>");
print_r($novoMetodo);
echo ("<br>");
// concatenando em uma mensagem.
echo ("Meu modelo possui o " . $novoMetodo->getModelo() . " e tambem possui o " . $novoMetodo->getModeloDois());
