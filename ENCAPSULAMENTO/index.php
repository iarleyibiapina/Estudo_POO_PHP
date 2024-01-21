<pre>
<?php

require_once 'ControleRemoto.php';

$controleTV = new ControleRemoto;

$controleTV->ligar();
echo "<br>";
$controleTV->abrirMenu();


echo "<br>";
$controleTV->maisVolume();
$controleTV->maisVolume();
echo "<br>";
$controleTV->abrirMenu();


echo "<br>";
$controleTV->menosVolume();
echo "<br>";
$controleTV->abrirMenu();


echo "<br>";
$controleTV->ligarMudo();
echo "<br>";
$controleTV->abrirMenu();

echo "<br>";
$controleTV->desligarMudo();
echo "<br>";
$controleTV->abrirMenu();


echo "<br>";
$controleTV->play();
echo "<br>";
$controleTV->abrirMenu();

echo "<br> Estado atual: controle TV <br>";
print_r($controleTV);
echo "<br>";


$controleAr = new ControleRemoto;
$controleAr->maisVolume();
echo "<br>";
$controleAr->menosVolume();
echo "<br>";
$controleAr->ligarMudo();
echo "<br>";
$controleAr->desligarMudo();
echo "<br>";

echo "<br>";
print_r($controleAr);
echo "<br>";

?>
</pre>