<?php

// Uma interface define um molde com funçoes para uma classe
// construir ao implementar uma interface

interface MetodoInterface
{
    // interface possui apenas metodos
    // todos devem ser publicos
    // nao deve possuir corpo
    public function exemploInterface();
    public function exemploInterfaceDois(): bool;
}
