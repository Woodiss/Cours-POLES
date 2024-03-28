// ======= IV - LES EVENEMENTS =========

/*
/* I - QU'EST-CE QU'UN EVENEMENT ?

Un événement est une réaction à une action émise par l'utilisateur, comme le clic sur un bouton 
ou la saisie d'un texte dans un formulaire.

Un événement en JavaScript est représenté par un nom ( click ,  mousemove ...) 
et une fonction que l'on nomme une  callback . 
Un événement est par défaut propagé, c'est-à-dire que si nous n'indiquons pas à l'événement 
que nous le traitons, il sera transmis à l'élément parent, et ainsi de suite jusqu'à l'élément racine.

Cette fonction callback, c'est nous qui allons la spécifier. Elle sera appelée à chaque fois que l'action que 
l'on désire suivre est exécutée. Cela signifie que si l'on désire suivre le clic sur un élément, 
@notre fonction sera appelée à chaque fois que l'utilisateur cliquera sur cet élément. 

Les événements que les éléments du DOM peuvent déclencher sont très nombreux. 


    Catégorie                     Exemples

Événements clavier      :       Appui ou relâchement d'une touche du clavier

Événements souris       :       Clic avec les différents boutons, appui ou relâchement d'un bouton de la souris, survol d'une zone avec la souris

Événements fenêtre      :       Chargement ou fermeture de la page, redimensionnement, défilement (scrolling)

Événements formulaire   :       Changement de cible de saisie (focus), envoi d'un formulaire
*/

/*
Quel que soit le type d'événement, son déclenchement s'accompagne de la création d'un objet
Event qui peut être utilisé par la fonction qui gère l'événement. 
Les propriétés présentes dans Event, quel que soit le type d'événement, type renvoie le type et
target renvoie la cible de l'événement, c'est-à-dire l'élément du DOM auquel l'événement est destiné.
*/

// Ajout d'un gestionnaire qui affiche le type et la cible de l'événement
document.getElementById("bouton").addEventListener("click", function (e) {
    console.log("Evènement : " + e.type +
        ", texte de la cible : " + e.target.textContent);
});

/*
Ce code ci-dessus utilise l'objet Event pour afficher le type de l'événement déclenché 
ainsi que le texte de l'élément cible lors d'un clic sur le bouton de notre page web. 
Cet objet est fourni à la fonction qui gère l'événement sous la forme d'un paramètre nommé e. 
Le choix du nom du paramètre est libre, et vous pourrez rencontrer également le nom event.

==== II - REAGIR LORS D'UN CLIC SUR UN ELEMENT ====

Afin de réagir lors d'un clic sur un élément, il faut écouter cet événement. 
Pour cela, nous avons à notre disposition la fonction*/   addEventListener()
/*. Cette fonction nous permet d'écouter tous types d'événements (pas que le clic).

Réagir à un événement, c'est faire une action lorsque celui-ci se déclenche. 
Écouter, c'est vouloir être averti quand l'événement se déclenche. */

addEventListener(event, callback)  // prend en paramètres le nom de l'événement à écouter et la fonction à appeler dès que l'événement est exécuté.
// voir documentation : https://developer.mozilla.org/fr/docs/Web/API/EventTarget/addEventListener

// Pour la liste des événements existants voir doc: https://developer.mozilla.org/fr/docs/Web/Events

/* TESTER LE CODE SUIVANT : 
=== index.html ===

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Gestion des événements</title>
    </head>

    <body>
        <button id="bouton">Cliquez-moi !</button>
        <a id="mon-lien" href="https://google.com">Un lien vers google</a>
    </body>
</html>
*/

// main.js

const boutonElt = document.getElementById("bouton"); // On récupère l'élément sur lequel on veut détecter le clic

// Ajout d'un gestionnaire pour l'événement click
boutonElt.addEventListener("click", function clic() { // On écoute l'événement click
    console.log("Clic !"); // On affiche un message dans la console 
});

/*
*
* Suppression d'un gestionnaire d'événement
*
*/

/*
Il peut arriver que vous ne souhaitiez plus gérer un type d'événement sur un élément du DOM. 
On peut alors utiliser la méthode¨*/ removeEventListener /* sur cet élément, en lui passant en paramètre la fonction qui gérait l'événement.
Voir documentation:

Pour pouvoir utiliser removeEventListener, il faut que la fonction qui gère l'événement n'ait pas été définie de manière anonyme.
*/

// EXEMPLE

// Suppression du gestionnaire pour l'événement click
boutonElt.removeEventListener("click", function clic() {
    console.log("Clic !");
});


/*
*
* preventDefault()
*
*/

preventDefault() // empêche l'exécution du comportement par défaut de l'élément quand il reçoit l'événement ;
// voir documentation : https://developer.mozilla.org/fr/docs/Web/API/Event/preventDefault

/*
Si on applique l'évènement click sur un lien, le navigateur nous redirige sur la page vers laquelle il pointe.
Mais si on ne souhaite pas avoir ce comportement, afin de pouvoir faire autre chose à la place, comme afficher un message
il existe la fonction  preventDefault()

En appelant cette fonction dans votre callback, vous demandez au gestionnaire des événements 
de ne pas exécuter le comportement par défaut de votre élément (qui est la redirection vers une autre page pour un lien)

Et cela marche aussi pour d'autres types d'éléments que le lien. 
Cette même fonction exécutée pendant un événement onsubmit sur un formulaire empêchera le formulaire de s'envoyer au serveur, par exemple.

*/
// Exemple à tester avec index.html
const elt = document.getElementById('mon-lien');    // On récupère l'élément sur lequel on veut détecter le clic
elt.addEventListener('click', function (event) {   // On écoute l'événement click, notre callback prend un paramètre que nous avons appelé event ici
    event.preventDefault();                       // On utilise la fonction preventDefault de notre objet event pour empêcher le comportement par défaut de cet élément lors du clic de la souris
});


/*
*
* stopPropagation()
*
*/

/*
Lorsqu'un événement est déclenché, il est d'abord reçu par l'élément cible, 
mais il est ensuite remonté vers les éléments parents qui sont aussi dans la cible.

*/

stopPropagation() // empêche la propagation de l'événement vers d'autres éléments ;
// cela nous permet d'empêcher que d'autres éléments reçoivent l'événement.

// Exemple:

/* Admettons par exemple que nous ayons un élément pour lequel nous voulons afficher un message 
lorsque l'on clique dessus. Mais à l'intérieur de cet élément, nous avons aussi un autre élément 
qui doit nous afficher un autre message lorsque l'on clique dessus.
Par défaut, si nous cliquons dans l'élément intérieur, le message va s'afficher, 
puis notre élément parent va lui aussi recevoir l'événement du clic et encore changer le message. 
Pour éviter cela, nous devons stopper la propagation de l'événement.
Ainsi, dans l'élément intérieur, nous ferons ceci : */

elementInterieur.addEventListener('click', function (event) {
    event.stopPropagation();
    elementAvecMessage.innerHTML = "Message de l'élément intérieur";
});

/* De cette manière, lorsque l'on clique sur l'élément intérieur, l'élément parent ne recevra 
plus le clic, et seul l'élément intérieur affichera son message. Par contre, en cliquant directement 
dans l'élément parent, sans être dans l'élément intérieur, l'élément parent recevra bien l'événement 
et affichera bien son message.
*/

/* I - LA PROPAGATION DES EVENEMENTS EN JAVASCRIPT

https://www.pierre-giraud.com/javascript/cours-complet/javascript-propagation-evenements.php

*/