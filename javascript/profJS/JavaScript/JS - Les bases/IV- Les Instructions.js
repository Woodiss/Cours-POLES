// ====== LES INSTRUCTIONS ======

// Documentation:
// https://developer.mozilla.org/fr/docs/Web/JavaScript/Guide/Boucles_et_it%C3%A9ration


// Essayons d'écrire un programme qui affiche tous les nombres entre 1 et 10.
// Voici ce que nous pouvons écrire avec nos connaissances actuelles.

console.log(1);
console.log(2);
console.log(3);
console.log(4);
console.log(5);
console.log(6);
console.log(7);
console.log(8);
console.log(9);
console.log(10);

// I - BOUCLE while

while (condition) {
    // instructions exécutées tant que la condition est vérifiée
}

// TESTER
let nombre = 1;
while (nombre <= 10) {
    console.log(nombre);
    nombre++;
}


// ATTENTION BOUCLE INFINI
let nombre = 1;
while (nombre <= 5) {
    console.log(nombre);
    // La variable n'est plus modifiée : la condition sera toujours vraie
}


// II- BOUCLE FOR

for (initialisation; condition; étape) {
    // instruction executées tant que la condition est vérifiée
}

// 1 - L'initialisation se produit une seule fois, au début de l'exécution.
// 2 - La condition est évaluée avant chaque tour de boucle. 
//      Si elle est vraie, un nouveau tour de boucle est effectué.
//      Sinon, la boucle est terminée.
// 3 - L'étape est réalisée après chaque tour de boucle.

// Plusieurs écritures possibles:

let compteur;
for (compteur = 1; compteur <= 10; compteur++) {
    console.log(compteur);
}

for (let compteur = 1; compteur <= 10; compteur++) {
    console.log(compteur);
}

for (let compteur = 1; compteur <= 10; compteur++) {
    console.log(compteur);
    compteur++; // La variable est modifiée dans le corps de la boucle
}
