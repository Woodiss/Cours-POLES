// EXERCICE 1


/* Dans un fichier index.html

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Mon rêve familier</title>
</head>

<body>
    <h1>Mon rêve familier (Paul Verlaine)</h1>
    <p>Je fais souvent ce rêve <span class="adjectif">étrange</span> et <span class="adjectif">pénétrant</span></p>
    <p>D'une <span>femme <span class="adjectif">inconnue</span></span>, et que j'aime, et qui m'aime</p>
    <p>Et qui n'est, chaque fois, ni tout à fait la même</p>
    <p>Ni tout à fait une autre, et m'aime et me comprend.</p>

    <script src="main.js"></script>
</body>

</html>
*/

/* 
* Dans un fichier main.js
* TODO : écrire la fonction compterElements afin que le reste du programme fonctionne correctement.
*/

function compterElements(target) {
    return document.querySelectorAll(target).length;
}


// console.log(compterElements("p")); // Doit afficher 4
// console.log(compterElements(".adjectif")); // Doit afficher 3
// console.log(compterElements("p .adjectif")); // Doit afficher 3
// console.log(compterElements("p > .adjectif")); // Doit afficher 2


// EXERCICE 2

/*
Dans un fichier index.html

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Quelques instruments de musique</title>
</head>

<body>
    <h1>Quelques instruments de musique</h1>
    <ul>
        <li id="clarinette" class="vent bois">
            La <a href="https://fr.wikipedia.org/wiki/Clarinette">clarinette</a>
        </li>
        <li id="saxophone" class="vent bois">
            Le <a href="https://fr.wikipedia.org/wiki/Saxophone">saxophone</a>
        </li>
        <li id="trompette" class="vent cuivre">
            La <a href="https://fr.wikipedia.org/wiki/Trompette">trompette</a>
        </li>
        <li id="violon" class="cordes frottees">
            Le <a href="https://fr.wikipedia.org/wiki/Violon">violon</a>
        </li>
    </ul>

    <script src="../js/instruments.js"></script>
</body>

</html>


ETAPE 1 : Créez une fonction infosLiens qui doit afficher :
- le nombre total de liens dans la page web ;
- la cible du premier et du dernier lien.

Cette fonction doit afficher un résultat correct quel que soit le nombre de liens présents dans la page. 

ETAPE 2 : Ajoutez un nouvel instrument à la page web, puis vérifiez le nouveau résultat de votre programme.

<li id="clavecin" class="cordes pincees">
    Le <a href="https://fr.wikipedia.org/wiki/Clavecin">clavecin</a>
</li>

ETAPE 3 : Ajoutez à la fin du programme le code suivant:

possede("saxophone", "bois"); // Doit afficher true
possede("saxophone", "cuivre"); // Doit afficher false
possede("trompette", "cuivre"); // Doit afficher true
possede("contrebasse", "cordes"); // Doit afficher une erreur

Écrivez la fonction possede qui vérifie qu'un élément possède une classe.
*/

function infosLiens() {
    let liens = document.querySelectorAll("a")
    return liens.length
}
// console.log(infosLiens())



function addLiens(instrument, className, wiki) {
    ul = document.querySelector("body ul")
    
    let yoloo = `
    <li id="${instrument}" class="${className}">
    Le <a href="${wiki}">${instrument}</a>
    </li>`
    
    ul.innerHTML += yoloo
}

addLiens("Clavecin", "bois", "https://fr.wikipedia.org/wiki/Clavecin")


function possede(instrument, materiaux) {
    let select = document.getElementById(instrument)   
    if (select === null) {
        return "instrument inconnue"
    } else {
        return select.classList.contains(materiaux)
    }
}

console.log(possede("saxophone", "bois"));
console.log(possede("contrebasse", "cordes"));


// document.querySelector(".cuivre").setAttribute("style", "background: aqua;")
document.querySelector(".cuivre").style.fontSize = "2rem";

// console.log("Executed now");

// // 5 second delay
// setTimeout(function () {
//     console.log("Executed after 5 second");
// }, 5000)