<?php

// https://www.php.net/manual/en/language.oop5.magic.php

require 'Exemplo.php';

$teste = new Exemplo();

// defino propriedads na variavel atributo privada

var_dump($teste);
// Chamada implícita a  $teste->__set('exemplo', 'novoValor');
$teste->at = "valorrrr";
$teste->att = "valorrr";
$teste->attt = "valorr";
$teste->atttt = "valor";

var_dump($teste);

// Chamada implícita a $teste->__get('nome'), que vai retornar 'Vinicius'
echo $teste->att;

// Chama implicitamente Exemplo::__callStatic('qualquerCoisa', [1, 2]):
Exemplo::qualquerCoisa(1, 2);

$objeto = new Exemplo();

// Chama implicitamente $objeto->__call('qualquerCoisa', [1, 2]):
$objeto->qualquerCoisa(1, 2);

class O 
{
    public function __set($a, $b){
        $this->$a = $b;
    }
}
$oc = new O();
$oc->para = "lelepido"; // cria novo atributo - que nao existia antes na classe
var_dump($oc); 
echo $oc->para; // exibe novo atributo