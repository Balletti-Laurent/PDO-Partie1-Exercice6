<?php
include 'model/shows.php';
include 'controller/index.php';
?>
<!doctype HTML>
<html lang="fr">
    <head>
        <meta charset ="utf-8">
        <title>Exercice 6 PDO</title>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    </head>
    <body>
        <h1>Exercice 6</h1>
            <?php foreach ($showListByTitle as $show) { ?>
            <p>Spectacle <?= $show->title ?> par <?= $show->performer ?> le <?= $show->date ?> à <?= $show->startTime ?> heure.</p>
            <?php } ?>                   
    </body>
</html>