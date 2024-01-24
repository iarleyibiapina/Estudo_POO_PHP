<!-- Usando extends - a classe herda caracteristicas, logo Funcionario, Professor e Aluno tambem possuem atributo nome e metodo aniv() -->
<?php
require_once('./Pessoas.php');
require_once('./Aluno.php');
require_once('./Professor.php');
require_once('./Funcionario.php');
require_once('./Visitante.php');
require_once('./Bolsista.php');
require_once('./Tecnico.php');


// Agora com classe ABSTRATA = não é possivel instanciar esta classe diretamente
// $p1 = new Pessoas();
// --
$p2 = new Aluno();
$p3 = new Professor();
$p4 = new Funcionario();

// print_r($p1);
// print_r($p2);
// print_r($p3);
// print_r($p4);
