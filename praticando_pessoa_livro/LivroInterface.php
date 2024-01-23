<?php

interface LivroInterface
{
    public function abrir();
    public function fechar();
    public function abrirPag($pagina);
    public function avançarPag();
    public function voltarPag();
}
