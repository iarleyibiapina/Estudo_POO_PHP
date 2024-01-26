<pre>
<?php
require_once('./Loader.php');
Loader::Loader();

$video = new Video("Um novo video");
$videoCobra = new Video("Cobra Kay");
$video->setViews(20);

$_SESSION['tituloVideo'] = $video->getTitulo();
$_SESSION['viewsVideo'] = $video->getViews();


$gafanhoto = new Gafonhoto("JAJA", 22, "M", "jaum");
$gafanhotoJunin = new Gafonhoto("Juju", 17, "F", "nheum");

// agregando classes
$visu = new Visualizacao($gafanhoto, $video);
$visuCobra = new Visualizacao($gafanhoto, $videoCobra);
$visuCobraJunin = new Visualizacao($gafanhotoJunin, $videoCobra);

$visu->avaliar();
$visuCobra->avaliarNota(10);
$visuCobraJunin->avaliarPorcentage(40);


print_r($video);
print_r($videoCobra);

print_r($gafanhoto);
print_r($gafanhotoJunin);

print_r($visu);
print_r($visuCobra);
print_r($visuCobraJunin);


?>
</pre>