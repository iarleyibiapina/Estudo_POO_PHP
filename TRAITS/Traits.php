<?php
// Traits é uma forma de "compartilhamento" de funções ou atributos 
// para um conjunto de classes

// A classe 'usa' o trait 
// posso usar varias traits
trait Compartilhavel{ 

    public string $exemplo = 'ex';
    
    public function compartilha()
    {
        echo 'compartilha';
    }
}

trait conflito {
    public function compartilha()
    {
        echo 'conflitando';
    }
}

// Uma trait pode usar outras traits
trait usando {
    use conflito;
}

class A{
    // use Compartilhavel, a, b, c;
    use Compartilhavel;

    // traits não podem ser usadas como tipo
    public function comp(Compartilhavel $compartilhavel)
    {
    }
}
class B{
    use Compartilhavel, usando;
}
class C{
    // usando apelidos e trocando o tipo
    use Compartilhavel, conflito { 
        conflito::compartilha as cc;
        conflito::compartilha as protected;
    }

    /* caso haja traits com mesmo nome de implementaçoes
    é possivel definir qual metodo vai sobrepor usando

    use traitExemplo { A::metodoUm insteadof B } 
    
    ou usar um apelido
    use traitExemplo { A::metodoUm as novoApelido } 

    ou seja, use o metodo x da trait A ao inves da B
    */
    public function ce()
    {
        echo $this->exemplo .= 'emplo';
    }
}

$varA = new A();
$varB = new B();
$varC = new C();
$varA->compartilha();
echo $varA->exemplo;
$varB->compartilha();
echo $varB->exemplo;
$varC->compartilha();
$varC->ce();
