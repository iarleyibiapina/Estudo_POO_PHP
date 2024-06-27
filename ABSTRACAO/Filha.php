<?php

require 'Principa.php';

class Filha extends Principal
{
    // preciso implementar
    #[Override]
    public function metodoAbstrato(): int
    {
        return 2;
    }
}


