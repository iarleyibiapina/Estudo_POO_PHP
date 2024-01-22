<?php
require_once('./Lutador.php');
$lutadores = array();

$lutadores[0] = new Lutador(
    "PrettyBoy",
    "França",
    32,
    1.75,
    68.9,
    11,
    3,
    1
);
// 
$lutadores[1] = new Lutador(
    "PutzScript",
    "Brasil",
    35,
    1.65,
    80.5,
    14,
    2,
    3
);
// 
$lutadores[2] = new Lutador(
    "SnapShadow",
    "EUA",
    42,
    1.82,
    95.5,
    17,
    6,
    0
);
// 
$lutadores[3] = new Lutador(
    "Dead Code",
    "Australia",
    28,
    1.77,
    61.3,
    4,
    2,
    5
);
?>

<pre>
    <?php
    var_dump($lutadores);
    ?>
</pre>

<?php

echo "Apresentando lutadores: ";
foreach ($lutadores as $lutador) {
    echo $lutador->apresentar();
}


echo "<br> Lutador " . $lutadores[1]->getNome() . "<br>";
$lutadores[1]->status();

echo "<br> lutou e ganhou... <br>";
$lutadores[1]->ganharLuta();

echo "<br> Novo status após luta <br>";
$lutadores[1]->status();
