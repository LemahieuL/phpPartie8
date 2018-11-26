<?php
//On démare la session.
session_start();


// On crée quelques variables de session dans $_SESSION.

$_SESSION['lastname'] = 'Lemahieu';
$_SESSION['name'] = 'Luc';
$_SESSION['age'] = 25;
?>
<!DOCTYPE>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Exercice 2 php Partie 8, page 1</title>
    </head>
    <body>
        <p>Bonjour <?= $_SESSION['name']?> va voir la page 2</p>
        <p><a href="./page2.php">page 2</a></p>
    </body>
</html>