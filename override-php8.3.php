<?php

/* O php não possuia até então um metodo de sobrescrita, 'nativo' e para fazer ela
era preciso criar um outro metodo mas com um nome parecido por exemplo.

mas com a versao 8.3 é possivel adicionar um ATRIBUTO novo de SOBREESCRITA.
*/

class Exemplo {
    public function exemplo()
    {
        return "Exemplo";
    }
}

class UsoExemplo extends Exemplo 
{
    // atributo
    #[Override]
    public function exemplo()
    {
        return "novo retorno";
    }
}