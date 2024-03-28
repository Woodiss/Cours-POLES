// ====== JAVASCRIPT ET LE WEB ======


/* I - LE DOM

Créer un fichier index.html et un fichier main.js

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ma page web</title>
</head>

<body>
    <h1>Ma page web</h1>
    <p>Bonjour, je m'appelle Baptiste.</p>
    <p>J'habite dans la belle ville de <a href="http://www.lyon.fr">Lyon</a>.</p>
</body>

</html>


_____________________________________________

Le DOM signifie Document Object Model 
(c'est-à-dire "modèle d'objet de document", en français), 
C'est une interface de programmation ou API (Application Programming Interface) qui est une représentation du HTML d'une page web 
et qui permet d'accéder aux éléments de cette page web et de les modifier avec le langage JavaScript.

Il faut voir le DOM comme un arbre où chaque élément peut avoir zéro ou plusieurs enfants ...
Le DOM représente une page web sous la forme d'une hiérarchie d'objets, où chaque objet correspond à un nœud de l'arborescence de la page. 
Les objets du DOM disposent de propriétés et de méthodes permettant de les manipuler avec JavaScript.
Le navigateur permet d'accéder programmatiquement à la structure de la page qu'il affiche. 
En écrivant du code, on peut ainsi modifier dynamiquement la page web : ajouter ou retirer des éléments, changer leur style, etc.


===== II - Accéder au DOM avec la variable document =====

Lorsqu'un programme JavaScript s'exécute dans le contexte d'un navigateur web, il peut accéder à la racine du DOM en utilisant la variable document.

La variable document correspond à l'élément <html>
Cette variable est un objet et dispose des propriétés head et body qui permettent d'accéder respectivement aux éléments <head> et<body> de la page.
C'est le point de départ du DOM. Il représente votre page (votre document) entière.
*/

// Test sur index.html
let h = document.head; // La variable h contient l'objet head du DOM
console.log(h);

let b = document.body; // La variable b contient l'objet body du DOM
console.log(b);

/*
C'est donc lui qui contient les fonctions dont vous aurez besoin pour retrouver les éléments que vous cherchez.

document.getElementById() : https://developer.mozilla.org/fr/docs/Web/API/Document/getElementById
document.getElementsByClassName() : https://developer.mozilla.org/fr/docs/Web/API/Document/getElementsByClassName
document.getElementsByTagName() : https://developer.mozilla.org/fr/docs/Web/API/Document/getElementsByTagName
document.querySelector() : https://developer.mozilla.org/fr/docs/Web/API/Document/querySelector
document.querySelectorAll() : https://developer.mozilla.org/fr/docs/Web/API/Document/querySelectorAll

Voir aussi :
https://www.zonecss.fr/cours-css-javascript/les-selecteurs-javascript.html


=====  3 - Découvrir le type d'un nœud ===== 
Chaque objet du DOM a une propriété nodeType qui indique son type. La valeur de cette propriété est document.ELEMENT_NODE pour un nœud "élément" (balise HTML) et document.TEXT_NODE pour un nœud textuel.

*/

// Test sur index.html

if (document.body.nodeType === document.ELEMENT_NODE) {
    console.log("Body est un noeud élément");
} else {
    console.log("Body est un noeud textuel");
}
// Affichera l'objet du DOM body "Body est un noeud élément" est un nœud de type élément.

/*
=====  4 - Accéder aux enfants d'un nœud élément ===== 

Comme nous l'avons vu, chaque élément est un objet JavaScript avec ses propriétés et ses fonctions. 
Et parmi ces dernières, il en existe pour parcourir les enfants et le parent de chaque élément:

element.children  : cette propriété nous retourne la liste des enfants de cet élément ;

element.parentElement  : cette propriété nous retourne l'élément parent de celui-ci ;

element.nextElementSibling  /  element.previousElementSibling  : ces propriétés nous permettent de naviguer vers l'élément suivant / précédent de même niveau que notre élément.
*/

// index.html

<div id="parent">
    <div id="previous">Précédent</div>
    <div id="main">
        <p>Paragraphe 1</p>
        <p>Paragraphe 2</p>
    </div>
    <div id="next">Suivant</div>
</div>

// main.js
let elt = document.getElementById('main');

// ou ES6: let elt = document.getElementById('main');

/*
elt.children  nous retournera les éléments de type  p  qui sont les enfants de l'élément  #main

elt.parentElement  nous retournera la  div  qui a l'id  parent

elt.nextElementSibling nous retournera l'élément qui a l'id  next

elt.previousElementSibling  nous retournera l'élément qui a l'id  previous


Il existe d'autres propriétés que nous n'aborderons pas ici pour naviguer entre les objets du DOM :  
firstChild,lastChildou encorenextSibling... 
Vous en trouverez la liste complète sur le MDN: https://developer.mozilla.org/fr/docs/Web/API/Node


===== 5 - Obtenir des informations sur les éléments ===== 

Le DOM permet également d'obtenir des informations sur des éléments sélectionnés.

/*
*
*   ______ A - Le contenu HTML ______
*   La propriété innerHTML permet de récupérer tout le contenu HTML d'un élément du DOM. 
*
*/

// TEST
// index.html

<div id="parent">
    <div id="previous">Précédent</div>
    <div id="main">
        <p>Paragraphe 1</p>
        <p>Paragraphe 2</p>
    </div>
    <div id="next">Suivant</div>
    <a href="https://google.com">Une phrase permettant d'accéder à google</a>
</div>

// main.js

console.log(document.getElementById("main").innerHTML);
// Le contenu HTML de l'élément identifié par "main"

/*  
*
* ______ B - Le contenu textuel ______
*   => La propriété textContent renvoie tout le contenu textuel d'un élément du DOM, sans l'éventuel balisage HTML.
*
*/

console.log(document.getElementById("main").textContent);
// Le contenu textuel de l'élément identifié par "contenu"


/* 
*
*   ______ C - Les attributs ______
*   => La méthode getAttribute peut être appliquée à un élément du DOM et renvoie la valeur de l'attribut passé en paramètre.
*
*/

console.log(document.querySelector("a").getAttribute("href"));
// L'attribut href du premier lien

// On peut vérifier la présence d'un attribut sur un élément grâce à la méthode hasAttribute

// Test sur index.html
if (document.querySelector("a").hasAttribute("target")) {
    console.log("Le premier lien possède l'attribut target");
} else {
    console.log("Le premier lien ne possède pas l'attribut target");
}

/*
*
*   ______ D - Les classes ______
*   => Dans une page web, une balise peut posséder plusieurs classes. La propriéte classList permet de récupérer la liste des classes d'un élément du DOM. Elle s'utilise comme un tableau.
*
*/

// HTML
/*
<h1>Titre</h1>
<div id="balise1" class= "class1 class2 class3">Texte 1</div>
<div id="balise2">Texte 2</div>
*/

// Liste des classes de l'élément identifié par "balise1"
let classes = document.getElementById("balise1").classList;
alert(classes.length); // Affiche 3 : l'élément possède 3 classes
alert(classes[0]); // Affiche "class1"

// Vous avez aussi la possibilité de tester la présence d'une classe dans un élément en appelant la méthode contains sur la liste des classes.﻿﻿﻿


if (document.getElementById("balise1").classList.contains("class1")) {
    console.log("L'élément identifié par balise1 possède la classe class1");
} else {
    console.log("L'élément identifié par balise1 ne possède pas la classe class1");
}