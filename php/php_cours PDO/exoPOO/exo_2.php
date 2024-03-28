<?php

class User
{
    public $firstname;
    public $lastname;
    public $email;

    public function __construct($prenom, $nom, $mail)
    {
        $this->firstname = $prenom;
        $this->lastname = $nom;
        $this->email = $mail;
    }

    public function saveUser()
    {
        $userSave = fopen("log/" . date('Y-m-d') . ".json", 'r+');

        $table = array(
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email
        );

        fwrite($userSave, json_encode($table, JSON_UNESCAPED_UNICODE));
        // fwrite($userSave, json_encode($this, JSON_UNESCAPED_UNICODE));
        // JSON_UNESCAPED_UNICODE sert à a récup tout les caractères de UFT-8
        fclose($userSave);
    }
}

if (!empty($_POST)) {
    extract($_POST);

    if (!empty($firstname) && !empty($lastname) && !empty($email)) {
        $user1 = new User($firstname, $lastname, $email);

        $user1->saveUser();
    }
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <style>
        form {
            margin: auto;
            display: flex;
            flex-direction: column;
            width: 300px;
        }

        input {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <form method="POST">
        <label for="firstname">Prénom :</label>
        <input type="text" id="firstname" name="firstname">

        <label for="lastname">Nom :</label>
        <input type="text" id="lastname" name="lastname">

        <label for="email">Email :</label>
        <input type="email" id="email" name="email">

        <input type="submit" value="Inscrit">
    </form>
</body>

</html>