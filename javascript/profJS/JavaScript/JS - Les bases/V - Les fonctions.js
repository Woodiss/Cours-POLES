// ======= LES FONCTIONS========

// Documentation:
// https://developer.mozilla.org/fr/docs/Web/JavaScript/Guide/Fonctions

//Dans les chapitres précédents vous avez découvert quelques fonctions :
alert();
prompt();


// I - DEFINITION :
// Les fonctions sont un moyen de compacter des fonctionnalités en vue de leur réutilisation.
// Quand vous avez besoin de répéter un code, vous pouvez appeler une fonction, par son nom, au
// lieu de ré‐écrire la totalité du code à chaque fois.


// II- CREER UNE FONCTION

function myFunction(arguments) {
    // Le code que la fonction va devoir exécuter
}

/*
* function: présent à chaque déclaration de fonction.
*
* myFunction: nom de la fonction;
*
* un couple de parenthèses () : contient les arguments. 
*
* un couple d'accolades {}: contenant le code que la fonction devra exécuter.
*/

// TEST 1

function afficherMsg() {
    alert('Ceci est une fonction !');
}

// TEST 2 

function afficherMsg() {
    alert('Ceci est une fonction !');
}
afficherMsg(); // On exécute ici le code contenu dans la fonction

// Tout code écrit dans une fonction ne s'exécutera que si 
// on a appelé la fonction préalablement (« appeler une fonction » signifie « exécuter »)
// Sans ça, le code qu'elle contient ne s'exécutera jamais.



// III - LA PORTEE DES VARIABLES

//Exemple 1
let msg = 'Hello world !';

function direBonjour() {
    alert(msg);
}

direBonjour(); // Affiche "Hello World !"

//Exemple 2
let message = 'Ici la variable globale !';

function afficherMsg() {
    let message = 'Ici la variable locale !';
    alert(message);
}

afficherMsg(); // Affiche 'Ici la variable locale !'


// La variable locale prend le dessus sur la variable globale de même nom 
// pendant tout le temps de l'exécution de la fonction. 
// Mais une fois la fonction terminée (et donc, la variable locale détruite)
// c'est la variable globale qui reprend ses droits.

// NOTE: Si j'utilise une variable juste pr une fonction alors 
// je la déclare DANS la fonction.


let var1 = 2, var2 = 3;
function calculate() {
    alert(var1 * var2); // Affiche : « 6 » (sans blague ?!)
}
calculate();


function calculate() {
    let var1 = 2,
        var2 = 3;
    alert(var1 * var2);
}
calculate(); //


// IV- LES ARGUMENTS

// Exemple: 
alert('Hello !');

// On peut définir nos propres fonctions avec nos propres arguments

function multiplier(num1, num2) {
    let resultat = num1 * num2;
    return resultat;
}

// Une fonction peut s'utiliser plusieurs fois :

multiplier(4, 7);
multiplier(20, 20);
multiplier(0.5, 3);

/* 
* Note : L'instruction return indique au navigateur qu'il faut renvoyer la
* variable "resultat" en dehors de la fonction afin qu'elle puisse être réutilisée
* par ailleurs. Cette instruction est nécessaire car les variables définies à
* l'intérieur des fonctions sont uniquement disponibles à l'intérieur de ces
* fonctions !!
*/

/*
* Note 2: Bien nommer fonctions et paramètres
* Comme pour les variables, le nommage des fonctions et des paramètres 
* joue un rôle important dans la lisibilité du programme. 
* Les recommandations sont les mêmes : 
* choisir des noms qui expriment précisément le rôle et 
* respecter la norme camelCase.
*/

/* Note 3:
* S'il est difficile de trouver un nom pertinent pour une fonction, 
* c'est sans doute que son rôle n'est pas bien défini et que sa création 
* doit être remise en cause.
*/

// ======== POUR APPROFONDIR ( IMPORTANT ! ) ========

return
// https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Instructions/return

this
// https://www.youtube.com/watch?v=IudrkWwOw8Y