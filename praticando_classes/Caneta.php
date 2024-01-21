<?php
// criando classe e suas variaveis

class Caneta
{
    // ATRIBUTOS
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    // METODOS
    function rabiscar()
    {
        if ($this->tampada == false) {
            echo "<h1>rabiscando</h1> <br>";
        } else {
            echo "<h1>Nao consigo rabiscar, caneta tampada</h1> <br>";
        }
    }
    function tampar()
    {
        $this->tampada = true;
    }
    function destampar()
    {
        $this->tampada = false;
    }
}
    // ESTADO
// Pode ser chamado no index para ver o estado de cada caneta