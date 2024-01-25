<?php

include('./Cachorro.php');

$c = new Cachorro;

$c->reagirFrase("Ola"); // frase positiva ou negativa
$c->reagirHora(15, 00); // horario do dia
$c->reagirDono(true); // dono?
