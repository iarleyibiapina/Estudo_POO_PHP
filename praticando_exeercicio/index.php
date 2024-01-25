<?php
require_once('./Loader.php');
Loader::Loader();

$video = new Video;
$video->setTitulo("Um video novo");
$video->setViews(20);
print_r($video);

$_SESSION['tituloVideo'] = $video->getTitulo();
$_SESSION['viewsVideo'] = $video->getViews();
