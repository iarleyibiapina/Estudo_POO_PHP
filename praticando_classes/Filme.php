<?php

// Toda classe por converção deve iniciar com letra Maiuscula
// O nome da classe deve ser condizente ao o que ela é ou o que faz

// Qualquer arquivo que for instanciar uma nova classe precisa "saber" da sua existencia
// por isso é preciso de um require ou include do arquivo onde se encontra a classe
// OU definir no autoload

// THIS - referencia o OBJETO ou a propria CLASSE
// enquanto qualquer outra referencia de variavel é relacionada a uma variavel 'externa'

class Filme
{
    // definindo atributos
    // o tipo no php é opcional
    // var $nome; // maneira mais simples
    // public $nome; // maneira sem tipar
    public string $nome; // melhor maneira
    public int $anoLancamento; 
    public string $genero; 
    public float $float; 
    public static string $estatico; // para acessar um atributo estatico é preciso de self::$estatico;

    /**
     *  é uma boa pratica definir uma constante em maiuscula e não precisam de um $
     *  usando constantes 
     * @var int VALOR - 10
     */ 
    protected const VALOR = 10;
    // Adicionar tipos às constantes do PHP só é possível a partir da versão 8.3.

    // Definindo metodos
    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of anoLancamento
     */
    public function getAnoLancamento(): int
    {
        return $this->anoLancamento;
    }

    /**
     * Set the value of anoLancamento
     */
    public function setAnoLancamento(int $anoLancamento): self
    {
        $this->anoLancamento = $anoLancamento;

        return $this;
    }

    /**
     * Get the value of genero
     */
    public function getGenero(): string
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     */
    public function setGenero(string $genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get the value of float
     */
    public function getFloat(): float
    {
        return $this->float;
    }

    /**
     * Set the value of float
     */
    public function setFloat(float $float): self
    {
        $this->float = $float;

        return $this;
    }
}
