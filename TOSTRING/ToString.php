<?php

namespace TOSTRING;

class ToString
{
    // __toString é um metodo magico, onde os atributos são impressos em um formato 
    // especial de string sem muito esforço.

    public string $a = 'a';
    public string $b = 'b';
    public string $c = 'c';
    public string $d = 'd';
    public int    $e = 1;

    // ou seja, ao invez de fazer um echo "a" . "b" . "c"
    // posso definir um formato mais personalizado e facil.   

    public function __toString()
    {
        return "{$this->a} - {$this->b} - {$this->c} - {$this->d} - {$this->e}" . PHP_EOL;
    }
}

$toString = new ToString();
echo $toString; // ao imprimir a classe, ja chama o tostring 
// print($toString);
var_dump($toString); 