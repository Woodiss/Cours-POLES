<?php
session_start();

$erreurConnexion = true;
if (!empty($_POST)) {

    extract($_POST);
    if (!empty($email) && !empty($password)) {
        $mdpCrypted = md5($password);

        $sqlSelectUser = "SELECT * FROM USER WHERE email = '$email' AND password = '$mdpCrypted'";
        // echo $sqlSelectUser;
        $tableSelectUser = mysqli_query($db_connect, $sqlSelectUser);
        print_r($tableSelectUser);

        if (mysqli_num_rows($tableSelectUser) == 1) {

            // $user = mysqli_fetch_assoc($tableSelectUser);

            $_SESSION['id_user'] = $user['id_user'];
            $_SESSION['firstname'] = $user['firstname'];
            $_SESSION['lastname'] = $user['lastname'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_statut'] = $user['user_statut'];
            $_SESSION['profile_image'] = $user['profile_image'];

            if ($_SESSION['user_statut'] == 0) { // 0 = user
                header('Location: ../index.php');
            } else if ($_SESSION['user_statut'] == 1) { // 1 = modo
                header('Location: ../index.php');
            } else if ($_SESSION['user_statut'] == 2) { // 2 = admin
                header('Location: index.php');
            }
        } else {
            echo "Email ou mot de passe incorrect";
            $erreurConnexion = false;
        }
    }
}
