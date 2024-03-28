// ===== Variables et opérateurs ======

// Exo1: Ecrivez un programme qui affiche votre nom, puis votre âge.

// Solution 1
console.log("Baptiste");
console.log(41);

// Solution 2
alert("Baptiste");
alert(41);

// Solution 3

let prenom = prompt("Entrez votre nom");
let age = prompt("Entrez votre age");

alert(prenom);
alert(age);
/*
OU
console.log(prenom);
console.log(age);

*/


/* 
* Exo 2: 
* Ecrivez un programme qui calcule et affiche le résultat de l'addition, 
* de la soustraction, de la multiplication et de la division de 9 par 3.
*/
// Solution 1
console.log(6 + 3); // 9
console.log(6 - 3); // 3
console.log(6 * 3); // 18
console.log(6 / 3); // 2

// Solution 2
let nombreA = 9;
let nombreB = 3;

let addition = nombreA + nombreB;
let soustraction = nombreA - nombreB;
let multiplication = nombreA * nombreB;
let division = nombreA / nombreB;

console.log(addition, soustraction, multiplication, division);


/* 
* Exo 3: 
* Observez le programme puis tentez de prévoir les valeurs affichées lors de son exécution.
* Vérifiez vos prévisions en l'exécutant.
*/

console.log(4 + 5); // 9
// 4 -> type Number
// 5 -> type Number
// + permet de faire une addition entre 4 et 5

console.log("4 + 5"); // "4 + 5"
// "4 + 5" -> type String (chaîne de caractère)

console.log("4" + "5"); //45
// "4" -> type String
// "5" -> type String
// + permet de faire une concaténation entre "4" et "5"


/* 
* Exo 4: 
* Observez le programme et tentez de prévoir les valeurs finales de chaque variable.
* Vérifiez vos prévisions en l'exécutant.
*/

let a = 2;
a -= 1;
a++;
let b = 8;
b += 2;
let c = a + b * b;
let d = a * b + b;
let e = a * (b + b);
let f = a * b / a;
let g = b / a * a;
console.log(a, b, c, d, e, f, g);  // 2 10 102 30 40 10 10

/* 
* Exo 5: 
* Complétez le programme pour convertir une tempéraure des degrés Celsius en degrés Fahrenheit.

/* C'est à Daniel Gabriel Fahrenheit que l'on doit l'invention des thermomètres 
en graduation Fahrenheit. Au début, ses thermomètres sont à l'alcool (1709), 
mais il remplace rapidement l'alcool par du mercure (1715), permettant à ses 
outils de mesure de fournir des données comparables. En 1742, un autre 
scientifique, Anders Celsius, propose une nouvelle graduation au thermomètre. 
La conversion entre les échelles est donnée par [°F] = [°C] x 9/5 + 32. */

let tempCel = 37.1;
let tempFar = tempCel * 9 / 5 + 32;
console.log(tempCel + "°C = " + tempFar + "°F");
//console.log(tempFar);


/* 
* Exo 6: 
* Complétez le programme afin qu'il permute les valeurs des deux variables.
* Il existe plusieurs solutions à cet exercice. 
* Astuce : vous n'êtes pas limité(e) à l'utilisation de deux variables.
*/

// Permutation de variables
let nombre1 = 5;
let nombre2 = 3;

// Solution classique utilisant une variable temporaire
let temp = nombre1;
nombre1 = nombre2;
nombre2 = temp;

// Solution alternative valable uniquement pour des nombres
/* nombre1 += nombre2;
nombre2 = nombre1 - nombre2;
nombre1 -= nombre2; */

console.log(nombre1); // 3
console.log(nombre2); // 5