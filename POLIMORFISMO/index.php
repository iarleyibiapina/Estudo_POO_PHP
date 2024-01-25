<?php

// nao pode ser instanciada diretamente
// require_once('./Animal.php');
// require_once('./Mamifero.php');
// require_once('./Reptil.php');
// require_once('./Peixe.php');
// require_once('./Ave.php');
// --
// require_once('./Mamifero.php');
// require_once('./Canguru.php');
// require_once('./Cachorro.php');

// usando autoloader para carregar as classes
spl_autoload_register(function ($class_name) {
    var_dump($class_name);
    include $class_name . '.php';
});


$m = new Mamifero();
$r = new Reptil();
$p = new Peixe();
$a = new Ave();
// --
$mm = new Mamifero();
$cc = new Canguru();
$c = new Cachorro();
// -- criando classe apenas
$teste = new Teste();

// Chamando os metodos 

$m->locomover();
echo "<br>";
$m->alimentar();
echo "<br>";
$m->emitirSom();
echo "<br>";
$r->locomover();
echo "<br>";
$r->alimentar();
echo "<br>";
$r->emitirSom();
echo "<br>";
$p->locomover();
echo "<br>";
$p->alimentar();
echo "<br>";
$p->emitirSom();
echo "<br>";
$a->locomover();
echo "<br>";
$a->alimentar();
echo "<br>";
$a->emitirSom();
echo "<br>";
// --------------

$mm->locomover();
echo "<br>";
$mm->alimentar();
echo "<br>";
$mm->emitirSom();
echo "<br>";
$cc->locomover();
echo "<br>";
$cc->alimentar();
echo "<br>";
$cc->emitirSom();
echo "<br>";
$c->locomover();
echo "<br>";
$c->alimentar();
echo "<br>";
$c->emitirSom();
echo "<br>";
