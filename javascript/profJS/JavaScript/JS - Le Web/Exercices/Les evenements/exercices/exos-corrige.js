// EXERCICE 1

function clic() {
    compteurClics++;
    document.getElementById("compteurClics").textContent = compteurClics;
}

var compteurClics = 0;

document.getElementById("clic").addEventListener("click", clic);

document.getElementById("desactiver").addEventListener("click", function () {
    document.getElementById("clic").removeEventListener("click", clic);
});


// EXERCICE 2

document.querySelector("button").addEventListener("click", function () {
    var nomDessert = prompt("Entrez le nom du nouveau dessert :");

    var dessertElt = document.createElement("li");
    dessertElt.textContent = nomDessert;
    dessertElt.addEventListener("click", function (e) {
        var nouveauNom = prompt("Modifiez le nom du dessert :", e.target.textContent);
        e.target.textContent = nouveauNom;
    });

    document.getElementById("desserts").appendChild(dessertElt);
});



// EXERCICE 3

var questions = [
    {
        enonce: "Combien font 2+2 ?",
        reponse: "2+2 = 4"
    },
    {
        enonce: "En quelle année Christophe Colomb a-t-il découvert l'Amérique ?",
        reponse: "1492"
    },
    {
        enonce: "On me trouve 2 fois dans l'année, 1 fois dans la semaine, mais pas du tout dans le jour... Qui suis-je ?",
        reponse: "La lettre N"
    }
];

var i = 1; // Permet de numéroter les questions

questions.forEach(function (question) {
    // Titre de la question
    var titreElt = document.createElement("strong");
    titreElt.textContent = "Question " + i + " : ";

    // Enoncé de la question (dans une balise <i>)
    var texteEnonceElt = document.createElement("i");
    texteEnonceElt.textContent = question.enonce;

    // Enoncé de lq question
    var enonceElt = document.createElement("div");
    enonceElt.appendChild(titreElt);
    enonceElt.appendChild(texteEnonceElt);

    // La zone de réponse contient initialement un bouton
    var zoneReponseElt = document.createElement("div");
    var boutonElt = document.createElement("button");
    boutonElt.textContent = "Afficher la réponse";
    zoneReponseElt.appendChild(boutonElt);

    boutonElt.addEventListener("click", function () {
        // Remplacement du bouton par la réponse à la question
        var reponseElt = document.createElement("div");
        reponseElt.textContent = question.reponse;
        zoneReponseElt.innerHTML = "";
        zoneReponseElt.appendChild(reponseElt);
    });

    // La question regroupe l'énoncé et la zone de réponse
    var questionElt = document.createElement("p");
    questionElt.appendChild(enonceElt);
    questionElt.appendChild(zoneReponseElt);
    document.getElementById("contenu").appendChild(questionElt);

    i++;
});