<?php



require_once('./Loader.php');
Loader::Loader();

class Visualizacao
{
    // estes dois sao objetos, passados como param
    private $espectador;
    private $filme;


    // este metodo, ira incrementar o numero de filme assitistido, pela classe instanciada
    public function __construct($espectador, $filme)
    {
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->filme->setViews($this->filme->getViews() + 1);
        $this->espectador->setTotAssistindo($this->espectador->getTotAssistindo() + 1);
    }

    // e podem ter seus metodos acessados
    public function getEspectador()
    {
        return $this->espectador;
    }
    public function getFilme()
    {
        return $this->filme;
    }
    public function setEspectador($espectador)
    {
        $this->$espectador = $espectador;
    }
    public function setFilme($filme)
    {
        $this->filme = $filme;
    }

    // SOBRECARGA / plus gambiarra de definir nome pois php nao suporta sobrecarga

    public function avaliar()
    {
        $this->filme->setAvaliacao(5);
    }

    public function avaliarNota($nota)
    {
        $this->filme->setAvaliacao($nota);
    }

    public function avaliarPorcentage($porc)
    {
        switch ($porc) {
            case $porc <= 25:
                $nota = 2;
                break;
            case $porc > 25 && $porc <= 50:
                $nota = 4;
                break;
            case $porc > 50 && $porc <=  75:
                $nota = 7;
                break;
            case $porc <= 100:
                $nota = 10;
                break;
            default:
                return;
        }
        $this->filme->setAvaliacao($nota);
    }
}
