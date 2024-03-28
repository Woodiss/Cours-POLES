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

let normalSujet = ["L'amour", "La haine", "L'argent"];
let normalVerbe = ["aime", "adore", "calinne"];
let normalComplement = ["et c'est comme ça !", "je te l'avais dit !", "HA HA HA HA !",];

let tristeSujet = ["La peur", "L'angloise", "La tristesse"]
let tristeVerbe = ["panique", "rend fou", "peu parfois"]
let tristeComplement = ["et ça, c'est triste.", "mais on n'y peu rien!", "et patati et patata..."]

// Math.floor(Math.random() * 100) + 1;



let citation





// 1 (combien de citation ?)
function numberCita() {
    let combienCita = Number(prompt("Choisi un nombre de citation de 1 à 5 !"));
    phrasesGenerator(combienCita);
}



// 2 (quel genre de citation + génération des citations)
function phrasesGenerator(param1) {
    let i = 0
    let genre = prompt("Quel genre de citation choisis-tu ? (normal ou triste)").toLowerCase();
    while (i <= param1) {

        let sujet, verbe, complement;

        if (genre === "normal") {
            sujet = normalSujet[Math.floor(Math.random() * normalSujet.length)];
            verbe = normalVerbe[Math.floor(Math.random() * normalVerbe.length)];
            complement = normalComplement[Math.floor(Math.random() * normalComplement.length)];
        } else if (genre === "triste") {
            sujet = tristeSujet[Math.floor(Math.random() * tristeSujet.length)];
            verbe = tristeVerbe[Math.floor(Math.random() * tristeVerbe.length)];
            complement = tristeComplement[Math.floor(Math.random() * tristeComplement.length)];
        } else {
            console.log("Genre non reconnu.");
            return;
        }

        alert(`${sujet} ${verbe} ${complement}`);
        // document.write(`${sujet} ${verbe} ${complement}<br>`)
        i++
    }

    onRelance()
}





// 4 (demander si ont relance ou pas)
function onRelance() {

    if (confirm("Appuie sur OK si tu veux d'autres citations !") == true) {
        console.log("YES");
        numberCita()
    } else {
        console.log("NOO");
        return
    }
}



// mise en place 
numberCita()




