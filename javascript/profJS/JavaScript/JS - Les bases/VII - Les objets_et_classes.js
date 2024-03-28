/*
 * =========================================
 *              LES OBJECTS
 * =========================================
*/

// Documentation:
// https://developer.mozilla.org/fr/docs/Web/JavaScript/Guide/Utiliser_les_objets
// https://developer.mozilla.org/fr/docs/Learn/JavaScript/Objects/JS_orient%C3%A9-objet 


// I - INTRODUCTION AUX OBJETS

// JavaScript est un langage orienté objet. 
// Cela veut dire que le langage dispose d'objets.

/* REMARQUE :
*  Toutefois, attention, le JavaScript n'est pas un langage orienté objet 
*  du même style que le C++, le C# ou Java. 
*  Le JavaScript est un langage orienté objet par prototype. 
*  Si vous avez déjà des notions de programmation orientée objet, 
*  vous verrez quelques différences.
*/

/* 
* C'est quoi, un objet ?
*
* Exemple : un stylo.
* -> Sa marque: Bic
* -> Sa couleur: Noir, bleu, vert, rouge
* -> Son type: à encre, à plume, à bille
* -> Ses propriétés (sa fonction, ce qu'il fait): Ecrire

*  Qu'est-ce qu'un objet informatique ? 
*  Un objet informatique est une entité qui possède des propriétés. 
*  Chaque propriété définit une caractéristique de l'objet. 
*  Une propriété peut être une information associée à l'objet 
*  (exemple : la couleur ) ou une action (exemple : écrire).
*/

let stylo = {
    marque: "Bic",
    couleur: "bleu",
    type: "bille",
    ecrire: function () {
        console.log("J'écris ...");
    }
};


/*
* Quel rapport avec la programmation ?
* La programmation orientée objet (en abrégé POO) est 
* une manière d'écrire des programmes en utilisant des objets. 
* Quand on utilise la POO, on cherche à représenter le domaine étudié 
* sous la forme d'objets informatiques. 
* Chaque objet informatique modélisera un élément de ce domaine.
* Un objet à des propriétés et des méthodes. (note: Les méthodes sont des fonctions)
*/


let objet = {
    proprieteNom1: proprieteValeur1,
    proprieteNom2: proprieteValeur2,
    methode1: function () {
        // code
    },
    methode2: function () {
        // code
    }
}

// REMARQUE: Attention à la syntaxe ! (accolade, virgule, deux points);

// EXEMPLE :

let chien = {
    nom: "Rex",
    couleur: "blanc",
    age: 4
};


// II - ACCEDER AUX PROPRIETES DES OBJETS


console.log(chien.nom);
// ou 
console.log(chien["nom"]);



// III- LISTER TOUTES LES PROPRIETES D'UN OBJET

/*
    L'instruction for...in permet d'itérer sur les propriétés d'un objet. 
    Pour chaque propriété obtenue, on exécute une instruction 
    (ou plusieurs grâce à un bloc d'instructions).
*/

let object = {
    a: 1,
    b: 2,
    c: 3
};

for (let property in object) {
    //console.log( property );
    //console.log( object[property] );
    console.log(property + " : " + object[property]);
}

// voir doc: https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Instructions/for...in


// Test 1

let chien = {
    nom: "Rex",
    couleur: "blanc",
    age: 4,
};

for (let propriete in chien) {
    console.log(chien.propriete);
    // Ca ne marche pas car propriete est une string (chaine de caractère)
}

// Test 2
for (let propriete in chien) {
    console.log(chien[propriete]);
}

// IV - LES METHODES 

let monObjet = {
    propriete1: valeur1,
    propriete2: valeur2,
    // ... ,
    methode1: function (/* ... */) {
        // ...
    },
    methode2: function (/* ... */) {
        // ...
    },
    // ...
};

console.log(monObjet.methode1());
// Affiche le résultat de l'appel de la méthode methode1 de monObjet


// Exemple
let chien = {
    nom: "Rex",
    couleur: "blanc",
    age: 4,
    aboie: function () {
        alert("Wouaf");
    }
};

chien.aboie();



/*
 * =========================================
 *              LES CLASSES
 * =========================================
*/

// Documentation: https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Classes

/*
Et si nous avons besoin de créer plusieurs objets ? 
Il serait très fastidieux de les créer à la main comme nous l'avons vu précédemment.

Pour cela nous devons utiliser les classes.
Une classe est comme un plan de construction (Une usine à fabriquer des objets).

En langage orienté objet, une classe est un modèle de code programme extensible servant à 
créer des objets. Elle fournit les valeurs initiales de l’état (les variables membres) et 
de l’implémentation du comportement (les fonctions ou méthodes membres) - Wikipedia

Voici l'exemple d'une classe Véhicule qui nous sert de plan pour créer des objets voiture.
*/

class Vehicule {
    constructor(arg1, arg2, arg3) {
        this.marque = arg1;
        this.prix = arg2;
        this.couleur = arg3;
    }

    acceleration() {
        return "Vroommmm !";
    }
}

// Pour créer un objet à partir d'une classe on fait une instanciation de cette classe grâce à l'opérateur new
// On crée ainsi l'objet voiture1 qui est une instance de la classe Vehicule
// this = élément sur le quel on se trouve

let voiture1 = new Vehicule("Peugeot", 8000, "noir");

/*
Voici ce qu'elle contient :
    {
        marque: "Peugeot",
        prix: 8000,
        couleur: "noir"
    }

*/

// Pour appeler ses propriétés et méthodes, cela se passe comme tout type d'objet

console.log(voiture1.marque);
console.log(voiture1.acceleration());







