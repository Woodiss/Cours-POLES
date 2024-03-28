<?php
require_once('../HTML_element/nav.php');
class Etudiant
{

    // Propriété public
    private $prenom;

    public function __construct($arg)
    {
        // __construct : méthode appéle automatique lors d'une instanciation de la classe ('new') . On ne peut pas déclarer 2 constructeur en PHP.

        echo "Instanciation, nous avons reçu l'infomation suivante: $arg";
        $this->setPrenom($arg);
    }

    public function setPrenom($arg)
    {
        $this->prenom = $arg;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }
}

$etudiant1 = new Etudiant('Jeremie');
// __construct() est appélée automatiquement, nous avons mis un arfument apres le nom de la classe qui attérit directement dans le constructeur.

echo "<br>Prenom : " . $etudiant1->getPrenom();
// __construct sera équivalent au init avec session_start(), connexion à la bdd autoload
// __construct est une méthode magique