<?php
require_once 'ControleInterface.php';

class ControleRemoto implements ControleInterface
{
    private $volume;
    private $ligado;
    private $tocando;

    public function __construct()
    {
        $this->volume = 10;
        $this->ligado = false;
        $this->tocando = false;
    }

    private function getVolume()
    {
        return $this->volume;
    }
    private function setVolume($volume)
    {
        $this->volume = $volume;
    }
    private function getLigado()
    {
        return $this->ligado;
    }
    private function setLigado($ligado)
    {
        $this->ligado = $ligado;
    }
    private function setTocando($tocando)
    {
        $this->tocando = $tocando;
    }
    private function getTocando()
    {
        return $this->tocando;
    }


    // metodos abstratos
    public function ligar()
    {
        $this->setLigado(true);
        return;
    }
    public function desligar()
    {
        $this->setLigado(false);
        return;
    }
    public function abrirMenu()
    {
        echo "Ligado: " . ($this->getLigado() ? "sim" : "não");
        echo "<br>";

        echo "Tocando: " . ($this->getTocando() ? "sim" : "não");
        echo "<br>";
        echo "Volume:";
        // exibindo volume de 10 em 10
        for ($i = 0; $i <= $this->getVolume(); $i += 10) {
            echo " [] ";
        }
        echo "<br>";
        echo "Tocando: " . $this->getTocando() . "<br />";
        return;
    }
    public function fecharMenu()
    {
        echo "Menu fechado";
        return;
    }
    public function maisVolume()
    {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 5);
            return;
        }
        echo "Controle desligado, não é possivel aumentar volume";
        return;
    }
    public function menosVolume()
    {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() - 5);
            return;
        }
        echo "Controle desligado, não é possivel diminuir volume";
        return;
    }
    public function ligarMudo()
    {
        if ($this->getLigado() && $this->getVolume() > 0) {
            $this->setVolume(0);
            return;
        }
        echo "Controle desligado ou mutado, não é possivel mutar ";
        return;
    }
    public function desligarMudo()
    {
        if ($this->getLigado() && $this->getVolume() == 0) {
            $this->setVolume(20);
            return;
        }
        echo "Controle desligado ou não mutado, não é possivel tirar mudo";
        return;
    }
    public function play()
    {
        if ($this->getLigado() && !$this->getTocando()) {
            $this->setTocando(true);
            return;
        }
        return;
    }
    public function pause()
    {
        if ($this->getLigado() && $this->getTocando()) {
            $this->setTocando(false);
            return;
        }
        return;
    }
}
