<?php


class Exemplo
{
    /*
    Os métodos mágicos no PHP são métodos "especiais" que são invocadas
    implicitamente quando certas ações ocorrem.

    todo metodo magico é definido pelo __

    O método construtor, chamado de __construct, é executado quando criamos um novo
    objeto (utilizando new). Normalmente utilizamos o método construtor para receber
    dependências e inicializar as propriedades.

    Já o método destrutor, __destruct, é executado quando um objeto sai de escopo ou
    quando o objeto é passado para a função unset. Normalmente ele é utilizado para
    liberar recursos que tenham sido alocados no construtor, como fechar arquivos,
    conexões, etc. Com a natureza stateless do PHP, esse método não é tão utilizado.
    */

    /**
     * @var array<string, mixed> Array associativo contendo todos os valores que
     * definirmos
     */
    private array $atributos;

    /**
     * @param string $name Nome da propriedade inacessível que estamos tentando definir
     * @param mixed $value Valor que estamos tentando atribuir a essa propriedade
     * @return void
     */
    public function __set(string $name, mixed $value): void
    {
        /*
            __set é invocado quando tentamos atribuir um valor a uma 
            propriedade inexistente ou inacessível. Ele recebe o nome da propriedade 
            e o valor como parâmetros.
            Aqui, se fizermos $model->teste = 'Valor', criaremos a chave 'teste'
            napropriedade $atributos com o valor 'Valor'
         */
        // $this->atributos[$name] = $value;
        $this->atributos[$name] = $value;
    }

    /*
        para ler de propriedades inexistentes ou inacessíveis, utilizamos o
        método __get. 
    */

    /**
     * @param string $name Nome da propriedade inexistente que estamos tentando ler
     * @return mixed Aqui devemos retornar o valor que corresponderá a essa propriedade 
    */
    public function __get(string $name): mixed
    {
        // O valor retornado pelo método __get é utilizado onde tentamos acessar a propriedade 
        return $this->atributos[$name];
    }

    /*
        Se quisermos usar nosso objeto como uma string, por exemplo, podemos utilizar o
        método __toString. O que nós retornarmos nesse método é utilizado se nosso
        objeto for convertido para string de forma implícita ou explícita. 
    */
    // public function __toString() : string
    // {
    //     return $this->body;
    // }

    /*
    Há também casos onde queremos utilizar nosso objeto como se ele fosse uma função.
     Para isso existe o método __invoke. Se nós passarmos nosso objeto por parâmetro
     em algum lugar que espera um callable, o método __invoke será executado.

     O metodo é executado assimq que a classe é chamada
    */
    public function __invoke(int $parametro1, string $parametro2): void
    {
        // instancia normalmente usando o construtor
        // $controller = new ControllerDeExemplo();
        // chamando o metodo invoke
        // $controller(1, 'Teste');
    }


    /*
    Assim como nós podemos acessar propriedades inexistentes (ou inacessíveis) com métodos mágicos, o mesmo serve para métodos. Se você tentar chamar um método não
    existente de um objeto, o método __call será executado, recebendo o nome do método
    que tentou ser executado e todos os seus parâmetros. Já o __callStatic funciona da
    mesma forma, mas caso um método estático inexistente seja chamado a partir de uma
    classe.
    */

    public function __call(string $name, array $arguments): void
    {
        /*
         * $name possui o nome do método inexistente que foi executado,
         * enquanto $arguments possui todos os parâmetros que foram passados para esse método
         */
    }

    public static function __callStatic(string $name, array $arguments): void
    {
        // Equivalente estático ao __call
    }
}
