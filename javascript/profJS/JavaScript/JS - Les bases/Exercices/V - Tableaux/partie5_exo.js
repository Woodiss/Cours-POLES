// [ source: https://github.com/oc-courses/intro-javascript ]


/*
* EXERCICE 1 - les tableaux
* Complétez le programme pour calculer puis afficher la somme des valeurs du tableau nombres.
*/

let nombres = [11, 3, 7, 2, 9, 10];

for (i = 0; i < nombres.length; i++) {
    result += nombres[i]
    console.log(result);
}

/*
* EXERCICE 2 - les tableaux
* Complétez le programme pour qu'il calcule et affiche ensuite la plus grande valeur présente dans le tableau.
*/

let valeurs = [3, 11, 7, 2, 9, 10];
let big = 0

for (i = 0; i < valeurs.length; i++) {
    if (big < valeurs[i]) {
        big = valeurs[i]
    }
}

console.log(big);

/*
* EXERCICE 3 - les tableaux
* Ecrivez un programme qui crée un tableau contenant les noms des trois mousquetaires, Athos, Porthos et Aramis ;
* 1- Affiche le nom de chaque mousquetaire à l'aide d'une boucle for ;
* 2- Ajoute au tableau le mousquetaire d'Artagnan ;
* 3- Affiche de nouveau le nom de chaque mousquetaire, cette fois à l'aide de la méthode forEach().
*/

// code 

let mousquetaires = ["Athos", "Porthos", "Aramis"];


for (i = 0; i < mousquetaires.length; i++) {
    console.log(mousquetaires[i]);
}

mousquetaires.push("d'Artagnan")

mousquetaires.forEach(function (elementTbaleau) {
    console.log(elementTbaleau);
});


/*
* EXERCICE 4 - les tableaux
* Ecrivez un programme qui fait saisir à l'utilisateur des mots jusqu'à ce qu'il saisisse "stop".
* Le programme affiche alors la liste des mots saisis.
*/

// code 

monTableau = []
let yolo = ""

while (yolo !== "stop") {
    yolo = prompt("Ajoute un élément au tableau !")
    monTableau.push(yolo)
}

// console.log(monTableau);
monTableau.forEach(function (yoloo) {
    console.log(yoloo);
})







let tablo = [1, 2, 3];

tablo.forEach(function (film) {
  console.log(film);
});

