/*
* Exo 1
*
* Ecrivez un programme qui fait saisir un nom de jour à l'utilisateur,
* puis affiche le nom du jour suivant.
* S'il y a des erreurs de saisie (jour incorrect), cela doit être géré !
* A toi de voir comment.
*/

let jour = prompt("Entrez un jour de la semaine :");

// Solution avec un if
if (jour === "lundi") {
    console.log("Demain, nous serons mardi");
} else if (jour === "mardi") {
    console.log("Demain, nous serons mercredi");
} else if (jour === "mercredi") {
    console.log("Demain, nous serons jeudi");
} else if (jour === "jeudi") {
    console.log("Demain, nous serons vendredi");
} else if (jour === "vendredi") {
    console.log("Demain, nous serons samedi");
} else if (jour === "samedi") {
    console.log("Demain, nous serons dimanche");
} else if (jour === "dimanche") {
    console.log("Demain, nous serons lundi");
} else {
    console.log("Jour non reconnu !");
}


// Solution avec un switch
switch (jour) {
    case "lundi":
        console.log("Demain, nous serons mardi");
        break;
    case "mardi":
        console.log("Demain, nous serons mercredi");
        break;
    case "mercredi":
        console.log("Demain, nous serons jeudi");
        break;
    case "jeudi":
        console.log("Demain, nous serons vendredi");
        break;
    case "vendredi":
        console.log("Demain, nous serons samedi");
        break;
    case "samedi":
        console.log("Demain, nous serons dimanche");
        break;
    case "dimanche":
        console.log("Demain, nous serons lundi");
        break;
    default:
        console.log("Jour non reconnu !");
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

// On teste tous les cas d'erreur
if ((heures >= 0) && (heures <= 23) && (minutes >= 0) && (minutes <= 59) &&
    (secondes >= 0) && (secondes <= 59)) {
    secondes++; // On incrémente les secondes
    if (secondes === 60) {
        // Il faut mettre les secondes à 0 et passer à la minute suivante
        secondes = 0;
        minutes++;
        if (minutes === 60) {
            // Il faut mettre les minutes à 0 et passer à l'heure suivante
            minutes = 0;
            heures++;
            if (heures === 24) { // L'heure suivante est minuit
                heures = 0;
            }
        }
    }
    console.log("Dans une seconde, il sera " + heures + " heures, " + minutes + " minutes et " + secondes + " secondes");
} else {
    console.log("Erreur : heure incorrecte !");
}

/*
* Exo 3 - les conditions
* Ecrivez un programme qui fait saisir la note d'examen d'un étudiant. 
* => utiliser: let moyenne = Number(prompt("Entrez une moyenne de baccalauréat :"));
* puis affiche si ce candidat est recalé (moyenne inférieure à 10), 
* reçu (moyenne entre 10 et 12) 
* ou reçu avec mention (moyenne supérieure ou égale à 12).
* Essayer avec méthode "if... else" 
*
* Tester le même exercie avec "switch" 
*   -> la moyenne est sur 10
*   -> si de 1 à 4: recalé
*   -> si 5: reçu
*   -> + de 5: reçu avec mention
*/

// IF... ELSE
let moyenne = Number(prompt("Entrez une moyenne de baccalauréat :"));

if (moyenne < 10) {
    console.log("Le candidat est recalé");
} else if (moyenne < 12) { // 10 <= moyenne < 12
    console.log("Le candidat est reçu");
} else { // moyenne >= 12
    console.log("Le candidat est reçu avec mention");
}

// SWITCH

let moyenne = prompt("Entrez une moyenne de baccalauréat :");
switch (moyenne) {
    case "1":
        console.log("recalé");
        break;
    case "2":
        console.log("recalé");
        break;
    case "3":
        console.log("recalé");
        break;
    case "4":
        console.log("recalé");
        break;
    case "5":
        console.log("reçu");
        break;
    case "6":
        console.log("recu ac mention");
        break;
    case "7":
        console.log("recu ac mention");
        break;
    case "8":
        console.log("recu ac mention");
        break;
    case "9":
        console.log("recu ac mention");
        break;
    case "10":
        console.log("recu ac mention");
        break;
    default:
        console.log("Je n'ai pas compris !");
}