// ======= III - MODIFIER LA STRUCTURE D'UNE PAGE - PARTIE 2 =========

// A - CRÉEZ DE NOUVEAUX ÉLÉMENTS


/* 
* 1 - Création du nouvel élément.
*/

/* index.html*/
<div id="main">
    <ul>
        <li>Elément 1</li>
        <li>Elément 2</li>
    </ul>
</div>

document.createElement // Permet de créer un nouvel élément du type spécifié
// voir documentation: https://developer.mozilla.org/fr/docs/Web/API/Document/createElement

document.createElement()  // prend en paramètre le nom de la balise de notre élément et nous renvoie l'élément nouvellement créé.
let newElt = document.createElement("div");


// ATTENTION: Un élément créé avec cette fonction ne fait pas encore partie du document !
// Vous ne le verrez donc pas sur votre page. 
// Pour le voir, il va d'abord falloir l'ajouter en tant qu'enfant à un élément.


/* 
* 2 - Définition des informations de l'élément 
*/


newElt.id = "elementNew"; // Définition de son identifiant
newElt.textContent = "Une div ajouté grâce à Javascript"; // Définition de son contenu textuel


/* 
* 3 - Insertion du nouvel élément dans le DOM 
*/


// Il existe plusieurs façons d'ajouter un élément dans notre page. 
// La plus connue est appendChild. 
// voir documentation: https://developer.mozilla.org/fr/docs/Web/API/Node/appendChild

appendChild // Permet d'ajouter un élément à la liste des enfants du parent depuis lequel la fonction est appelée.

parentNode.appendChild(element) // rend en paramètre l'élément à ajouter en tant qu'enfant. 
// L'élément depuis lequel on appelle cette fonction devient donc le parent de notre élément.

// Exemple: 
let newElt = document.createElement("p");
let elt = document.getElementById("main");

elt.appendChild(newElt);

// ou

document.getElementById("main").appendChild(newElt);  // Insertion du nouvel élément


/* 
* 4 - Variantes pour ajouter un élément 
*/


// => CRÉATION D'UN NOEUD TEXTUEL

/*
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Quelques langages</title>
</head>

<body>
    <h1 class="debut">Quelques langages</h1>
    <div id="contenu">
        <ul id="langages">
            <li id="cpp">C++</li>
            <li id="java">Java</li>
            <li id="csharp">C#</li>
            <li id="php">PHP</li>
        </ul>
    </div>

    <script src="../js/cours.js"></script>
</body>

</html>
*/

// Jusque là, on sait ajouter de contenu textuel d'un nouvel élément à l'aide de la propriété textContent. 
document.querySelector("h1").textContent += " de programmation";
// Il est possible d'aboutir au même résultat en ajoutant au nouvel élément un noeud fils de type texte. 
// Pour cela, on utilise la méthode createTextNode
createTextNode // crée un nouveau noeud de type texte.  
// voir documentation : https://developer.mozilla.org/fr/docs/Web/API/Document/createTextNode


// Exemple:
let rubyElt = document.createElement("li"); // Création d'un élément li
rubyElt.id = "ruby"; // Définition de son identifiant
rubyElt.appendChild(document.createTextNode("Ruby")); // Définition de son contenu textuel
document.getElementById("langages").appendChild(rubyElt); // Insertion du nouvel élément



// => AJOUT D'UN NOEUD AVANT UN AUTRE NOEUD


insertBefore // insère un nœud juste avant le noeud de référence
// voir documentation : https://developer.mozilla.org/fr/docs/Web/API/Node/insertBefore 


// Exemple:
let perlElt = document.createElement("li"); // Création d'un élément li
perlElt.id = "perl"; // Définition de son identifiant
perlElt.textContent = "Perl"; // Définition de son contenu textuel
// Ajout du nouvel élément avant l'identifiant identifié par "php"
document.getElementById("langages").insertBefore(perlElt, document.getElementById("php"));


// => CHOIX DE LA POSITION EXACTE DU NOUVEAU NOEUD

insertAdjacentHTML
// voir documentation: https://developer.mozilla.org/fr/docs/Web/API/Element/insertAdjacentHTML
// On l'appelle sur un élément existant et elle prend en paramètres une position 
// et une chaîne de caractères HTML qui représente le nouveau contenu à ajouter. 
// La position du nouveau contenu doit être une valeur parmi :

beforebegin // avant l'élément existant lui-même.
afterbegin // juste à l'intérieur de l'élément existant, avant son premier enfant.
beforeend // juste à l'intérieur de l'élément existant, après son dernier enfant.
afterend // après l'élément existant lui-même.



// Exemple:
// Ajout d'un élément au tout début de la liste
document.getElementById('langages').insertAdjacentHTML("afterBegin", '<li id="javascript">JavaScript</li>');



// B - SUPPRIMER ET REMPLACER DES ÉLÉMENTS

parentNode.removeChild(element)  // prend en paramètre l'élément à supprimer du parent et retourne cet élément.
// voir documentation: https://developer.mozilla.org/fr/docs/Web/API/Node/removeChild

parentNode.replaceChild(newElement, oldElement)  // prend en paramètres le nouvel élément ainsi que l'élément à remplacer, et retourne ce dernier.
// voir documentation: https://developer.mozilla.org/fr/docs/Web/API/Node/replaceChild


// Exemples :
/* index.html
<div id="main">
    <ul>
        <li>Elément 1</li>
        <li>Elément 2</li>
    </ul>
</div>
*/


let newElt = document.createElement("div");
newElt.id = "elementNew";
newElt.textContent = "Une div ajouté grâce à Javascript";

let elt = document.getElementById("main");
elt.appendChild(newElt);


elt.removeChild(newElt);    // Supprime l'élément newElt de l'élément elt


let eltReplace = document.createElement("article");
eltReplace.textContent = "Une div remplacée grâce à Javascript";

elt.replaceChild(eltReplace, newElt);    // Remplace l'élément newElt par un nouvel élément de type article