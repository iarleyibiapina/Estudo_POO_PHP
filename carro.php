<?php
    class Carro{
        public $modelo;
        public $cor;
        private $eletrica;
        protected $motor;

    public function abrirporta(){
        echo "abrindo porta";
    }

    // alterando a variavel protegida com metodo publico
    public function alterar(){
        $this->eletrica = true;
    }

    private function ligar(){

    }

    protected function trocarmotor(){

    }



}
?>