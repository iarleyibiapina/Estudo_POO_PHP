<?php

// PHP não permite herança multipla mas permite multiplas
// interfaces
class Implementa implements MetodoInterface, AvaliaInterface
{
    // ao implementar interface, exibe logo error
    // que faltam construir os metodos

    // toda a assinatura do metodo deve ser seguida
    // no tipo de param e retorno.

    public function exemploInterface()
    {
        return false;
    }

    public function exemploInterfaceDois(): bool
    {
        return true;
    }

    public function avalia(): string
    {
        return "string";
    }
}
