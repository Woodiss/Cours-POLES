// ====== LES TABLEAUX ======

// Documentation:
// https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array


// I - DEFINITION
// Structure qui permet de stocker plusieurs valeurs dans une seule variable.

let maVariable = [1, 'Bob', 'Etienne', 10];
maVariable;



// II - ACCEDER AUX ELEMENTS D'UN TABLEAU


maVariable[0]; // 1
maVariable[1]; // Bob
maVariable[2]; // Etienne
maVariable[3]; // 10

// Note : Les ordinateurs commencent les décomptes à partir de 0 !



// III- LES TABLEAUX MULTIDIMENTIONNELS

let random = ['arbre', 'écureuil', [7, 8, 9]];

// Pour accéder au tableau internet [0,1,2], on peut chaîner deux paires de crochets.

random[2][2]; // affiche 9



// IV - TROUVER LA TAILLE D'UN TABLEAU (le nombre d'éléments qu'il comporte)


// On utilisera la propriété length. 
// Documentation : https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array/length

let compteur = ['element1', 'element2', 'element3', 'element4'];

compteur.length; // renvoie 4

// On peut dire à une boucle de poursuivre jusqu'à 
// ce que tous les éléments du tableau aient été passés en revue

let sequence = [1, 1, 2, 3, 5, 8, 13];

for (let i = 0; i < sequence.length; i++) {
  console.log(sequence[i]); // affiche les elements les un après les autres
}

// AUTRE METHODE: Utiliser forEach
// Documentation: https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array/forEach

let films = ["Le loup de Wall Street", "Vice-Versa", "Babysitting"];

films.forEach(function (film) {
  console.log(film);
});


// V - CONVERSIONS ENTRE CHAINES ET TABLEAUX


// Passe d'une chaine de caractère à un tableau
// On utilisera la méthode split();
// Documentation : https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String/split
// Raccourci : taper "split() MDN" sur google

let maChaine = 'Melon, Pastèque, Fraise, Banane, Orange';

let monTableau = maChaine.split(' '); // On scince à chaque virgule ","
monTableau; // Affiche ["Melon", "Pastèque", "Fraise", "Banane", "Orange"];


// Passer d'un tableau à une chaine de caractère
// On ulisera la méthode join();
// Documentation: https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array/join
// Raccourci : taper "join() MDN" sur google

monTableau = ["Melon", "Pastèque", "Fraise", "Banane", "Orange"];
let maNouvelleChaine = monTableau.join(',');
maNouvelleChaine; // 'Melon, Pastèque, Fraise, Banane, Orange'

// VI - AJOUT ET SUPPRESSION D'ELEMENTS

// Pour ajouter push()
// Documentation: https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array/push

monTableau.push('Un nouveau fruit !!');
monTableau;

// Pour supprimer pop() (supprimer le dernier élément)
// Documentation: https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array/pop


// NOTE: Et si je veux supprimer un élément en plein milieu du tableau ??
// Je ne connais pas la fonction, alors je fais des recherches
// Je tape sur google "supprimer éléments de tableau javascript"
// Le premier lien qui apparait est celui de la documentation de javascript (sur developer.mozilla.org)
// Une page apparait dont le nom est: Array.prototype.splice()
// (voir https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array/splice )
// Je regarde la définition de cette méthode:
// "La méthode splice() modifie le contenu d'un tableau en retirant des éléments et/ou en ajoutant de nouveaux éléments."
// C'est ce dont j'ai besoin ! Je lis la fiche de cette méthode et je suis prêt à l'utiliser !! :-)

// Javascript contient de nombreuses méthodes permettant de modifier les tableaux:
// Vous trouverez la liste complete dans la documentation js :
// https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array#
// Chaque méthode listée contient sa fiche personnelle:
// exemple: Array.prototype.reverse()
// https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array/reverse

/* ====================== EXERCICES ==========================
*
* Utiliser splice() pour supprimer le mot "Fraise" du tableau
*
*/


  // monTableau = ["Melon", "Pastèque", "Fraise", "Banane", "Orange"];

  monTableau.splice("Fraise");
  // OU
  monTableau.splice(2)

  console.log(monTableau);

