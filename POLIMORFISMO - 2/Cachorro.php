<?php


// POLIMORFISMO em metodos de assinaturas diferentes

class Cachorro
{
    // php nao suporta ao polimorfismo de sobrecarga
    public function reagirFrase(String $frase)
    {
        if ($frase == 'boa') {
            echo "cachorro alegre";
        } else if ($frase == 'ruim') {
            echo "cachorro com raiva";
        }
        return;
    }
    public function reagirHora(int $hora, int $minuto)
    {
        if ($hora <= 12) {
            echo "cachorro late";
        } else if ($hora > 12 && $hora <= 18) {
            echo "cachorro late e abana";
        } else if ($hora > 18) {
            echo "cachorro dorme";
        }
        return;
    }
    public function reagirDono(bool $dono)
    {
        if ($dono) {
            echo "abanar rabo";
        } else {
            echo "rosnar";
        }
        return;
    }
    /**
     * Retorna funçao com base na idade e peso do animal
     *
     * @param integer $idade
     * @param double $peso
     * @return void
     */
    public function reagirIdadePeso(int $idade, $peso)
    {
        return;
    }
}
