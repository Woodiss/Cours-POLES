<?php
require_once('../HTML_element/nav.php');
/*
EXERCICE:
    Créer une classe Membre, avec les propriétés pseudo et mdp
    le pseudo doit être inférieur à 15 caractères mais supérieur à 0 et que ce soit un string !

    => OBJECTIF : afficher le pseudo et le mdp
*/

class Membre
{

    private $pseudo;
    private $mdp;

    public function __construct($arg1, $arg2)
    {
        $this->setPseudo($arg1);
        $this->setMdp($arg2);
    }

    public function setPseudo($arg1)
    {
        if (is_string($arg1)) {

            if (strlen($arg1) > 0 && strlen($arg1) < 15) {

                $this->pseudo = $arg1;
            } else {
                echo "<br>taille du pseudo incorecte";
            }
        } else {
            echo  "<br> $arg1 n'est pas un string";
        }
    }

    public function getPseudo()
    {
        return "<br>votre prénom est " . $this->pseudo;
    }


    public function setMdp($arg2)
    {
        $this->mdp = $arg2;
    }

    public function getMdp()
    {
        return "<br>votre mdp est " . $this->mdp;
    }
}

$membre1 = new Membre('Jeremie', "12345678");

echo $membre1->getPseudo();
echo $membre1->getMdp();
