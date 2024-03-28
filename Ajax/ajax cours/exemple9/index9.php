<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax cours</title>
    <script src="script9.js"></script>
</head>

<body>
    <h1>Vérification de l'identité de l'utilisateur</h1>

    <!-- <form enctype="application/x-form-www-urluncoded"> -->

        <label for="saisie">Saisir la catégorie</label>
        <input type="text" id="saisie" onkeyup="envoyerRechecheCategories()"><br>

        <select id="cat" onchange="envoyerRequete1()"></select><br>

        <select id="produits" onchange="envoyerRequete2()"></select><br>
    <!-- </form> -->

    <div>
        le prix du produit sélectionner est :
        <span id="prix-produit" style="color: red"></span>
    </div>
</body>

</html>