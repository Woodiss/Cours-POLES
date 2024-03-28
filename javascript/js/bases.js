// commentaire sur une ligne

/* 
Ici, je fait un 
commentaire sur 
plusieurs lignes
*/

// Step 1: Déclarer une variable en JS

// var Prenom;

// Step 2: Affecter une valeur à une variable

// Prenom="Mila";
// ou
// var Prenom="Mila"

// Step 3: une instruction se termine TOUJOUTD par un point-virgules, aussi il es possible d'écrire plusieurs instructions sur une seule ligne

// instr_1;
// instr_2; instr_3;

// Step 4: Afficher une boite de dialogue (2 façon)

// alert("Super, tu est arrivé sur mon site")
// window.alert("Super, tu est arrivé sur mon site");

// Step 5: Afficher dans la console (Ici, la valeur de ma variable "Prenom")

// console.log(Prenom);

// Step 6: Afficher dans la page

// document.write("A la pause Bachir il dort")

// Step 7: Demander à l'utisateur quel jour on n'est (2 façon)

// window.prompt("Question: on est quelle jour?" , "Jour de la semaine");
// prompt("Question: on est quelle jour?" , "Jour de la semaine")

// Step 7.5: et pour manipuler cette valeur, je n'oublie pas de la stoker

 var jour=prompt("Question: on est quelle jour?" , "Jour de la semaine");
// console.log(jour);

// Step 8: Attention /!\ le JS est sensible à la casse ("casse sensitive")

//mavariable =/= maVariable =/= ma_viable
//camel case    snake case

// Step 9: une variable ne peut pas commencer un chiffre, ne doit contenir que des caractères alphanumérique, et ne peut pas être un mot réservé (var, for... (éléments natifs du langages JS))

// Step 10: Une variable peut être déclarée de façon explicite

// façon explicite
// var fruit;
// fruit ="Fraise";

// façon implicite:
// var fruit_2 = "coco";
// fruit_2 ="coco";

/*
~~~~~~~~~~~~~~~~~~~ LES TYPES DE VARIABLES ~~~~~~~~~~~~~~~~~~
*/

// 1. Chaîne de caractères (string)
var vacances = "2023 &J^*";
var destination = "Australie";

// 2. Un nombre entier (integer ou int)
var annee = 2023;
// console.log(annee);

// 3. Un nombre décimal (float)
var NomAVirgule = -5.32;
// console.log(NomAVirgule);

// 4. Un booleen (booleen = VRAI/FAUX = TRUE/FALSE)
var unBooleen = false;

// 5. Les Constantes

/*
    La déclaration "const" permet de créer une constante accesible uniquement en lecture.
    Contrairement à une variable sa valeur ne peut plus être modifiée par reaffectation plus bas dans le code
    Une constante ne peut pas être déclarée a nouvrau dans le même script
*/

// Par convention, les constantes son en majuscule

const PAYS = "France"; // string
const AN = "2020"; // string
const BIRTH = 2020; // nombre, int ou interger


// Step 6: "typeof" permet de connaitre le type de ma variable

// console.log(vacances);
// console.log(typeof vacances);
// console.log(typeof annee);


// En JS les variable sont auto-typées
// On peut convertir une variable de type NUMBER en STRING et aussi STRING en NUMBER avec les fonctiones natives de JS
// La fonction parseInt() renvoie un entier à partir d'une chaine de caractères

// var unChriffre = "12";
// console.log(unChriffre);
// console.log(typeof unChriffre);

// STRING ==> NUMBER
// unChriffre = parseInt(unChriffre);
// console.log(unChriffre);
// console.log(typeof unChriffre);


// Je ré-affecte une valeur
// unChriffre = 12.22
// console.log(unChriffre);
// console.log(typeof unChriffre);

// STRING ==> FLOAT
// unChriffre = parseFloat(unChriffre);
// console.log(unChriffre);
// console.log(typeof unChriffre);

// NUMBER ==> STRING
var nb_en_lettres = 258;
console.log(nb_en_lettres);
console.log(typeof nb_en_lettres);

var nb_en_lettres = nb_en_lettres.toString();
console.log(nb_en_lettres);
console.log(typeof nb_en_lettres);

