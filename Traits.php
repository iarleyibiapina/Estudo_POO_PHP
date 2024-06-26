<?php
// Traits é uma forma de "compartilhamento" de funções ou atributos 
// para um conjunto de classes

// A classe 'usa' o trait 
trait Compartilhavel{
    public function compartilha()
    {
        echo 'compartilha';
    }
}

class A{
    use Compartilhavel;
}
class B{
    use Compartilhavel;
}
class C{
    use Compartilhavel;
}

$varA = new A();
$varB = new B();
$varC = new C();
$varA->compartilha();
$varB->compartilha();
$varC->compartilha();
