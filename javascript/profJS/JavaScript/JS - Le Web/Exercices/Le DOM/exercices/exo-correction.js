/*
 Exercice 1 
*/

// Compte les éléments à partir d'un sélecteur
function compterElements(selecteur) {
    return document.querySelectorAll(selecteur).length;
}

console.log(compterElements("p")); // Doit afficher 4
console.log(compterElements(".adjectif")); // Doit afficher 3
console.log(compterElements("p .adjectif")); // Doit afficher 3
console.log(compterElements("p > .adjectif")); // Doit afficher 2


/*
 Exercice 2 
*/

// Affiche des informations sur les liens
function infosLiens() {
    var liensElts = document.getElementsByTagName("a");
    var nombreLiens = liensElts.length;
    console.log(nombreLiens);

    console.log("la première cible est : " + liensElts[0].getAttribute("href"));
    console.log("la dernière cible est : " + liensElts[nombreLiens - 1].getAttribute("href"));

}

// Affiche si un élément possède une classe
function possede(id, classe) {
    var instrument = document.getElementById(id);
    if (instrument !== null) {
        console.log(instrument.classList.contains(classe));
    } else {
        console.log("Aucun élément ne possède l'identifiant " + id);
    }
}

infosLiens();

possede("saxophone", "bois"); // Doit afficher true
possede("saxophone", "cuivre"); // Doit afficher false
possede("trompette", "cuivre"); // Doit afficher true
possede("contrebasse", "cordes"); // Doit afficher erreur