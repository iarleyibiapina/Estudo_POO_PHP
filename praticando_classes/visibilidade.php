<?php
// VISIBILIDADE
require_once 'carro.php';
// definindo atributo publico de uma classe
$a1 = new carro;
$a1->modelo = "Gol";
$a1->cor = "Prata";
// aqui,o atributo é privado ou protegido e se tentar modificar o IDE nao identifica, mas o servidor volta como ERRO.
// $a1->eletrica = "ativado";

// Public    - acessado em qualquer lugar
// Protected - acessa apenas propria classe e subclasses
// Private   - acessado apenas dentro da classe

echo ("<br>");
print_r($a1);
echo ("<br>");

$a1->abrirporta();
// da mesma forma nao é possivel chamar metodos publicos ou protegidos

// alterando o protegido com funçao publica
echo ("<br>");
// agr o protegido ira ficar true
$a1->alterar();
print_r($a1);
echo ("<br>");
