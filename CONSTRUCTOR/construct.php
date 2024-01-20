<?php
class inicio
{

    public $vela;
    public $hora;
    public $nevando;
    public $paramUm;
    public $paramDois;
    public $paramTres;

    // O CONSTRUCT VAI DEFINIR VARIAVEIS LOGO QUANDO UM OBETO É CRIADO, SEM TER QUE DEFINI-LAS DEPOIS.

    // O METODO CONSTRUCT PODE TER O __CONSTRUCT OU O MESMO NOME DA CLASSE. 

    //1. forma
    // public function inicio(){}

    //2. forma
    // public function __construct(){
    //     $this->vela = "acesa";
    //     $this->hora = "meio-dia";
    // }

    //3. forma

    // variaveis locais do constructor
    public function __construct($a, $b, $c)
    {
        //passando variaveis locais para variaveis globais da classe
        $this->paramUm = $a;
        $this->paramDois = $b;
        $this->paramTres = $c;
        $this->nevar();
    }

    public function nevar()
    {
        $this->nevando = true;
    }
}
