<?php

namespace FINAL;

// ! Uma classe final não pode ser herdada
// apenas instanciada normalmente
final class FinalClass
{
    // ? boas praticas:
    // abstrato ou final, devem ser primeiro ao definir uma classe
    // abstract public function
    // final public function
    // statico deve ficar apos a visibiliadade
    // final public static function

    // ! Metodos finais não podem ser sobrescritos
    final public function naoPodeSerSobrescrito()
    {
        // um metodo final nao obriga uma classe a ser final e vice-versa
        // podem haver metodos finais em outras classes, a herança ocorre normalmente
        // porem este metodo em especifico nao pode de fato ser sobrescrito.    
    }
}
 