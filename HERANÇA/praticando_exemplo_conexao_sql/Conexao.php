<?php

abstract class Conexao
{
    private $localhost;

    final public function conectar($dados = array())
    {
        // faz a coneçao com banco de dados
        // print_r($dados);
        return "Criando conexaos " . $dados['teste'];
    }
}
