<?php

// Toda deve classe deve iniciar com a letra maiuscula
class Construct
{
    // quando atributo nao é definido ele não é nem nulo, mas se encontra em um estado
    // de 'nao inicializado'

    public string $paramUm = "valorPadrao"; // definindo um valor padrão
    public ?string $paramDois; // este atributo pode ser nulo

    // O CONSTRUCT VAI DEFINIR VARIAVEIS LOGO QUANDO UM OBETO É CRIADO, SEM TER QUE DEFINI-LAS DEPOIS.

    // O METODO CONSTRUCT PODE TER O __CONSTRUCT OU O MESMO NOME DA CLASSE (apenas em java e outras linguagens). 
    // no php é apenas __construct msm

    // o construtor não deve retornar algo.

    //1. forma
    // public function inicio(){}

    //2. forma
    // public function __construct(){
    //     $this->vela = "acesa";
    //     $this->hora = "meio-dia";
    // }

    //3. forma

    // variaveis locais do constructor
    // public function __construct($a, $b, $c)
    // {
    //     //passando variaveis locais para variaveis globais da classe
    //     $this->paramUm = $a;
    //     $this->paramDois = $b;
    //     $this->paramTres = $c;
    //     $this->nevar();
    // }

    //4. forma - Implementada na versao mais recente do php8

    // os atributos ja sao iniciadlizados e definidos no proprio construtor
    // readonly é um modificador de acesso especial que define que variavel serve penas para leitura
    // uma vez definido no construtor ela não é mais alterada.

    // o construtor elimina os metodos setters e
    // esta pratica ajuda a eliminar os metodos getters.
    // pois é possivel definir como publica e não há problemas em relação a sobre
    // escrita de dados

    // a classe inteira pode ser readonly se todos os atributos forem readonly
    public function __construct(
        public readonly string $paramTres
    ){
        // alem de definir os atributos o construtos tambem pode iniciar
        // outros construtor pai com a variavel reservada 'parent' em casos de herança
        // parent::__construct($paramTres); // iniciando construtor pai com a variavel reservada
    }
}
