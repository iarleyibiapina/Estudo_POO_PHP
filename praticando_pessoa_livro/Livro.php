<?php

require_once('./LivroInterface.php');
require_once('./Pessoa.php');

class Livro implements LivroInterface
{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function __construct(
        $titulo,
        $autor,
        $totPaginas,
        $aberto,
        Pessoa $leitor,
    ) {
        $this->setTitulo($titulo);
        $this->setAutor($autor);
        $this->setTotPaginas($totPaginas);
        $this->setAberto($aberto);
        $this->setLeitor($leitor->getNome());
        $this->pagAtual = 0;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }
    public function getAutor()
    {
        return $this->autor;
    }
    public function getTotPaginas()
    {
        return $this->totPaginas;
    }
    public function getPagAtual()
    {
        return $this->pagAtual;
    }
    public function getAberto()
    {
        return $this->aberto;
    }
    public function getLeitor()
    {
        return $this->leitor;
    }
    private function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    private function setAutor($autor)
    {
        $this->autor = $autor;
    }

    private function setTotPaginas($totPaginas)
    {
        $this->totPaginas = $totPaginas;
    }
    private function setPagAtual($pagAtual)
    {
        $this->pagAtual = $pagAtual;
    }

    private function setAberto($aberto)
    {
        $this->aberto = $aberto;
    }

    private function setLeitor($leitor)
    {
        $this->leitor = $leitor;
    }

    public function detalhes()
    {
        $titulo     = $this->getTitulo();
        $autor      = $this->getAutor();
        $totPaginas = $this->getTotPaginas();
        $pagAtual   = $this->getPagAtual();

        return [
            'titulo'     => "$titulo",
            'autor'      => "$autor",
            'totPaginas' => "$totPaginas",
            'pagAtual'   => "$pagAtual",
        ];
    }


    public function abrir()
    {
        $this->aberto = true;
    }
    public function fechar()
    {
        $this->aberto = false;
    }
    public function abrirPag($pagina)
    {
        if (!$this->aberto) {
            return "Livro fechado";
        }
        return $this->setPagAtual($pagina);
    }
    public function avançarPag()
    {
        if (!$this->aberto) {
            return "Livro fechado";
        }
        $this->setPagAtual($this->getPagAtual() + 1);
    }
    public function voltarPag()
    {
        if (!$this->aberto) {
            return "Livro fechado";
        }
        $this->setPagAtual($this->getPagAtual() - 1);
    }
}
