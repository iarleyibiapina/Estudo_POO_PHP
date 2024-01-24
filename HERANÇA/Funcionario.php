<?php
// superclasse Pessoa
require_once("./Pessoas.php");
// classe folha


// FINAL é a classe folha que NÃO pode herdar classes
final class Funcionario extends Pessoas
{
    private $setor;

    // função unica
    public final function limpar()
    {
    }
}
