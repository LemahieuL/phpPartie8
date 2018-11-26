<?php

function isNameValid($var) /* On créer une function pour effectuer la regex */ {
    return preg_match('/^[a-zA-ZÂ-ÿ -]+$/i', $var);
}
/*Tableau d'erreur que l'on va remplir pour determiner si il y a des erreurs. */
$errors = [];

if(isset($_POST['login'], $_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    if(!isNameValid($login)) {
        /*Si le nom de compte comporte des caractère non pris en compte par la regex on le pouse dans le tableau errors et on affiche le message*/
        array_push($errors, 'Ton nom de compte comporte de mauvais caractère.');
    }
    /*Si la longueur du mot de passe est inferieur a 7 on le pouse dans le tableau errors et on affiche le message*/
    if(strlen($password) < 7) {
        array_push($errors, 'Ton mot de passe est trop court');
    }
    /*Si le tableau errors est vide on active les cookies et on recuper les données.*/
    if(count($errors) === 0) {
        setcookie('login', $login, time() + 3600);
        /*password_hash est la commande pour cripter le mots de passe, PASSWORD_BCRYPT est l'algoritme utiliser pour cripter le mdp*/
        setcookie('password', password_hash($password, PASSWORD_BCRYPT), time() + 3600);
    }
}


?>
<!DOCTYPE>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Exercice 4 php Partie 8, page 2</title>
    </head>
    <body>
        <?php foreach($errors as $error) { ?>
            <p><?= $error; ?></p>
        <?php } ?>
            <!-- On affiche le mdc et mdp lorsque le tableau errors est vide et lorsque $_POST contient quelque chose. -->
        <?php if(isset($_POST) && count($errors) === 0) { ?>
        <p>Identifiant : <?= $_COOKIE['login']; ?></p>
        <p>Mot de passe : <?= $_COOKIE['password']; ?></p><!-- On affiche le mots de passe qui sera cripter -->
        <?php } ?>
    </body>
</html>