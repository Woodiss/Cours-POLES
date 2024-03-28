<?php

if (!empty($_POST)) {
    if (empty($_POST['numero1'])) {
        echo "<p>Veuillez remplie le champ</p>";
    } else {
        if (is_numeric($_POST['numero1'])) {
            if ($_POST['numero1'] % 2 === 0) {
                echo "<p>" . $_POST['numero1'] . " est un nombre paire</p>";
            } else {
                echo "<p>" . $_POST['numero1'] . " n'est pas un nombre paire</p>";
            }
        } else {
            echo "<p>Veuillez entrez un nombre</p>";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="post">
        <label for="numero1">numéro : </label>
        <input type="text" id="numero1" name="numero1">
        <br>

        <input type="submit">
    </form>

</body>

</html>