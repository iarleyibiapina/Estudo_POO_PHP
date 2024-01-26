<?php

abstract class  PessoaExercicio
{
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $experiencia;

    public function __construct($nome, $idade, $sexo)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
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
    public function getExperiencia()
    {
        return $this->experiencia;
    }
    // setters
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }
    public function setExperiencia($experiencia)
    {
        $this->experiencia = $experiencia;
    }


    public function ganharExp()
    {
        return $this->setExperiencia($this->getExperiencia() + 1);
    }
}
