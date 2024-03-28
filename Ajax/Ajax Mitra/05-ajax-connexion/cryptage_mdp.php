<?php

$pseudo = 'pseudo';
$mdp = 'soleil'; // info en BDD

// hashage
$mdp = password_hash($mdp, PASSWORD_DEFAULT);
// $mdp = md5($mdp); // mal sécurisé !!
echo $mdp;

$verif_mdp = 'soleil'; // info saisie par l'utilisateur

if(password_verify($verif_mdp, $mdp)) {
    echo '<br>OK';
} else {
    echo '<br>NOK';

}