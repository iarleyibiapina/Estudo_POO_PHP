<?php

class Lutador
{
    // Atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    // Contruct
    /**
     * __construct
     * 
     * @param $nome
     * @param $nacionalidade;
     * @param $idade;
     * @param $altura;
     * @param $peso;
     * @param $categoria;
     * @param $vitorias;
     * @param $derrotas;
     * @param $empates;
     */
    public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em)
    {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        // aplicar logica de negocio para definir categoria
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }

    // Getters e Setters

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getPeso()
    {
        return $this->peso;
    }
    public function setPeso($peso)
    {
        $this->peso = $peso;
        $this->setCategoria($peso);
    }

    public function getCategoria()
    {
        return $this->categoria;
    }
    private function setCategoria($peso)
    {
        switch ($peso):
            case $peso <= 62:
                $this->categoria = "leve";
                break;
            case $peso <= 70.3:
                $this->categoria = "medio";
                break;
            case $peso <= 120.2:
                $this->categoria = "pesado";
                break;

            default:
                return "Sem categoria";
        endswitch;
    }

    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }
    public function setNacionalidade()
    {
    }

    public function getIdade()
    {
        return $this->idade;
    }
    public function setIdade()
    {
    }

    public function getAltura()
    {
        return $this->altura;
    }
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    public function getVitorias()
    {
        return $this->vitorias;
    }
    private function setVitorias($vitorias)
    {
        $this->vitorias = $vitorias;
    }

    public function getDerrotas()
    {
        return $this->derrotas;
    }
    private function setDerrotas($derrotas)
    {
        $this->derrotas = $derrotas;
    }

    public function getEmpates()
    {
        return $this->empates;
    }
    private function setEmpates($empates)
    {
        $this->empates = $empates;
    }

    // Metodos

    public function ganharLuta()
    {
        $this->setVitorias($this->getVitorias() + 1);
    }
    public function perderLuta()
    {
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    public function empatarLuta()
    {
        $this->setEmpates($this->getEmpates() + 1);
    }

    public function apresentar()
    {
        echo ("<br>");
        echo ("Apresentando: ");
        echo ("<br>");

        echo ("Lutador: " . $this->getNome());
        echo ("<br>");

        echo ("Origem:  " . $this->getNacionalidade());
        echo ("<br>");

        echo ("Idade:   " . $this->getIdade());
        echo ("<br>");

        echo ("Altura:  " . $this->getAltura());
        echo ("<br>");

        echo ("Pesando: " . $this->getPeso());
        echo ("<br>");

        echo ("Ganhou: " . $this->getVitorias());
        echo ("<br>");

        echo ("Perdeu:  " . $this->getDerrotas());
        echo ("<br>");

        echo ("Empatou: " . $this->getEmpates());
        echo ("<br>");
    }

    public function status()
    {
        echo ("Status Atual:");
        echo ("<br>");

        echo ("Lutador: " . $this->getNome());
        echo ("<br>");

        echo ("Pesando: " . $this->getPeso());
        echo ("<br>");

        echo ("Vitorias: " . $this->getVitorias());
        echo ("<br>");

        echo ("Derrotas:  " . $this->getDerrotas());
        echo ("<br>");

        echo ("Empatou: " . $this->getEmpates());
        echo ("<br>");
    }
}
