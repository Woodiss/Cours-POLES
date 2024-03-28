<?php

class User
{

    public $lastname;
    public $firstname;
    public $email;
    public $age;
    // private $password;

    public function __construct($prenom, $nom, $mail, $age)
    {
        $this->firstname = $prenom;
        $this->lastname = $nom;
        $this->email = $mail;
        $this->age = $age;
    }

    public function presentation()
    {
        echo "$this->firstname $this->lastname <br>";
    }

    public function verifAge()
    {
        if ($this->age >= 18) {
            echo "Utilisateur Majeur<br>";
        } else {
            echo "Utilisateur Mineur<br>";
        }
    }
}


$user1 = new User('Damien', 'Dupont', "damien.dupont@gmail.com", 15);
$user2 = new User('Steph', "Woodis", "steph.woodis@hotmail.fr", 46);

$user1->presentation();
$user2->verifAge();
