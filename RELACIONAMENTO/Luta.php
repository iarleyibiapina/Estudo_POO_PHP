<?php

require_once('./Lutador.php');

class Luta
{
    // uma instancia de uma classe
    private Lutador $desafiado;
    private Lutador $desafiante;
    private $rounds;
    private $aprovada;

    public function getDesafiado()
    {
        return $this->desafiado;
    }
    // instanciando a classe e com ela seus metodos
    public function setDesafiado(Lutador $desafiado)
    {
        // utilizando metodos da classe Lutador
        $this->desafiado = $desafiado->getNome();
    }
    public function getDesafiante()
    {
        return $this->desafiante;
    }
    // instanciando a classe e com ela seus metodos
    public function setDesafiante(Lutador $desafiante)
    {
        // utilizando metodos da classe Lutador
        $this->$desafiante = $desafiante->getNome();
    }
    public function getRounds()
    {
        return $this->rounds;
    }
    public function setRounds($rounds)
    {
        $this->$rounds = $rounds;
    }
    public function getAprovada()
    {
        return $this->aprovada;
    }
    public function setAprovada($aprovada)
    {
        $this->$aprovada = $aprovada;
    }

    public function marcarLuta($lutadorUm, $lutadorDois)
    {
        // REGRAS: 
        // so pode haver lutas de mesma categorias
        // lutadores diferentes
        // só pode ter luta se aprovada
        // resultado apenas vitoria ou empate
        if ($lutadorUm->getCategoria() == $lutadorDois->getCategoria() && $lutadorUm != $lutadorDois) {
            $this->aprovada = true;
            $this->desafiado = $lutadorUm;
            $this->desafiante = $lutadorDois;
        } else {
            $this->aprovada = false;
            // $this->desafiado = null;
            // $this->desafiante = null;
        }
    }
    public function lutar()
    {
        if (!$this->aprovada) {
            echo "Luta não pode acontecer";
            return;
        }
        echo "E para a luta de hoje temos: <br>";
        $this->desafiado->apresentar();
        $this->desafiante->apresentar();
        echo "<br>";
        echo "<br>";
        $vencedor = random_int(0, 2);

        switch ($vencedor) {
            case 0:
                echo "empate";
                $this->desafiado->empatarLuta();
                $this->desafiante->empatarLuta();
                break;
            case 1:
                echo "casa ganhou";
                $this->desafiado->getNome();
                $this->desafiado->ganharLuta();
                $this->desafiante->perderLuta();
                echo "<br>";
                echo "novo cartel vencedor ";
                $this->desafiado->status();
                break;
            case 2:
                echo "fora ganhou";
                $this->desafiante->getNome();
                $this->desafiante->ganharLuta();
                $this->desafiado->perderLuta();
                echo "<br>";
                echo "novo cartel vencedor ";
                $this->desafiante->status();
                break;
            default:
                break;
        }
    }
}
