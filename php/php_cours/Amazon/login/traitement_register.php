<?php
require_once('db_connect.php');

echo "<pre>";
print_r($_POST);
echo "</pre>";

if (!empty($_POST)) {
    if ((!empty($_POST['firstname'])) && (!empty($_POST['lastname'])) && (!empty($_POST['email'])) && (!empty($_POST['password1'])) && (!empty($_POST['password2']))) {
        if (($_POST['password1'] == $_POST['password2']) && (strlen($_POST['password1']) >= 8)) {

            extract($_POST);

            if ((mysqli_num_rows(mysqli_query($db_connect, "SELECT * FROM user WHERE email = '$email'")) == 0) && (filter_var($email, FILTER_VALIDATE_EMAIL))) {

                $password1 = md5($password1);
                $date = date('Y-m-d H:i:s');

                $addUser = "INSERT INTO `user`(`firstname`, `lastname`, `email`, `date_register`, `password`) VALUES ('$firstname','$lastname','$email','$date','$password1')";
                mysqli_query($db_connect, $addUser);

                header('Location: login.php');
            } else {
                echo "mail incorrecte ou deja utiliser";
            }
        } else {
            echo "votre mot de passe n'est pas correcte";
        }
    } else {
        echo "Veuillez complétez chaque champs correctement";
    }
} else {
    echo "Quesque tu fou la frérot O.o ?";
}
