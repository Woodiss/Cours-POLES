<?php

// --1-- connexion BDD
// ⚡️ pour Mac ⚡️
$host = 'localhost';
$bdd = 'employees';
$user = 'root';
$mdp = ''; /// pour WINDOWS le mdp est vide
// $mdp = 'root'; // ⚡️ pour MAC ⚡️ le mdp est root 

# variable de réception pour la connexion à la BDD
$pdo = new PDO(
    'mysql:host=' . $host . ';dbname=' . $bdd,
    $user,
    $mdp,
    array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    )
);



// --2-- Query
// $query = "SELECT * FROM employees ORDER BY emp_no DESC LIMIT 100";
$query = "SELECT * FROM employees LIMIT 100";
// "SELECT date_format(birth_date, '%d/%m/%Y') FORM employes" // date_format(date, format) fonction, pour gérer lle format via le sql ce qui limite les traiements PHP

$listeEmployes = $pdo->query($query);


$tab = array();
$tab['nombre'] = '<div><h2>Nombre d\'employés : ' . $listeEmployes->rowCount() . '</h2></div>';
$tab['contenu'] = '';

while ($employe = $listeEmployes->fetch(PDO::FETCH_ASSOC)) {
    $tab['contenu'] .= '<div class="block">';

    foreach ($tab as $indice => $valeur) {
        if ($indice == 'gender') {
            $tab['contenu'] .= ($valeur == 'M') ? 'Sexe: Masculin<br>' : 'Sexe: Feminin<br>';
        } elseif ($indice == 'birth_date' || $indice == 'hire_date') {
            $dateFormat = new DateTime($valeur);
            $tab['contenu'] .= ucfirst($indice) . ': ' . $dateFormat->format('d/m/Y') . '<br>';
        } else {
            $tab['contenu'] .= ucfirst($indice) . ': ' . $valeur . '<br>';
        }
    }

    $tab['contenu'] .= '</div>';
}
