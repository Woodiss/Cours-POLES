<?php
require_once('../HTML_element/nav.php');

//  POO = programation orienté object

// une classe permet de produire plusieures objets. Par concention, une classe sera nommée avec la première lettre en MAJUCULE

class Panier
{

    // Propriété publique
    public $nbProduit;
    // cette propriété stockerta le nombre de produits dans le panier

    // Méthode publique
    public function ajouterArticle()
    {
        // traitements
        return "L'article à bien été ajouté !";  //cette méthode renvoie un message de confirmation
    }

    // méthode protégée (accessible uniquement dans la classe et ses classes dérivées)
    protected function retirerArticle()
    {
        // traitements
        return "L'article à bien été retirer !";  //cette méthode renvoie un message de confirmation

    }

    // méthode privée (accessible uniquement dans la classe)
    private function affichageArticle()
    {
        // traitements
        return "L'article à bien été afficher !";  //cette méthode renvoie un message de confirmation
    }
}

$panier1 = new Panier; // new Panier <=> Instanciation (permet de déployer l'objet issue de la classe (ici, panier) permet de passer d'une classe à l'objet)
// $panier1 représenté l'objet issue de la classe Panier

var_dump($panier1); //var_dump affiche des informations sur l'objet, y compris son type son nom de classe et sa référence.

$panier1->nbProduit = 5;
echo "<br>Panier1 : " . $panier1->nbProduit . " produits";
// on affiche la propriété PUBLIQUE "$nbProduit" de l'objet "$panier1"

echo "<br>" . $panier1->ajouterArticle();
// on affiche le return ce trouvant dans la méthode "ajouterArticle"

// echo "<br>" . $panier1->retirerArticle();
// n'affiche rien car cette méthode est PROTECTED 

// echo "<br>" . $panier1->affichageArticle();
// n'affiche rien car cette méthode est PRIVATE

$panier2 = new Panier;

$panier2->nbProduit = 10;
echo "<br>Panier2 : " . $panier2->nbProduit . " produits";
