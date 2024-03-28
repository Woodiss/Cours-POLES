 // ====== INTRODUCTION A JQUERY ======

// Documentation: https://api.jquery.com/


// I - DIFFERENCE ENTRE JAVASCRIPT ET JQUERY

// JavaScript est un langage de programmation en 1995
// jQuery est une bibliothèque JavaScript open-source inventée par John Resig en 2006. 
// On peut faire la même chose avec les 2 mais avec jQuery, on peut faire les choses 
// d'une façon plus direct, plus courte et plus simple

// Exemple:
// -> Ajouter, supprimer ou modifier des éléments HTML au sein de votre page.
// -> Changer les styles des éléments de la page en modifiant le CSS qui leur est associé.
// -> Animer des éléments de votre page.
// -> Envoyer et recevoir des données depuis un serveur 
//    grâce à AJAX (asynchronous JavaScript and XML, 
//    c'est-à-dire JavaScript et XML asynchrones) pour ne plus avoir besoin 
//    de recharger vos pages après validation d'un formulaire.
// -> Et bien plus encore !

// jQuery vous permet de profiter d'une plus grande compatibilité 
// avec les différents navigateurs. 
// Le JavaScript pur est réputé pour avoir des spécificités 
// dans chaque navigateur comme Internet Explorer, Chrome, Safari, etc,
// qui vont potentiellement exécuter votre code JavaScript différemment 
// les uns des autres. jQuery vous évite cette prise de tête, 
// car il est conçu dans un esprit de compatibilité maximale.


// Exemple:

// EN JAVASCRIPT

var listItems = document.querySelectorAll('li');
var i;
for (i = 0; i < listItems.length; i++) {
    listItems[i].className = 'starred';
}

// EN JQUERY

$("li").addClass("starred");



// II - LE DOM (Document Object Model)

// Le code dans le navigateur est un objet document 
// Le html que vous avez ecrit est modélisé par le navigateur
// Ces éléments modélisé permet le ciblage par d'autres langages de programmation tels que js
// Ils sont équipes d'un plus grand potentiel des lors qu'ils font partie du DOM

// Cette représentation de la structure d'une page web offerte par un navigateur 
// et exploitable via JavaScript est appelée DOM, pour Document Object Model. 
// Le DOM définit la structure d'une page et le moyen d'interagir avec elle : 
// il s'agit d'une interface de programmation, ou API (Application Programming Interface).

// Une page web n'est rien d'autre qu'un ensemble de balises imbriquées les unes dans les autres. 
// On peut la représenter sous une forme hiérarchisée appelée une arborescence. 

// Chaque entité de l'arborescence est appelée un nœud(node). [voir image]
// On distingue deux types de nœuds :
//  -> Ceux (en bleu) quie correspondent à des éléments HTML, comme <body> ou<p>. 
//     Ces nœuds peuvent avoir des sous-nœuds, appelés fils ou enfants(children).
//  -> Ceux (en rouge) qui correspondent au contenu textuel de la page. 
//    Ces nœuds ne peuvent pas avoir de fils.



// III - AJOUTER JQUERY DANS UN PROJET

// Rendez-vous sur: https://jquery.com/download/

/*
* 2 choix : 
*
* le format de développement : jquery-3.3.1.js
* (+ gros, avec des commentaires dedans, facilite la comprehension)
*
* le format production : jquery-3.3.1.min.js
* (plus rapide à utiliser, contenu compresse)
*
* Par la suite, il faudra télécharger une copie et l'inclure dans les fichiers 
* + mettre le fichier sur le serveur (pour que ça marche sur le site en ligne)
*
* Autre choix
*
* CDN : recommandé !
* Une meilleur performance
* Possibilité qu'un utilisateur ait déjà le fichier en cache
/
*/
