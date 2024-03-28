<!DOCTYPE html>
<html>

<head>

    <title>Tous les produits</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
    <h1>Tous les produits</h1>

    <!-- Barre de navigation -->
    <nav>
        <ul>
            <li><a href="ajouter_produit.php">Ajouter un produit</a></li>
            <li><a href="tous_les_produits.php">tous les produits</a></li>
            <li><a href="index.php">Retour à la liste des 15 produits</a></li>
        </ul>
    </nav>

    <?php
    // Connexion à la base de données (remplacez les valeurs par vos propres informations de connexion)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shop";

    $db_connect = new mysqli($servername, $username, $password, $dbname);

    // Vérifier la connexion
    if ($db_connect->connect_error) {
        die("La connexion a échoué : " . $db_connect->connect_error);
    }

    // Sélectionner tous les produits de la base de données
    $sql = "SELECT * FROM produit";
    $result = $db_connect->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<img src='" . $row["image"] . "' alt='Image du produit'>";
            echo "<h2>" . strtoupper($row["title"]) . "</h2>";
            echo "<p>Description : " . $row["description"] . "</p>";
            echo "<p>Prix : $" . number_format($row["price"], 2) . "</p>";
            echo "<p>Ville : " . $row["city"] . "</p>";
            echo "<p>Code Postal : " . $row["postal_code"] . "</p>";

            // Vérifier si le produit est réservé
            if (!empty($row["reservation_text"])) {
                echo "<p><strong>Statut : Réservé</strong></p>";
            } else {
                echo "<p><a href='consulter_produit.php?id=" . $row["id_produit"] . "'>Consulter ce produit</a></p>";
            }

            echo "<hr>";
        }
    } else {
        echo "Aucun produit trouvé.";
    }

    // Fermer la connexion à la base de données
    $db_connect->close();
    ?>
</body>

</html>