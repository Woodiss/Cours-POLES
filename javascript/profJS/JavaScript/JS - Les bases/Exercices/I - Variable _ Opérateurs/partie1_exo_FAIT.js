// [ source: https://github.com/oc-courses/intro-javascript ]


// ===== Les variables ======

/* 
* Exo 1: Ecrivez un programme qui affiche votre nom, puis votre âge.
*/

let nom = prompt("entrez votre nom");
let age = prompt("entrez votre age");
console.log(`ton nom est ${nom} et tu as ${age} ans`);



/* 
* Exo 2: 
* Ecrivez un programme qui calcule et affiche le résultat de l'addition, 
* de la soustraction, de la multiplication et de la division de 9 par 3.
*/

let aa = 9
let bb = 3

let addition = aa + bb;
let soustraction = aa - bb;
let multiplication = aa * bb;
let division = aa / bb;

console.log(`addition = ${addition}, soustraction = ${soustraction}, multiplication = ${multiplication}, division = ${division}`);





/* 
* Exo 3: 
* Observez le programme puis tentez de prévoir les valeurs affichées lors de son exécution.
* Vérifiez vos prévisions en l'exécutant.
*/

console.log(4 + 5);
// number + number donc 9
console.log("4 + 5");
// va juste afficher 4 + 5
console.log("4" + "5");
// va concaténer et donc afficher 45




/* 
* Exo 4: 
* Observez le programme et tentez de prévoir les valeurs finales de chaque variable.
* Vérifiez vos prévisions en l'exécutant.
*/



    var a = 2;
    a -= 1;
    a++; // a = 2
    var b = 8;
    b += 2; // b = 10
    var c = a + b * b; // c = 102 (2 + 10 * 10)
    var d = a * b + b; // d = 30 (2 * 10 + 10)
    var e = a * (b + b); // e = 40 (2 * (10 + 10))
    var f = a * b / a; // f = 10 (2 * 10 / 2)
    var g = b / a * a; // g = 10 (10 / 2 * 2)

console.log(a, b, c, d, e, f, g);
// OU 
document.write(`${a}, ${b}, ${c}, ${d}, ${e}, ${f}, ${g}`);




/* 
* Exo 5: 
* Complétez le programme pour convertir une tempéraure des degrés Celsius en degrés Fahrenheit.

/* C'est à Daniel Gabriel Fahrenheit que l'on doit l'invention des thermomètres 
en graduation Fahrenheit. Au début, ses thermomètres sont à l'alcool (1709), 
mais il remplace rapidement l'alcool par du mercure (1715), permettant à ses 
outils de mesure de fournir des données comparables. En 1742, un autre 
scientifique, Anders Celsius, propose une nouvelle graduation au thermomètre. 
La conversion entre les échelles est donnée par [°F] = [°C] x 9/5 + 32. 
*/

var tempCel = 37.1;

// Ajoutez ici le code pour convertir tempCel en degrés Fahrenheit

console.log( tempCel + " Celsius = "+ ((tempCel * 1.8) + 32) + " Farenheit");




/* 
* Exo 6: 
* Complétez le programme afin qu'il permute les valeurs des deux variables.
* Il existe plusieurs solutions à cet exercice. 
* Astuce : vous n'êtes pas limité(e) à l'utilisation de deux variables.
*/

var nombre1 = 5;
var nombre2 = 3;

let changement = nombre1
nombre1 = nombre2
nombre2 = changement

// Tapez votre code ici (sans rien modifier d'autre !)

console.log(nombre1); // Doit afficher 3
console.log(nombre2); // Doit afficher 5