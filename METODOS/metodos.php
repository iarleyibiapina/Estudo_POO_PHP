<!-- 
    classe Caneta{
        public $modelo: string;
        private $ponta: float;

        public Metodo getModelo(){

        }
        public Metodo setModelo(m:string;){
            modelo = m;
        }

        private Metodo getPonta(){

        }
        private Metodo setPonta(p: float;){
            ponta = p;
        }
    }

    NO INDEX:
        $c1 = nova Caneta;
        $c1.setModelo("bic");
        $c1.setPonta(0.8);
        escreva ($c1.getModelo())
            é para retornar o BIC, ele ira fazer o pedido para a classe automaticamente
        escreva ($x1.getPonta())



    METODO CONSTRUTOR
    class caneta{
        metodo construtor(m: integer){
            setModelo(m)
            tampar()
            cor = "azul"
        }
    }
    a = nova caneta("bic") (ja vem tapada e com cor azul por conta do construtor)

-->

<?php
class metodo
{
    public $exemploUm;
    private $exemploDois;
    // this referencia 'ESTA' variavel DESTA classe.

    // É necessario criar um getter e setter para cada variavel, seja ela publica ou privada
    public function getModelo()
    {
        return $this->exemploUm;
    }
    // o parametro de fora, ira entrar no E que sera armazenada na variavel exemploUM dentro da classe.
    public function setModelo($E)
    {
        $this->exemploUm = $E;
    }
    // funçao publica pode alterar variaveis privadas
    public function getModeloDois()
    {
        return $this->exemploDois;
    }
    public function setModeloDois($D)
    {
        $this->exemploDois = $D;
    }
}

?>