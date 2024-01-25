<?php

// esta classe animal será abstrata e contera metodos abstratos
// ela NÃO podera ser instanciada e métodos NÃO poderá ser definido, pois ele
// sera instanciado e modificado por classes filhos

abstract class Animal
{
    private $peso;
    private $idade;
    private $membros;

    // estes métodos serão instanciados e sobrescrevidos nas classes filhos

    abstract protected function locomover();
    abstract protected function alimentar();
    abstract protected function emitirSom();
}
