// ======= II - MODIFIER LA STRUCTURE D'UNE PAGE - PARTIE 1 =========


// A - MODIFIER LE CONTENU D'UN ÉLÈMENT

innerHTML // demande à ce que vous entriez du texte représentant un contenu HTML
// https://developer.mozilla.org/fr/docs/Web/API/Element/innertHTML

textContent // demande un simple texte qui ne sera pas interprété comme étant du HTML
// https://developer.mozilla.org/fr/docs/Web/API/Node/textContent

// Tester - index.html
/*
    <h1>Titre</h1>
    <div id="balise1">Texte 1</div>
    <div id="balise2">Texte 2</div>
*/

// main.js
const elt1 = document.getElementById('balise1');
elt1.innerHTML = "<strong>Ceci est un texte inséré avec innerHTML</strong>";
// ou
document.getElementById('balise1').innerHTML += "<strong>Ceci est un texte inséré avec innerHTML</strong>";

______________________

const elt2 = document.getElementById('balise2');
elt2.textContent = "<strong>Ceci est un texte inséré avec textContent</strong>";
// ou
document.getElementById('balise2').textContent += "<strong>Ceci est un texte inséré avec innerHTML</strong>";


//    B - MODIFIER DES CLASSES


classList // Permet d'accéder directement à la liste des classes d'un élément

// Cette propriété fournit aussi une série de fonctions permettant de modifier cette liste de classes:

elt.classList.add("nouvelleClasse");    // Ajoute la classe nouvelleClasse à l'élément
elt.classList.remove("nouvelleClasse"); // Supprime la classe nouvelleClasse que l'on venait d'ajouter
elt.classList.contains("nouvelleClasse");   // Retournera false car on vient de la supprimer
elt.classList.replace("oldClass", "newClass"); // Remplacera oldClass par newClass si oldClass était présente sur l'élément

// Voir documentation: https://developer.mozilla.org/fr/docs/Web/API/Element/classList#M%C3%A9thodes



// C - MODIFIER LES ATTRIBUTS 


setAttribute // Permet de définir ou remplacer les attributs d'un élément
// voir documentation: https://developer.mozilla.org/fr/docs/Web/API/Element/setAttribute

document.querySelector("h1").setAttribute("id", "titre");
// Certains attributs comme id, href et value sont directement modifiables sous la forme de propriétés.
document.querySelector("h1").id = "titre";


// element.setAttribute(<name>, <value> ) retourne une valeur
// element.setAttribute(<name>, <value> ) prend en paramètres le nom de l'attribut et sa valeur et ne retourne rien

// Voir documentation: https://developer.mozilla.org/fr/docs/Web/API/Element/removeAttribute
removeAttribut // Permet de supprimer un attribut

elt.setAttribute("type", "password");   // Change le type de l'input en un type password
elt.setAttribute("name", "my-password");    // Change le nom de l'input en my-password
elt.getAttribute("name");               // Retourne my-password


// D - MODIFIER LE STYLE


style // Permet de récupérer et modifier les différents styles d'un élément.
// Voir documentation https://developer.mozilla.org/fr/docs/Web/API/HTMLElement/style

// Exemple:
const elt1 = document.getElementById('balise1');
elt1.style.color = "green";      // Change la couleur du texte de l'élément à blanche
elt1.style.backgroundColor = "#000"; // Change la couleur de fond de l'élément en noir
elt1.style.fontWeight = "bold"; // Met le texte de l'élément en gras


/* 
* Les propriétés CSS composées 
*/


// Certaines propriétés CSS s'écrivent sous la forme d'un nom composé. 
// Pour utiliser ces propriétés en JavaScript, il faut supprimer le tiret et écrire la première lettre du mot suivant en majuscule.

// Exemple avec les propriétés CSS font-family et background-color 
const elt1 = document.getElementById('balise1');
elt1.style.fontFamily = "Arial";
elt1.style.backgroundColor = "black";

// La liste des principales propriétés CSS et leurs équivalents Javascript est consultable: 
// https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Properties_Reference


/* 
* Les limites de la propriété style 
*/


/*
La propriété style utilisée en JavaScript représente l'attribut style de l'élément. 
Elle ne permet pas d'accéder aux déclarations de style situées ailleurs, par exemple dans une feuille de style CSS externe.
*/
getComputedStyle // Elle prend en paramètre un noeud du DOM et renvoie un objet représentant son style. 
// On peut ensuite consulter les différentes propriétés CSS de cet objet.
// voir documentation: https://developer.mozilla.org/fr/docs/Web/API/Window/getComputedStyle

// Exemple : (code html non applicable à cette exemple, 
// on partira du principe que nous avons une feuille de style rattacher à notre html
const stylePara = getComputedStyle(document.getElementById("#balise1"));
console.log(stylePara.fontStyle); // Affiche "italic"
console.log(stylePara.color); // Affiche la couleur bleue en valeurs RGB