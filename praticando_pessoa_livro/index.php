<?php

require_once('./Livro.php');
require_once('./Pessoa.php');

$Julia = new Pessoa("Julia", "19", "F");
// 
$AnelDoRei = new Livro(
    "Anel do Rei",
    "Ursk",
    "100",
    false,
    $Julia,
);

// 
$AnelDoRei->abrir();
$detalhes = $AnelDoRei->detalhes();

print_r($Julia);
print_r($AnelDoRei);
?>

<hr>
<p>Leitor(a) do livro: <span><?= $AnelDoRei->getLeitor() ?></span></p>
<hr>
<p>Detalhes: <span><?= $detalhes['titulo'] ?></span></p>
<p>Autor: <span><?= $detalhes['autor'] ?></span></p>
<p>Total de paginas: <span><?= $detalhes['totPaginas'] ?></span></p>
<p>Pagina atual: <span><?= $detalhes['pagAtual'] ?></span></p>

<hr>
<?php
$pagina = 25;
$AnelDoRei->abrirPag($pagina);
?>
<p>Quero abrir na pagina <?= $pagina ?></p>

<?php
$AnelDoRei->avançarPag();
$detalhes = $AnelDoRei->detalhes();
?>
<p>E avançar uma pagina, agora a pagina atual é <?= $detalhes['pagAtual'] ?></p>