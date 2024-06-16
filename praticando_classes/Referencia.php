<?php
/*
Em um paradigma OOP - a passgem é feita por referencia e não valor
Referencia de objetos.

ao atribuir um objeto a outro objeto.

$um = new Exemplo();
$dois = $um;

Dois é uma referencia de um ou seja, ele 'leva' ao mesmo canto ou 'aponta' para o mesmo
objeto, mesmo sendo outra variavel. e tambem não ha atribuição de valor, apenas referencia

$um->getUm();
$dois->getUm();

em uma programação estrutural, há uma 'criação' de duas variaveis

$a = 3;
$b = $a;

nesse caso seriam de fato duas variaveis, $a e $b, cada um tendo o seu valor.
*/