<?php


namespace praticando_exemplo_conexao_sql;

require('../vendor/autoload.php');


abstract class Conexao
{
    private $localhost;

    private function Conexao()
    {
        // faz a coneçao com banco de dados
        // print_r($dados);
        // return "Criando conexaos " . $dados['teste'];
        return $this->localhost = true;
    }

    final public function execute(String $sql)
    {
        echo "executando um create de: " . $sql;
        return;
    }
}
