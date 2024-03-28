// ====== ACTIVITÉ COURS =====
// alert("tt")

// 1 - Récupérez l'élément ayant pour ID main-content grâce à son ID.
let idMainContent = document.getElementById("main-content");

// 2 - Pour ID main-content, change le contenu textuel par "Bonjour, je suis un nouveau texte"
idMainContent.textContent = "Bonjour";


// 3 - Récupérez le premier élément ayant pour classe important
const classImportant = document.querySelector(".important");


// 4 - Change lui sa class par newClass, le contenu textuel devra s'afficher en rouge
classImportant.classList.replace("important", "newClass");
