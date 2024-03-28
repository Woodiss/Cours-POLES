
// ====== ACTIVITÉ COURS 3 =====

/* GROUPE DE 3 OU 2

Faites des recherches sur les sujet ci-dessous:
Avec Javascript,
1 - Ecouter un évènement
2 - La propagation des évènements 
3 - Comment stopper la propagation des évènement
4 - Modifier le comportement par défaut d'un élément

Puis réaliser les tâches suivantes sur le HTML du fichier activite-cours3.html


/* 
Partie 1
Commençez par écouter les événements click depuis l'élément #parent. 
Puis affichez le nombre de clics dans l'élément #parent-count.
*/
let nbr = 0
let article = document.getElementById("parent")
let parentCount = document.getElementById("parent-count")

article.addEventListener("click", function () {
  nbr++
  parentCount.textContent = nbr
});

/* 
Partie 2
Faite la même chose mais avec l'élément #child. 
Il faudra afficher le nombre de clics sur cet élément dans l'élément #child-count.
*/
let child = document.getElementById("child");
let childCount = document.getElementById("child-count")

let lienClick = 0 

child.addEventListener("click", function (event) {
    lienClick++
    childCount.textContent = lienClick;
    event.stopPropagation();
    event.preventDefault();
});


/*
Partie 3
Nous souhaitons maintenant que lorsque nous cliquons sur l'élément #child, seul le compteur de l'enfant se mette à jour.
N'oubliez pas que l'élément enfant se trouve à l'intérieur de l'élément parent
*/




/*
Partie 4
On veut éviter qu'un clic sur le lien ne nous fasse changer de page. 
Supprimons donc ce comportement par défaut. 
*/



