<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax cours</title>
    <script src="script8.js"></script>
</head>

<body>
    <h1>Vérification de l'identité de l'utilisateur</h1>

    <form action="">
        <select name="" id="cat" onchange="envoyerRequete()">
            <?php
            $bdd = new PDO("mysql:host=localhost;dbname=ajax", "root", "");
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $reponse = $bdd->query("SELECT * FROM categorie");

            while ($ligne = $reponse->fetch()) {
                echo "<option value='" . $ligne['id'] . "'>" . $ligne['label'] . "</option>";
            }

            $reponse->closeCursor();
            ?>
        </select>
    </form>

    <div>
        nombre de produits de cette catégorie est :
        <span id="nbr-produit" style="color: red"></span>
    </div>
</body>

</html>