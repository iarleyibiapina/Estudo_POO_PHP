<?php

require __DIR__ .  './Principal.php';

// classe concreta 
class Filha extends Principal
{
    // preciso implementar e sobrescrever o metodo da classe pai
    #[Override]
    public function metodoAbstrato(): int
    {
        return 2;
    }

    public function setExp(): int
    {
        return 3; // agora o metodo regraNegocio tera retorno de x elevado a 3
    }
}


