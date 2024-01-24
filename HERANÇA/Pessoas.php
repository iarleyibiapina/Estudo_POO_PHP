<?php

// ascendente de bolsista e tecnico
abstract class Pessoas
{
    private $nome;

    // esse atributo nao é sobreposto / substituido pelas classes filhos ou subclasse ou descendentes
    public final function aniv()
    {
        // qualquer outra classe filha que tiver o mesmo metodo não surtira efeito e o que prevalecera sera esta
    }
}
