<?php
$folders = scandir('./');
array_shift($folders); #retira o '.' de voltar 1 nivel na pasta pai
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listagem de Pastas</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <style>
    body {
      padding: 20px;
      font-size: x-large;
    }
    .folder-icon {
      font-size: 2rem;
    }
    .folder-name {
      margin-left: 10px;
    }
    a{
        font-weight: bold;
        transition: all .4s ease;
    }
    a:hover{
      scale: 1.05;
      padding: 1.10rem;
      transition: all .2s ease;
    }
    
    a:hover span, a:hover i {
      color: orangered;
    }

    .fa-folder{
      color: #F0E554;
    }

    .fa-file{
      color: purple;
    }
  </style>
</head>
<body>

<div class="container">
  <h1><span style="color: orangered;"><?= basename(__DIR__) ?></span> - Listagem de Pastas</h1>
  
  <div class="list-group mt-4">
    <?php foreach ($folders as $folder) : ?>
      <?php if($folder === '.git' || $folder === 'index.php') continue ?>
        <a href="<?= $folder ?>" class="list-group-item list-group-item-action">
          <?php if($folder === ".."): ?>
            <i class="fas fa-arrow-left"></i>
          <?php elseif(str_ends_with($folder, '.php')):?>
            <i class="fas fa-file"></i>
            <?php else: ?>
            <i class="fas fa-folder"></i>
          <?php endif ?>
            <span class="folder-name"><?= $folder ?><?php if($folder === "..") echo(" Voltar para a pasta pai"); ?></span>
        </a>
    <?php endforeach; ?>
  </div>
</div>

<!-- Font Awesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/iconate/0.3.1/iconate.min.js" integrity="sha512-pi871ZdzYCo3q+1JsKWCwi66AkQecrCK9KRUjQTNsiJS3Z+W1iGSyghEdSwEmJ67ajK2c5q8vw6PTb9A7qu51g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script></html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
