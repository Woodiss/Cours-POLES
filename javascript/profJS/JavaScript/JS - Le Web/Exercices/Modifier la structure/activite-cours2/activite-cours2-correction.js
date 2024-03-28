// 1 - Créez un nouvel élément de type paragraphe paragraphe
let newElt = document.createElement("p");

// 2 - Ajoutez votre nouvel élément dans l'élément ayant pour id "main"
let elt = document.getElementById("main");
elt.appendChild(newElt);

// 3 - Ajoutez ce contenu HTML dans l'élément que vous créé lors de la première tâche: Mon <strong>grand</strong> contenu
newElt.innerHTML = "Mon <strong>grand</strong> contenu";

// 4 - Ajoutez la classe important à l'élément que vous avez crée lors de la première tâche
newElt.classList.add("important"); // ou element.className = "important";

// 5 - Votre élément est maintenant rouge, mais on voudrait qu'il soit vert. 
//     Modifiez les styles de votre élément (en JavaScript) pour qu'il soit vert.
newElt.style.color = "green";


