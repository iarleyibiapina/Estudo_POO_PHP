<?php
session_start();

// ideia criar uma classe response, que pega dados enviados por meio do index e enviará dados para a 'view'
include('./index.php');

$tituloVideo = $_SESSION['tituloVideo'];
$viewsVideo = $_SESSION['viewsVideo'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trazendo dados</title>
</head>

<body>
    <h1>Pagina</h1>
    <p>Trazendo informações do video: <?= $tituloVideo ?> </p>~
    <br>
    <p>Com um total de <?= $viewsVideo ?> de visualizações</p>
</body>

</html>