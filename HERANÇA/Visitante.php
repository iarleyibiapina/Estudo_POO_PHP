<?php
// superclasse Pessoa
require_once("./Pessoas.php");
// classe folha (ultima de uma linhagem)

// herança pobre ou simples
class Visitante extends Pessoas
{
    // mesmo sem definir nada, Visitante ainda possui atr nome e metodo aniv()
}
