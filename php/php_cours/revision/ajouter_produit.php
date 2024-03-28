<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un produit</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #F5F5F5;
            margin: 0;
            padding: 0;
            align-items: center;
            /* Centre le contenu verticalement */
            height: 100vh;
            /* Utilise toute la hauteur de la fenêtre */
        }

        h1 {
            text-align: center;
            margin-top: 20px;
        }

        nav ul {
            list-style-type: none;
            background-color: #333;
            padding: 10px;
            text-align: center;
        }

        nav li {
            display: inline;
            margin-right: 20px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
        }

        .container {
            max-width: 800px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            /* Centrer le contenu du formulaire */
        }

        label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
            text-align: left;
            /* Aligner les libellés à gauche */
        }

        input[type="text"],
        input[type="number"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
            text-align: center;
            /* Centrer le texte dans les champs */
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        /* #titre:invalid {
            border-color: red;
        } */

        /* Style du bouton "Retour à la liste des produits" */
        .btn-retour {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
            display: inline-block;
        }

        .btn-retour:hover {
            background-color: #555;
        }

        form {
            width: 50%;
            justify-content: space-evenly;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .champ-invalide {
            border: 1px solid red;
            /* Appliquer une bordure rouge aux champs invalides */
        }
    </style>
</head>

<body>

    <h1>Ajouter un produit</h1>
    <nav>
        <ul>
            <li><a href="index.php">Retour à la liste des produits</a></li>
        </ul>
    </nav>

    <?php
    include('connexion.php');

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        extract($_POST);

        // chemin du répertoire cible pour les fichiers téléchargés
        $target_dir = "upload/";

        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

        $sqlAddProduct = "INSERT INTO produit (title, description, price, city, postal_code, image) VALUES ('$titre', '$description', '$prix', '$ville', '$code_postal', '$target_file')";

        if ($db_connect->query($sqlAddProduct) == TRUE) {
            echo "Produit ajouté avec succés";
        } else {
            echo "Erreur lors de l'ajout du produit :" . $db_connect->error;
        }
    }

    $db_connect->close();
    ?>
    <form id="monFormulaire" action="ajouter_produit.php" method="POST" enctype="multipart/form-data" onsubmit="return validerFormulaire();">
        <label for="titre">Titre :</label>
        <input type="text" id="titre" name="titre" required><br><br>
        <label for="description">Description :</label>
        <textarea id="description" name="description" required></textarea><br><br>
        <label for="prix">Prix :</label>
        <input type="number" id="prix" name="prix" step="0.01" required><br><br>
        <label for="ville">Ville :</label>
        <input type="text" id="ville" name="ville" required><br><br>
        <label for="code_postal">Code Postal :</label>
        <input type="text" id="code_postal" name="code_postal" required><br><br>
        <label for="image">Image :</label>
        <input type="file" id="image" name="image"><br><br>
        <input type="submit" value="Ajouter le produit">
    </form>

</body>

</html>