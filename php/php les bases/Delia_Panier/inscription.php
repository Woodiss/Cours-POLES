<?php
session_start();
// require_once('');

// Définir des variables pour stocker les données du formulaire
$nom = isset($_POST['nom']) ? $_POST['nom'] : "";

// if (isset($_POST['nom'])) {
//     $nom = $_POST['nom'];
// } else {
//     $nom = "";
// }

$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : "";
$login = isset($_POST['login']) ? $_POST['login'] : "";
$pass = isset($_POST['pass']) ? $_POST['pass'] : "";
$repass = isset($_POST['repass']) ? $_POST['repass'] : "";
$valider = isset($_POST['valider']) ? $_POST['valider'] : "";

$erreur = "";

if (isset($valider)) {
    if (empty($nom) || empty($prenom) || empty($login) || empty($pass) || empty($repass)) {
        $erreur = "Tous les champs sont obligatoires.";
    } else if ($pass != $repass) {
        $erreur = "Les mots de passes ne correspondent pas.";
    } else {
        require_once('db_connexion.php');

        $sel = $conn->prepare("SELECT id FROM utilisateurs WHERE login = ? LIMIT 1");
        $sel->execute([$login]);
        $row = $sel->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            $erreur = "Ce login existe déja";
        } else {
            // Hasher le mot de passe (utilisez une méthode de hachage pour le mot de passe);
            $shashedPass = md5($pass);

            // Insérer l'utilisateur dans la base de données
            $ins = $conn->prepare("INSERT INTO utilisateurs (nom, prenom, login, pass) VALUES (?,?,?,?)");

            if ($ins->execute([$nom, $prenom, $login, $shashedPass])) {
                // Reditiger vers la page de connexion si l'inscription est réussi
                header("Location: login.php");
                exit;
            } else {
                $erreur = "Une erreur est survenue lors de l'inscription.";
            }
        }
    }
}


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="styles.css">

    <style>
        form {
            text-align: center;
        }


        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .erreur {
            color: #cc0000;
            margin-bottom: 10px;
            text-align: center;
        }

        input[type="text"],
        input[type="password"] {
            width: 50%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        label {
            font-weight: bold;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php include 'components/navbar.php'; ?>

    <h1>Inscription</h1>
    <div class="erreur"><?php echo $erreur ?></div>
    <form name="fo" method="post" action="">
        <input type="text" name="nom" placeholder="Nom" value="<?php echo $nom ?>" /><br />
        <input type="text" name="prenom" placeholder="Prénom" value="<?php echo $prenom ?>" /><br />
        <input type="text" name="login" placeholder="Login" value="<?php echo $login ?>" /><br />
        <input type="password" name="pass" placeholder="Mot de passe" /><br />
        <input type="password" name="repass" placeholder="Confirmer Mot de passe" /><br />
        <input type="submit" name="valider" value="S'inscrire" />
    </form>
</body>

</html>