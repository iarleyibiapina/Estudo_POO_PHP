<?php

namespace __SET__GET;

// anotation para auxiliar a buscar propriedades

/**
 * Summary of AcessorMagico
 * 
 * @class AcessorMagico
 * @package __SET__GET
 * 
 * propriedade para ler
 * @property string $a
 * @property string $b
 * @property string $c
 * @property string $d
 * @property int $e
 */
class AcessorMagico
{
    private string $a = 'aaa';
    private string $b = 'bbb';
    private string $c = 'ccc';
    private string $d = 'ddd';
    private int    $e = 1;

    // metodos magicos
    // __get e __set

    // com este metodo é possivel acessar atributos fora da classe como se fossem metodos
    // assim Classe->atributo
    public function __get(string $nomeDoAtributoAcessar) {
        return $this->$nomeDoAtributoAcessar;
    }

    // definindo atributos que ainda nao existem
    public function __set(string $nomeDoAtributoDefinir, mixed $valorDoAtributo) {
        $this->$nomeDoAtributoDefinir = $valorDoAtributo;
    }
}

$AcessorMagico = new AcessorMagico();

// GET
echo $AcessorMagico->a;
echo $AcessorMagico->c;
echo $AcessorMagico->e;
// 
// SET

echo $AcessorMagico->novoMetodo = "chapa"; 

// echo $AcessorMagico->f; // erro ao acessar atributo nao definido

