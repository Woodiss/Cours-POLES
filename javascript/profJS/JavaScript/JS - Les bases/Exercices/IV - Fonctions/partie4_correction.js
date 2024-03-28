/*
* EXERCICE 1 - les fonctions
* Compléter le code suivant:
* Celui-ci doit renvoyer un message de bienvenue
*/

function direBonjour(prenom, nom) {
  let message = "Bonjour, " + prenom + " " + nom + " !";
  return message;
}
// TODO : faire saisir le prénom et le nom de l'utilisateur
// TODO : appeler direBonjour() avec les bons arguments et afficher son résultat

// ======================
//       Solution
// ======================

function direBonjour(prenom, nom) {
  let message = "Bonjour, " + prenom + " " + nom + " !";
  return message;
}

let p = prompt("Entrez votre prénom :");
let n = prompt("Entrez votre nom :");
console.log(direBonjour(p, n));

/*
* EXERCICE 2 - les fonctions
* Completer le code suivant
* Celui-ci doit renvoyer le carré d'un nombre
*/

function carre(x) {
  // TODO : compléter le code de la fonction
}

console.log(carre(0)); // Doit afficher 0
console.log(carre(2)); // Doit afficher 4
console.log(carre(5)); // Doit afficher 25

// ======================
//       Solution
// ======================

function carre(x) {
  return x * x;
}

console.log(carre(0)); // Doit afficher 0
console.log(carre(2)); // Doit afficher 4
console.log(carre(5)); // Doit afficher 25  


/* 
* EXERCICE 3 - les fonctions
* En supposant que la fonction JavaScript Math.min() n'existe pas, 
* complétez le programme pour que la fonction min() renvoie le plus petit des 
* deux nombres passés en paramètres.
*/
// Renvoie le minimum entre a et b


function min(a, b) {
  if (a < b) {
    return a;
  }
  return b;
}

console.log(min(4.5, 5)); // 4.5
console.log(min(19, 9)); // 9
console.log(min(1, 1)); // 1

/* 
* EXERCICE 4 - les fonctions
* Complétez le programme pour que la fonction calculer() gère les 4 opérations mathématiques de base : addition, soustraction, multiplication et division.
*/

// Effectue les 4 opérations arithmétiques de base
function calculer(nbGauche, operation, nbDroite) {
  let resultat;
  switch (operation) {
    case "+":
      resultat = nbGauche + nbDroite;
      break;
    case "-":
      resultat = nbGauche - nbDroite;
      break;
    case "*":
      resultat = nbGauche * nbDroite;
      break;
    case "/":
      resultat = nbGauche / nbDroite;
      break;
  }
  return resultat;
}

console.log(calculer(4, "+", 6)); // 10
console.log(calculer(4, "-", 6)); // -2
console.log(calculer(2, "*", 0)); // 0
console.log(calculer(12, "/", 0)); // Infinity