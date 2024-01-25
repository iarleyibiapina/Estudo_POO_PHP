<?php

include('./VideoInterface.php');

class Video implements VideoInterface
{
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;

    // getters
    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getAvaliacao()
    {
        return $this->avaliacao;
    }

    public function getViews()
    {
        return $this->views;
    }

    public function getCurtidas()
    {
        return $this->curtidas;
    }

    public function getReproduzindo()
    {
        return $this->reproduzindo;
    }
    // setters
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }
    public function setAvaliacao($avaliacao)
    {
        $this->avaliacao = $avaliacao;
    }
    public function setViews($views)
    {
        $this->views = $views;
    }
    public function setCurtidas($curtidas)
    {
        $this->curtidas = $curtidas;
    }
    public function setReproduzindo($reproduzindo)
    {
        $this->reproduzindo = $reproduzindo;
    }

    public function play()
    {
        $this->setReproduzindo(true);
    }
    public function pause()
    {
        $this->setReproduzindo(false);
    }
    public function like()
    {
        $this->setCurtidas($this->getCurtidas() + 1);
    }
}
