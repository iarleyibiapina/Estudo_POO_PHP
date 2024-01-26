<?php

include("./PessoaExercicio.php");

class Gafonhoto extends PessoaExercicio
{
    private $login;
    private $totAssistindo;

    public function __construct($nome, $idade, $sexo, $login)
    {
        // chamando classe pai
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totAssistindo = 0;
    }

    public function getLogin()
    {
        return $this->login;
    }
    public function getTotAssistindo()
    {
        return $this->totAssistindo;
    }
    public function setLogin($login)
    {
        $this->login = $login;
    }
    public function setTotAssistindo($totAssistindo)
    {
        $this->totAssistindo = $totAssistindo;
    }

    public function viuMaisUm()
    {
        return $this->setTotAssistindo($this->getTotAssistindo() + 1);
    }
}
