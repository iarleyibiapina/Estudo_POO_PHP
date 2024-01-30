<?php

use Conexao;

require_once('./Conexao.php');
require_once('./CrudInterface.php');
// namespace praticando_exemplo_conexao_sql;

require('../vendor/autoload.php');

// use ErrorException;
// use praticando_exemplo_conexao_sql\Conexao;
// use praticando_exemplo_conexao_sql\CrudInterface;

class ExemploModel extends Conexao implements CrudInterface
{
    private $table;

    protected $collum = [
        'coluna1',
        'coluna2',
        'coluna3',
    ];

    private $erroTable = null;

    private function getTableName()
    {
        // pegando nome da classe (nome da classe é o nome da tabela);
        $filterName = str_replace("Model", "", get_class($this));
        return $this->table = $filterName;
    }

    private function arrayKeys($collum, $tableName)
    {
        $chavesData = array_keys($tableName);
        // echo "<pre>";
        // var_dump(array_values($chavesData));
        // echo "<br>";
        // var_dump(array_values($collum));
        // echo "<br>";
        // echo count($collum);
        // echo "</pre>";

        // se NULL / nao tem diferença, se Array: tem dirença
        return $this->erroTable = array_diff($chavesData, $collum);
    }

    public function create($dados = [])
    {
        // pega nome da classe
        $this->getTableName();

        // verifica colunas
        if ($this->arrayKeys($this->collum, $dados) != null) {
            throw new ErrorException("Tabela " .  array_values($this->erroTable)[0] . " inexistente");
        };
        // var_dump($this->collum);


        $sql = "INSERT INTO " . $this->table . " (";
        $sql .= " " . implode(', ', $this->collum) . ")";
        $sql .= " VALUES ( ";
        $sql .= " " . implode(', ', $dados) . ");";

        // return $this->conectar($dados);
        Conexao::execute($sql);
        // echo $sql;

        return;
    }

    public function update()
    {
    }
}
