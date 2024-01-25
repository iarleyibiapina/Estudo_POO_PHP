<?php

include("./PessoaExercicio.php");

class Gafonhoto
{
    private $login;
    private $totAssistindo;

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
