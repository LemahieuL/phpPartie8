<?php
//on redémare la session pour recupérer les donné de la session de la page 1
    setcookie('login', $_POST['login'], time() + 3600);
    setcookie('password', $_POST['password'], time() + 3600);
?>
<!DOCTYPE>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Exercice 3 php Partie 8, page 2</title>
    </head>
    <body>
        <p>Identifiant : <?= $_COOKIE['login']; ?></p>
        <p>Password : <?= $_COOKIE['password']; ?></p>
    </body>
</html>