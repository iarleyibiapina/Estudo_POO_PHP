<pre>
<?php
// importando o projeto caneta.php
require_once 'Caneta.php';

// criando(instanciando) novo objeto a partir da classe
$canetaVermelha = new Caneta;
// definindo caracteristicas
$canetaVermelha->modelo = "bic";
$canetaVermelha->cor = "azul";
$canetaVermelha->ponta = "0.5";
$canetaVermelha->tampada = true;

// chamando metodos
$canetaVermelha->rabiscar();

$canetaVermelha->destampar();
// $canetaVermelha->tampar();

echo var_dump($canetaVermelha) . "<br>";
print_r($canetaVermelha);

$canetaVerde = new Caneta;
$canetaVerde->modelo = "rato";
$canetaVerde->cor = "verde";
$canetaVerde->tampada = true;

$canetaVerde->tampar();
echo ("<br>");
print_r($canetaVerde);

?>
</pre>