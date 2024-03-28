// [ source: https://github.com/oc-courses/intro-javascript ]
/*
 * Exo 1: * Ecrivez un programme qui fait saisir un nom de jour à l'utilisateur,
 * puis affiche le nom du jour suivant.
 * S'il y a des erreurs de saisie (jour incorrect), cela doit être géré !
 * A toi de voir comment.
 */

// code ici

let jour = prompt("Quel jour sommes nous aujourd'hui").toLowerCase();
// jour = jour.toLowerCase();

switch (jour) {
  case "lundi":
    console.log("demain nous seront MARDI");
    break;
  case "mardi":
    console.log("demain nous seront MERCREDI");
    break;
  case "mercredi":
    console.log("demain nous seront JEUDI");
    break;
  case "jeudi":
    console.log("demain nous seront VENDREDI");
    break;
  case "vendredi":
    console.log("demain nous seront SAMEDI");
    break;
  case "samedi":
    console.log("demain nous seront DIMANCHE");
    break;
  case "dimanche":
    console.log("demain nous seront LUNDI");
    break;
  default:
    console.log("jour incorrecte");
}

/* 
* Exo 2:
* Complétez ce programme pour afficher l'heure qu'il sera dans une seconde.
* Attention, ce programme est moins simple qu'il en a l'air : validez votre solution 
* en la testant avec les entrées suivantes. Vous devez obtenir les résultats indiqués.
    14h17m59s => 14h18m0s
    6h59m59s => 7h0m0s
    23h59m59s => 0h0m0s (minuit)
*/

let heures = 14; // Faire varier cette variable entre 0 et 23
let minutes = 17; // faire varier cette variable entre 0 et 59
let secondes = 59; // faire varier cette variable entre 0 et 59

// Ajoutez votre code ici


// secondes++;
// if (secondes === 60) {
//   secondes = 0;
//   minutes++;

//   if (minutes === 60) {
//     minutes = 0;
//     heures++;

//     if (heures === 24) {
//       heures = 0;
//     }
//   }
// }
// console.log(`il est ${heures}h ${minutes} et ${secondes}s`);

if ((heures >= 0) && (heures <= 23) && (minutes >= 0) && (minutes <= 59) && (secondes >= 0) && (secondes <= 59)) {
  secondes++; // On incrémente les secondes
  if (secondes === 60) {
    // Il faut mettre les secondes à 0 et passer à la minute suivante
    secondes = 0;
    minutes++;
    if (minutes === 60) {
      // Il faut mettre les minutes à 0 et passer à l'heure suivante
      minutes = 0;
      heures++;
      if (heures === 24) {
        // L'heure suivante est minuit
        heures = 0;
      }
    }
  }
  console.log("Dans une seconde, il sera " + heures + " heures, " + minutes + " minutes et " + secondes + " secondes");
} else {
  console.log("Erreur : heure incorrecte !");
}


/*
* Exo 3 
*
* Ecrivez un programme qui fait saisir la note d'examen d'un étudiant. 
* => utiliser: let moyenne = Number(prompt("Entrez une moyenne de baccalauréat :"));

* puis affiche si ce candidat est recalé (moyenne inférieure à 10), 

* reçu (moyenne entre 10 et 12) 
* ou reçu avec mention (moyenne supérieure ou égale à 12).
* Essayer avec méthode "if... else" 
*
* Tester le même exercice avec "switch" 
*   -> la moyenne est sur 10
*   -> si de 1 à 4: recalé
*   -> si 5: reçu
*   -> + de 5: reçu avec mention
*/

let moyenne = Number(prompt("Entrez une moyenne de baccalauréat :"));

if (moyenne <= 20 && moyenne >= 0) {
  if (moyenne < 10) {
    console.log("recalé");
  } else if (moyenne >= 10 && moyenne <= 12) {
    console.log("reçu !");
  } else if (moyenne > 12) {
    console.log("reçu avec mention !");
  }
} else {
  ("nombre incorrecte");
}

// let moyenne = Number(prompt("Entrez une moyenne de baccalauréat :"));

if (moyenne <= 10 && moyenne >= 0) {
  switch (moyenne) {
    case 0:
      console.log("recalé");
      break;
    case 1:
      console.log("recalé");
      break;
    case 2:
      console.log("recalé");
      break;
    case 3:
      console.log("recalé");
      break;
    case 4:
      console.log("recalé");
      break;
    case 5:
      console.log("reçu");
      break;
    default:
      console.log("reçu avec mention !");
  }
} else {
  console.log("chiffre incorrecte");
}
