<?php

class Pessoa
{
    private $nome;
    private $idade;
    private $sexo;

    public function __construct($nome, $idade, $sexo)
    {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    private function setNome($nome)
    {
        $this->nome = $nome;
    }

    private function setIdade($idade)
    {
        $this->idade = $idade;
    }
    private function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    public function fazerAniver()
    {
        $this->setIdade($this->getIdade() + 1);
    }
}
