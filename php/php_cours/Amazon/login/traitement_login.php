<?php
session_start();
require_once('db_connect.php');

echo "<pre>";
print_r($_POST);
echo "</pre>";

if (!empty($_POST)) {
    if ((!empty($_POST['email'])) && (!empty($_POST['password']))) {

        extract($_POST);
        $password = md5($password);

        $sqlSelectUser = "SELECT * FROM USER WHERE email = '$email' AND password = '$password'";
        $tableSelectUser = mysqli_query($db_connect, $sqlSelectUser);

        if (mysqli_num_rows($tableSelectUser) == 1) {
            $user = mysqli_fetch_assoc($tableSelectUser);

            $_SESSION['id_user'] = $user['id_user'];
            $_SESSION['firstname'] = $user['firstname'];
            $_SESSION['lastname'] = $user['lastname'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['status'] = $user['status'];

            if ($user['status'] == 1) {
                header('Location: ../backoffice/index.php');
            }
        } else {
            echo "mail ou mot de passe incorrect";
        }
    } else {
        echo "Veuillez complétez chaque champs correctement";
    }
}
