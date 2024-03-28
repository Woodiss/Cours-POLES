// EXERCICE 1

let pElt = document.createElement("p");
let lienElt = document.createElement("a");
lienElt.href = "https://fr.wikipedia.org/wiki/Liste_des_langages_de_programmation";
lienElt.textContent = "liste";
pElt.appendChild(document.createTextNode("En voici une "));
pElt.appendChild(lienElt);
pElt.appendChild(document.createTextNode(" plus complète."));
document.getElementById("contenu").appendChild(pElt);


// EXERCICE 2

// Liste des journaux
let journaux = ["http://lemonde.fr", "http://lefigaro.fr", "http://liberation.fr"];

for (let i = 0; i < journaux.length; i++) {
    let lienElt = document.createElement("a");
    lienElt.textContent = journaux[i];
    lienElt.href = journaux[i];
    // Ajoute un lien
    document.getElementById("contenu").appendChild(lienElt);
    // Ajoute une balise <br>
    document.getElementById("contenu").appendChild(document.createElement("br"));
}


// EXERCICE 3

// Liste des mots du dictionnaire
let mots = [
    {
        terme: "Procrastination",
        definition: "Tendance pathologique à remettre systématiquement au lendemain"
    },
    {
        terme: "Tautologie",
        definition: "Phrase dont la formulation ne peut être que vraie"
    },
    {
        terme: "Oxymore",
        definition: "Figure de style qui réunit dans un même syntagme deux termes sémantiquement opposés"
    }
];

let dlElt = document.createElement("dl"); // Création de la liste

// Pour chaque mot, on construit une balise <dt> avec le terme et une balise <dd> avec sa définition
mots.forEach(function (mot) {
    let dtElt = document.createElement("dt");
    let strongElt = document.createElement("strong");
    strongElt.textContent = mot.terme;
    let ddElt = document.createElement("dd");
    ddElt.textContent = mot.definition;

    dtElt.appendChild(strongElt);
    dlElt.appendChild(dtElt);
    dlElt.appendChild(ddElt);
});

document.getElementById("contenu").appendChild(dlElt); // Ajout de la liste à la page

// EXERCICE 4

let couleurTexte = prompt("Entrez la couleur du texte :");
let couleurFond = prompt("Entrez la couleur du fond :");

let divsElts = document.getElementsByTagName("div");
for (let i = 0; i < divsElts.length; i++) {
    divsElts[i].style.color = couleurTexte;
    divsElts[i].style.backgroundColor = couleurFond;
}

// EXERCICE 5

let styleElement = getComputedStyle(document.getElementById("contenu"));
let listeElt = document.createElement("ul");
let longueurElt = document.createElement("li");
longueurElt.textContent = "Longueur : " + styleElement.width;
let hauteurElt = document.createElement("li");
hauteurElt.textContent = "Hauteur : " + styleElement.height;
listeElt.appendChild(hauteurElt);
listeElt.appendChild(longueurElt);
document.getElementById("infos").appendChild(document.createTextNode("Informations sur l'élément"));
document.getElementById("infos").appendChild(listeElt);