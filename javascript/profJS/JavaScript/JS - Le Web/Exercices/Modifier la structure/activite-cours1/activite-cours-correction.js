// ====== ACTIVITÉ COURS =====

// 1 - Récupérez l'élément ayant pour ID main-content grâce à son ID.

let elt1 = document.getElementById("main-content");

// 2 - Pour ID main-content, change le contenu textuel par "Bonjour, je suis un nouveau texte"

let elt1 = document.getElementById("main-content");
elt1.textContent = "Bonjour, je suis un nouveau texte";

// 3 - Récupérez le premier élément ayant pour classe important
let elt2 = document.querySelector(".important");

// 4 - Change lui sa class par newClass, le contenu textuel devra s'afficher en rouge

elt2.classList.replace("important", "newClass")

/* 
======== Dans un fichier CSS, on ajoutera ========

        .newClass { 
            color:red; 
        }
*/

// Ou bien on peut changer le style de l'élément directement ac ce code:

elt2.style.color = "red";  