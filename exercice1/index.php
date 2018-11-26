<?php

$userAgent = $_SERVER['HTTP_USER_AGENT'];
$ip = $_SERVER['REMOTE_ADDR'];
$serveur = $_SERVER['SERVER_NAME'];
?>
<!DOCTYPE>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Exercice 1 php Partie 8</title>
    </head>
    <body>
        <p><?= $userAgent ?></p>
        <p><?= $ip ?></p>
        <p><?= $serveur?></p>
    </body>
</html>