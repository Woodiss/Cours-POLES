/*
TP 1 - Réaliser le jeu du + et du - 

Objectif: Ecrire un programme qui fait deviner un nombre entre 1 et 100.

Le jeu choisit aléatoirement un nombre entre 1 et 100, */

let solution = Math.floor(Math.random() * 100) + 1;
// Cette ligne génère aléatoirement un nombre entre 1 et 100
console.log(solution);

/*
puis il met le joueur au défi de le deviner en 7 tentatives maximum.
Le joueur devine ce nombre en faisant des propositions.
À chaque tour, le joueur doit être informé s'il a deviné ou non le bon nombre
— si ce n'est pas le cas, le programme lui dit si le nombre qu’il a saisi est trop petit ou trop grand,
On considèrera que la saisie du joueur est toujours un nombre valide.

Le jeu se termine quand le joueur a deviné le nombre mystère,
ou s'il a épuisé ses 7 chances.
A la fin du jeu, le joueur a la possibilité de débuter une nouvelle partie.

Commencer par créer 2 fichiers: index.html et main.js.
*/

// Coder ici

let restart;
let propoJoueur = parseInt(prompt("Devine un nombre entre 1 et 100"));

for (i = 0; i <= 7; i++) {
  if (i === 7) {
    alert("Tu as atteind le nombre maxium d'essaies");
    restart = prompt('une nouvelle partie ? "oui" ou "non" ');

    if (restart === "oui") {
      solution = Math.floor(Math.random() * 100) + 1;
      console.log(solution);
      i = 0;
      propoJoueur = parseInt(prompt("Devine un nombre entre 1 et 100"));
    } else {
      alert("Ok on stop");
      break;
    }
  } else if (propoJoueur === solution) {
    alert("Bien jouer tu as trouver ! ");
    restart = prompt('une nouvelle partie ? "oui" ou "non" ');

    if (restart === "oui") {
      solution = Math.floor(Math.random() * 100) + 1;
      console.log(solution);
      i = 0;
      propoJoueur = parseInt(prompt("Devine un nombre entre 1 et 100"));
    } else {
      alert("Ok on stop");
      break;
    }
  } else if (propoJoueur < solution) {
    propoJoueur = parseInt(
      prompt("Le nombre à trouver est plus grand que " + propoJoueur)
    );
  } else {
    propoJoueur = parseInt(
      prompt("Le nombre à trouver est plus petit que " + propoJoueur)
    );
  }
}












// function rego() {
//   restart = prompt('une nouvelle partie ? "oui" ou "non" ');

//   if (restart === "oui") {
//     solution = Math.floor(Math.random() * 100) + 1;
//     console.log(solution);
    
//     propoJoueur = parseInt(prompt("Devine un nombre entre 1 et 100"));
//     } else {
//       alert("Ok on stop");
//   }
// }



// function jeu() {

// for (i = 0; i <= 7; i++) {
//   if (i === 7) {
//     alert("Tu as atteind le nombre maxium d'essaies");
//     Rego();

//   } else if (propoJoueur === solution) {
//     alert("Bien jouer tu as trouver ! ");
//     Rego();

//   } else if (propoJoueur < solution) {
//     propoJoueur = parseInt(
//       prompt("Le nombre à trouver est plus grand que " + propoJoueur)
//     );
//   } else {
//     propoJoueur = parseInt(
//       prompt("Le nombre à trouver est plus petit que " + propoJoueur)
//     );
//   }
// }
// }