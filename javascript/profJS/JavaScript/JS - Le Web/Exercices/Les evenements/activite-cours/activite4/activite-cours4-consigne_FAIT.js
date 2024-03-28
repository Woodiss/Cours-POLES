// ====== ACTIVITÉ COURS 3 =====

/* GROUPE DE 3 OU 2

Faites des recherches sur les sujet ci-dessous:
Avec Javascript,
1 - Détecter le mouvement de la souris
2 - Lire le contenu d'un champ texte dans un formulaire

Puis réaliser les tâches suivantes sur le HTML du fichier activite-cours4.html


/*
Ecoutez les événements input sur l'élément #name afin de savoir quand le contenu du champ texte est changé. Affichez le contenu actuel dans l'élément #res-name
*/
const nameId = document.getElementById("name")
const resName = document.getElementById("res-name")

let text = ""

nameId.addEventListener("input", () => {
    resName.textContent = nameId.value;
    // console.log(text);
});
/*
Ecouter l'événement du changement de choix du genre (#gender), et afficher le résultat dans l'élément #res-gender.
*/
const gender = document.getElementById("gender")
const resGender = document.getElementById("res-gender")

gender.addEventListener("change", (event) => {    
    resGender.textContent = event.target.value;
})

/*
Afficher les coordonnées de la souris à l'intérieur de l'élément #result dès que celle-ci passe par dessus. Ce que nous voulons, c'est avoir les coordonnées relatives au coin en haut à gauche de l'élément #result.
*/

const mouseX = document.getElementById("mouse-x")
const mouseY = document.getElementById("mouse-y")
const mouseX2 = document.getElementById("mouse-x2")
const mouseY2 = document.getElementById("mouse-y2")

document.getElementById("result").addEventListener("mousemove", function (event) {
    // Récupérer les coordonnées X et Y du déplacement de la souris
    mouseX.textContent = event.clientX;
    mouseY.textContent = event.clientY;
    mouseX2.textContent = event.offsetX;
    mouseY2.textContent = event.offsetY;
  });




  