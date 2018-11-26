<?php
//on redémare la session pour recupérer les donné de la session de la page 1.
session_start();
?>
<!DOCTYPE>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Exercice 2 php Partie 8, page 2</title>
    </head>
    <body>
        <p>Bienvenue sur la page 2 <?= $_SESSION['lastname'] . ' ' . $_SESSION['name']?> je sais que tu a <?= $_SESSION['age']?> ans.</p>
        <p><a href="./index.php">page 1</a></p>
    </body>
</html>