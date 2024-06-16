<?php
// Enum é um tipo especial onde eu possuo 'atributos' finitos
// https://wiki.php.net/rfc/enumerations

enum Tipo 
{
    // dentro dele são definidos 'casos' 
    case Um;
    case Dois;
    // case 2;
    // case true;

    // definindo que UM é true e DOIS é false

    public function valida(): bool
    {
        return match($this) {
            Tipo::Um   => true,
            Tipo::Dois => false,
        };
    }

    public function converte(): string
    {
        return match($this) {
            Tipo::Um   => "Um",
            Tipo::Dois => "Dois",
        };
    }
}
// agora est ENUM é definido como um tipo na classe onde ele recebe 
// apenas os valores definidos

// backed Enum - são enums onde é possivel definir um 'valor'
// é possivel definir um tipo inteiro ou string

enum Numero: int
{
    case segunda = 1;
    case terca = 2;

    case quarta = 3;

    public function eSegunda(): bool
    {
        return $this === Numero::segunda;
    }
}

enum Dia: string
{
    case um = "segunda";
    case dois = "terca";
    case tres = "quarta";
}

// pequeno exemplo com estatico
enum Size {
    case Small;
    case Medium;
    case Large;
    public static function fromLength(int $cm) {
        return match(true) {
            $cm < 50  => static::Small,
            $cm < 100 => static::Medium,
            default   => static::Large,
        };
    }
}


class UsandoEnum
{   
    public function __construct(
        public Tipo $exemplo,
        public Numero $numero,
        public Dia $dia,
    )
    {
    }
}

// e para 'usar' o ENUM, é instanciado o tipo dele de forma estatica
$usar = new UsandoEnum(Tipo::Dois, Numero::quarta, Dia::dois);

if($usar->exemplo == Tipo::Dois){
    echo "tipo dois \n";
}
var_dump($usar->exemplo);
var_dump($usar->exemplo->valida()); // deve retornar false
var_dump($usar->exemplo->converte()); // faz uma transformação

// pegando o valor do enum para salvar no banco
// precisa do value, pois sem ele retorna Enum::case
var_dump($usar->numero->value); // retorna o valor tipo inteiro
var_dump($usar->dia->value); // retorna o valor tipo string

echo "enum name " . $usar->dia->name . PHP_EOL; // retorna o nome do case

// Agora o inverso, pegando o valor do banco e retornando o case do enum
var_dump(Dia::from("segunda"));
var_dump(Numero::from(3));

// se algum valor não existe, lança uma excessão.
// outro metodo é tryFrom(); ele retorna apenas null se caso não existir
var_dump(Numero::tryFrom(999));
