<?php
if (!empty($_POST)) {
    if (empty($_POST['numero1']) || empty($_POST['numero2'])) {
        echo "<p>Veuillez remplie les champs</p>";
    } else {
        if (is_numeric($_POST['numero1']) && is_numeric($_POST['numero2'])) {
            echo "<p>la somme de" . $_POST['numero1'] . " et " . $_POST['numero2'] . " est de " . $_POST['numero1'] + $_POST['numero2'] . "</p>";
        } else {
            echo "<p>Veuillez entrez des nombres</p>";
        }
    }
}
?>
<?php ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="post">
        <label for="numero1">numero1 : </label>
        <input type="text" id="numero1" name="numero1">
        <br>

        <label for="numero2">numero2 : </label>
        <input type="text" id="numero2" name="numero2">
        <br>

        <input type="submit">
    </form>

</body>

</html>


