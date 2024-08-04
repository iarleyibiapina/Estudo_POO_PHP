<?php

// classe abstrata
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

    // a partir de um momento que uma classe possui um metodo abstrato
    // a classe inteira precisa ser abstrata
    // classes filhas devem implementar este metodo
    // abstrato
    public abstract function metodoAbstrato(): int; // nao possui corpo

    /**
     * Possuo um certo metodo que pode mudar dependendo da classe que herda
     * @return int
     */
    protected function regraNegocio(int $number): int
    {
        return pow($number, $this->setExp() ?? 2); 
    }

    // preciso definir o retorno 
    abstract protected function setExp(): int; // este metodo é abstrato, pois definirei o expoente
    // na classe que herda.
}
