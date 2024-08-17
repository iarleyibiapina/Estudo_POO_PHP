<?php

class InterfaceParametro
{
    // Usar uma interface como parametro:

    // Ao fazer isso eu defino que minha função aceita apenas classes que tenham implementado
    // esta interface;
    public function chamaApenasSeImplementado(MetodoInterface $objeto): void
    {
        return $objeto->exemploInterface(); // retorna os metodos da interface implementado por esta classe.
        // nesse caso os metodos:
        // exemploInterface
        // exemploInterfaceDois
        // da interface, MetodoInterface
    }
}

/*
SIMULANDO SEU USO

$classe = new Classe(); 
$interfaceParametro = new InterfaceParametro();
$interfaceParametro->chamaApenasSeimplementado($classe);
*/