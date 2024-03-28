/*
* EXERCICE 1 - les instructions
* Ecrivez un programme qui fait saisir un nombre à l'utilisateur 
* puis affiche la table de multiplication de ce nombre.
* en utilisant while
* en utilisant for
* TODO : MESSAGE: Choisissez la table entre 2 et 10
* TODO : affichage de la table de multiplication ds la console
*/

// AVEC WHILE
let nombre = 0; // Valeur par défaut permettant d'entrer dans la boucle
while ((nombre < 2) || (nombre > 9)) {
  nombre = Number(prompt("Entrez un nombre entre 2 et 9 : "));
}

console.log("Voici la table de multiplication de " + nombre);
let i = 1;
while (i <= 10) {
  console.log(nombre + " x " + i + " = " + (nombre * i));
  i++;
}

// AVEC FOR
let nombre = 0; // Valeur initiale permettant d'entrer dans la boucle
while ((nombre < 2) || (nombre > 9)) {
  nombre = Number(prompt("Entrez un nombre entre 2 et 9 : "));
}

console.log("Voici la table de multiplication de " + nombre);
for (let i = 1; i <= 10; i++) {
  console.log(nombre + " x " + i + " = " + (nombre * i));
}




/*
* EXERCICE 2 - les instructions
* Ecrivez un programme qui construit progressivement un triangle de 7 lignes:

# 
## 
### 
#### 
##### 
###### 
#######

*/

//AVEC WHILE
let ligne = "";
let i = 1;
while (i <= 7) {
  ligne = ligne + "#";
  // Autre possibilité avec l'opérateur +=
  //ligne += "#";
  console.log(ligne);
  i++;
}

// AVEC FOR
let ligne = "";
for (let i = 1; i <= 7; i++) {
  ligne = ligne + "#";
  // Autre possibilité avec l'opérateur +=
  //ligne += "#";
  console.log(ligne);
}

/* 
* EXERCICE 3: Complétez ce programme pour qu'il fasse 10 tours de manège en affichant le numéro du tour à chaque tour :

    Le manège démarre
    C'est le tour numéro 1
    C'est le tour numéro 2
    ...
    C'est le tour numéro 10
    Le manège s'arrête
*/

// Solution avec for
console.log("Le manège démarre");
for (let tour = 1; tour <= 10; tour++) {
  console.log("C'est le tour numéro " + tour);
}
console.log("Le manège s'arrête");


// Solution alternative avec un while

console.log("Le manège démarre");
let tour = 1;
while (tour <= 10) {
  console.log("C'est le tour numéro " + tour);
  tour++;
}
console.log("Le manège s'arrête");


/* 
* EXERCICE 4:
* Ecrivez un programme qui affiche tous les nombres entre 1 et 100 avec les exceptions suivantes :
    - Il affiche "Fizz" à la place du nombre si celui-ci est divisible par 3.
    - Il affiche "Buzz" à la place du nombre si celui-ci est divisible par 5 et non par 3.
    - Il affiche "FizzBuzz" à la place du nombre si celui-ci est divisible à la fois par 3 et par 5.
    - Vous pouvez utiliser l'opérateur modulo % qui renvoie le reste de la division d'un entier par un autre.

console.log(10 % 2); // 0
console.log(10 % 3); // 1
console.log(11 % 3); // 1
Cet exercice constitue un test d'embauche classique qui élimine un nombre significatif de candidats. 
Accrochez-vous pour le réussir !
*/

// Solution avec des if/else
for (let nombre = 1; nombre <= 100; nombre++) {
  if (nombre % 3 === 0 && nombre % 5 === 0) {
    console.log("FizzBuzz");
  } else if (nombre % 3 === 0) {
    console.log("Fizz");
  } else if (nombre % 5 === 0) {
    console.log("Buzz");
  } else {
    console.log(nombre);
  }
}

// Solution alternative construisant le message par concaténation
for (let nombre = 1; nombre <= 100; nombre++) {
  let message = ""; // Message initial vide
  if (nombre % 3 === 0) {
    // on ajoute "Fizz" au message
    message += "Fizz";
  }
  if (nombre % 5 === 0) {
    // on ajoute "Buzz" au message
    message += "Buzz";
  }
  if (message === "") {
    // Message vide : on affiche le nombre
    message = nombre;
  }
  console.log(message);
}

