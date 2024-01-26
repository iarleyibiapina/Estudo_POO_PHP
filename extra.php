Descobri tbm q no PHP 8 vc pode usar "getters/setters mágicos", que ajudam os preguiçosos a definir "automaticamente" uma rota de execução através de um get/set mesmo q o atributo tenha sido chamado diretamente.

Exemplo:

<?php

class Exemplo
{

    protected $atributo = 'Legal';

    protected $atributo_com_get = 'Empolgante';

    public function get_atributo_com_get()
    {
        return $this->atributo_com_get;
    }

    public final function __get($nome_atributo)
    {
        $classe = get_class($this);
        $metodo_get_explicito = 'get_' . $nome_atributo;
        if (method_exists($classe, $metodo_get_explicito) == true) {
            print PHP_EOL . 'Chamando a função ' . $metodo_get_explicito;
            return $this->$metodo_get_explicito();
        }

        $atributos = get_class_vars($classe);

        $lista_atributos = array_keys($atributos);

        if (in_array($nome_atributo, $lista_atributos) == false) {
            print PHP_EOL . "GET: {$nome_atributo} ainda não existe em {$classe} ";
        }

        if (isset($this->$nome_atributo)) {
            print PHP_EOL . 'Usando GET automático';
        }
        return @$this->$nome_atributo;
    }
}

$var =  new Exemplo();

// imprime 'Usando GET automático'
print PHP_EOL . $var->atributo;

// imprime 'Usando GET automático'
print PHP_EOL . $var->__get('atributo');

// imprime 'Chamando a função get_atributo_com_get'
print PHP_EOL . $var->atributo_com_get;

// imprime 'atributo_inexistente ainda não existe em Exemplo'
print PHP_EOL . @$var->atributo_inexistente;

?>

Note que ao chamar:

$this->atributo;

O PHP na verdade chama:

$this->__get( 'atributo' );


O mesmo pode ser feito com __set( $nome_atributo , $novo_valor );

Ao definir:

$this->atributo = 'algo';

A função $this->__set( 'atributo' , 'algo' ) será chamada ao invés.