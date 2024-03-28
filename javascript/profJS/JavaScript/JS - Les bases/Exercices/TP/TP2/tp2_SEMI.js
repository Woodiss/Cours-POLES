// ACTIVITE 1

/*
===== CRÉER UN GÉNÉRATEUR DE CITATION =====

Niveau 1

Les citations seront construites aléatoirement en assemblant des morceaux de phrase
Chaque citation est la combinaison d'au moins 3 morceaux de phrases (ex: sujet, verbe, complément)
A défaut d'être intelligible, la phrase doit être cohérente (pas de point d'exclamation au milieu d'une phrase)
Le résultat peut être simplement affiché dans la console

Niveau 2

Le programme propose les options suivantes :
- Choisir le nombre de citations générées (de 1 à 5)
- Choisir entre 2 types de générateurs de citations (vous devrez donc avoir 2 ensembles de phrases)
- Une fois les citations générées, proposer de générer de nouvelles citations ou d'arrêter là le programme

Remarque: la fonction .reload() n'est pas autorisée
*/

let arraySujet = ["L'amour ", "La haine ", "L'argent "];
let arrayVerbe = ["aime ", "adore ", "calinne "];
let arrayComplement = [ "et c'est comme ça !", "je te l'avais dit !", "HA HA HA HA !",];

// Math.floor(Math.random() * 100) + 1;


let phrase = ""
let sujetNumber;
let verbeNumber;
let complementNumber;


function phraseGenerator() {
  let sujet = Math.floor(Math.random() * 100) + 1;
  console.log(sujet);

  let verbe = Math.floor(Math.random() * 100) + 1;
  console.log(verbe);

  let complement = Math.floor(Math.random() * 100) + 1;
  console.log(complement);

  if (sujet <= 33) {
    sujetNumber = arraySujet[0];
  } else if (sujet > 33) {
    sujetNumber = arraySujet[1];
  } else {
    sujetNumber = arraySujet[2];
  }
  console.log(sujetNumber);


  if (verbe <= 33) {
    verbeNumber = arrayVerbe[0];
  } else if (sujet > 33) {
    verbeNumber = arrayVerbe[1];
  } else {
    verbeNumber = arrayVerbe[2];
  }
  console.log(verbeNumber);


  if (complement <= 33) {
    complementNumber = arrayComplement[0];
  } else if (sujet > 33) {
    complementNumber = arrayComplement[1];
  } else {
    complementNumber = arrayComplement[2];
  }
  console.log(complementNumber);
  phrase = sujetNumber + verbeNumber + complementNumber
//   console.log(`${sujetNumber} ${verbeNumber} ${complementNumber}`);
//   return(sujetNumber, verbeNumber, complementNumber)
  myFunction()
}








function myFunction() {
    
    let text =  phrase + "\n Appuie sur OK si tu veux une autre citation !";
    if (confirm(text) == true) {
        console.log("YES");
        phraseGenerator()
    } else {
        console.log("NOO");
    }
}



myFunction()
