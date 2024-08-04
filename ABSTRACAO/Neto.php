<?php

class Neto extends Filho
{
    // preciso implementar os dois metodos

    public function metodoAbstrato(): int
    {
        return 1;
    }

    // public function ccc(): boolean // o metodo precisa ser o mesmo
    public function ccc(): string
    {
        return 'yes';
    }

    public function setExp(): int
    {
        return 5; // agora o metodo regraNegocio tera retorno de x elevado a 5
    }
}
