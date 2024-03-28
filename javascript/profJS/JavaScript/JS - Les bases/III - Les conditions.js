// ====== LES CONDITIONS =====


// A - DEFINITION
// Permet de tester si une expression est vraie ou non
// D'exécuter des instructions différentes selon le résultat. 
// La structure conditionnelle utilisée la plus fréquemment est if ... else.

// B - if

if (condition) {
    // instructions exécutées quand la condition est vraie
}

if (true) {
    // la condition du if est toujours vraie :
    // les instructions de ce bloc seront toujours exécutées
}

if (false) {
    // la condition du if est toujours fausse :
    // les instructions de ce bloc ne seront jamais exécutées
}

let pokemonDispo = 'pikachu';
if (pokemonDispo === 'pikachu') {
    alert("Pikachu attaque éclair");
}
// Si la valeur de la variable pokemonDispo est égale à "pikachu"
// alors la fonction alert(); affichera la valeur 'Pikachu attaque éclair'

// L'expression contenue dans if ( ... ) correspond au test
// Ici, on utilise l'opérateur d'identité (décrit plus haut) 
//pour comparer la variable pokemon avec la chaîne de caractères pikachu 
// pour voir si elles sont égales. 
// Si cette comparaison renvoie true, le premier bloc de code sera exécuté. 
// Sinon, le premier bloc est sauté et  c'est le code du second bloc, 
// celui présent après else, qui est exécuté.

// TESTER

let nombre = Number(prompt("Entrez un nombre :"));
if (nombre > 0) {
    console.log(nombre + " est positif");
}


/*
Opérateur     Signification

=== et ==     Egal à 
              Exemple:
              "5" (chaine de caractère) et 5 (nombre)
              "5" === 5 // pas égal (compare la valeur et le type)
              "5"== 5 // egal (compare la valeur uniquement)

!==           Différent de

<             Inférieur à

<=            Inférieur ou égal à

>             Supérieur à

>=            Supérieur ou égal à

*/

// ATTENTION à ne pas confondre = ,  ==  et ===


// B- ALTERNATIVE (else)

if (condition) {
    // instructions exécutées quand la condition est vraie
} else {
    // instructions exécutées quand la condition est fausse
}

let pokemonDispo = 'pikachu';
if (pokemonDispo === 'pikachu') {
    alert("Pikachu attaque éclair");
} else {
    alert("Je prends la fuite");
}

//TESTER 

let nombre = Number(prompt("Entrez un nombre :"));
if (nombre > 0) {
    console.log(nombre + " est positif");
}
else {
    console.log(nombre + " est négatif ou nul");
}

// C - IMBRICATION
let nombre = Number(prompt("Entrez un nombre :"));
if (nombre > 0) {
    console.log(nombre + " est positif");
} else { // nombre <= 0
    if (nombre < 0) {
        console.log(nombre + " est négatif");
    } else { // nombre === 0
        console.log(nombre + " est nul");
    }
}

// D- CONDITION COMPOSEE

// ET &&
if ((nombre >= 0) && (nombre <= 100)) {
    console.log(nombre + " est compris entre 0 et 100");
}

console.log(true && true); // Affiche true
console.log(true && false); // Affiche false
console.log(false && true); // Affiche false
console.log(false && false); // Affiche false


// OU ||
if ((nombre < 0) || (nombre > 100)) {
    console.log(nombre + " est en dehors de l'intervalle [0, 100]");
}
console.log(true || true); // Affiche true
console.log(true || false); // Affiche true
console.log(false || true); // Affiche true
console.log(false || false); // Affiche false

// NON
if (!(nombre > 100)) {
    console.log(nombre + " est inférieur ou égal à 100");
}
console.log(!true); // Affiche false
console.log(!false); // Affiche true


// E - EXPRIMER UN CHOIX


// ===== APPLICATION METEO SIMPLIFIEE ======

let meteo = prompt("Quel temps fait-il dehors ?");


if (meteo === "soleil") {
    alert("Sortez en t-shirt.");
} else if (meteo === "vent") {
    alert("Sortez en pull.");
} else if (meteo === "pluie") {
    alert("Sortez en blouson.");
} else if (meteo === "neige") {
    alert("Restez au chaud à la maison.");
} else {
    alert("Je n'ai pas compris !");
}

// F - switch

switch (expression) {
    case valeur1:
        // instructions exécutées quand expression vaut valeur1
        break;
    case valeur2:
        // instructions exécutées quand expression vaut valeur2
        break;
    //...
    default:
    // instructions exécutées quand aucune des valeurs ne correspond
}

let meteo = prompt("Quel temps fait-il dehors ?");
switch (meteo) {
    case "soleil":
        console.log("Sortez en t-shirt.");
        break;
    case "vent":
        console.log("Sortez en pull.");
        break;
    case "pluie":
        console.log("Sortez en blouson.");
        break;
    case "neige":
        console.log("Restez au chaud à la maison.");
        break;
    default:
        console.log("Je n'ai pas compris !");
}

// G - EXPRESSION TERNAIRE

let pokemonDispo = 'pikachu';
let message;

if (pokemonDispo === 'pikachu') {
    alert("Pikachu attaque éclair");
} else {
    alert("Je prends la fuite");
}
// =================================

let pokemonDispo = 'pikachu';
let message;

message = (pokemonDispo == 'pikachu') ? "Pikachu attaque éclair" : "Je prends la fuite";
alert(message);
