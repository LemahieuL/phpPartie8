<?php
    setcookie('login', 'AUCUN',time() + 3600);/*Je set les cookies avec le messages aucun pour les afficher après*/
    setcookie('password', 'AUCUN',time() + 3600);
?>
<!DOCTYPE>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Exercice 4 php Partie 8, page 3</title>
    </head>
    <body>
        <p>Identifiant : <?= $_COOKIE['login']; ?></p>
        <p>Mot de passe : <?= $_COOKIE['password']; ?></p>
    </body>
</html>