<?php
// Visibilidade
class Carro
{
    public $modelo;
    public $cor;
    private $eletrica;
    protected $motor;

    public function abrirporta()
    {
        echo "abrindo porta";
    }

    // alterando a variavel protegida com metodo publico
    public function alterar()
    {
        $this->eletrica = true;
    }

    // so pode ser acessado dentro desta classe
    private function ligar()
    {
    }

    // pode ser acessado por classes filhas 
    protected function trocarmotor()
    {
    }
}
