<?php

abstract class Principal
{
    // uma classe abstrata é uma "base" para outras classes
    // que herdarem implementarem

    // ela nunca é instanciada apenas herdada
    // se uma classe possuir um metodo abstrato logo a classe
    // deve ser abstrata

    // uma classe que implementa metodos abrstratos pode ser
    // chamada de classe concretas

    public function metodoNaoAbstrato()
    {
        return 1;
    }

    // classes filhas devem implementar este metodo
    // abstrato
    public abstract function metodoAbstrato(): int;
}
