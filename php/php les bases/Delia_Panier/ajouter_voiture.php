<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

if ($_SESSION['role'] !== "admin") {
    header("Location: acces_denied.php");
    exit;
}

require_once("db_connexion.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Récupérez les données du formulaire
    $marque = $_POST['marque'];
    $modele = $_POST['modele'];
    $annee = $_POST['annee'];
    $couleur = $_POST['couleur'];
    $prix = $_POST['prix'];

    // Gestion de l'image (téléchargement)
    if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_name = $_FILES['image']['name'];
        $image_path = $image_name; // Laissez le chemin de l'image tel quel
        move_uploaded_file($image_tmp_name, "images/" . $image_name);
    } else {
        // Vous pouvez gérer les erreurs de téléchargement ici si nécessaire
    }

    // Exécutez la requête SQL d'ajout de la voiture
    $query = "INSERT INTO voitures (marque, modele, annee, couleur, prix, image) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->execute([$marque, $modele, $annee, $couleur, $prix, $image_path]);

    // Redirigez après l'ajout
    header("location: dashboard.php");
    exit;
}


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <?php include 'components/navbar.php'; ?>

    <h1>Ajouter une Voiture</h1>
    <form method="post" enctype="multipart/form-data">
        <input type="text" name="marque" placeholder="Marque" required>
        <input type="text" name="modele" placeholder="Modèle" required>
        <input type="text" name="annee" placeholder="Année" required>
        <input type="text" name="couleur" placeholder="Couleur" required>
        <input type="text" name="prix" placeholder="Prix" required>
        <label for="image">Image :</label>
        <input type="file" name="image" id="image" required>
        <!-- Ajoutez d'autres champs pour les informations de la voiture ici -->
        <input type="submit" value="Ajouter">
    </form>
</body>

</html>