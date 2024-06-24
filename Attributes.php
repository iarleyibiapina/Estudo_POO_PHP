<?php

// Uma nova de "annotation" alem do / ** do php.
// porem isto é apenas um comentario, já os attributes são parte da linguagem.

// servem para inserir metainformaçoes em elementos do php

class Page
{
    /**
     * anottation antiga
     * 
     * @var string
     */
    public string $title;
}

// agora com os atributes

#[Atributo]
class Atributo
{   
    public function __construct(int $v)
    {
        echo $v;
    }
}

// use Atributo;

class Dois
{
    #[Atributo(10)]
    public string $dois;
} 

$dois = new Dois();
var_dump($dois->dois);