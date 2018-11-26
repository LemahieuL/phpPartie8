<?php


?>
<!DOCTYPE>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Exercice 3 php Partie 8, page 2</title>
    </head>
    <body>
        <form method="post" action="page2.php" enctype="multipart/form-data">
            <div>
                <label for="login">Identifiant : </label>
                <input type="text" name="login" id="login" required />
                <label for="password">Nom de Compte : </label>
                <input type="text" name="password" id="password" required />
            </div>
            <div class="formTest">
                <input type="submit" value="Connexion!" />
            </div>
        </form>

    </body>
</html>