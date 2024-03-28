// ====== ACTIVITÉ COURS =====


// 1 - Récupérez l'élément ayant pour ID main-content grâce à son ID.

let mainContent = document.getElementById("main-content");



// 2 - Récupérez les éléments ayant pour classe important

let docu = document.getElementsByClassName("important");



// 3 - Récupérez les éléments de type article

let article = docuement.querySelector("article")




// 4 Récupérez les éléments de type li qui sont dans un paragraphe (p) ayant la classe important. 
// Les paragraphes doivent eux-même être dans un article (article).

let li = docuement.querySelector(".important ul li")



// 5 - En reprenant le résultat de la tâche précédente (les éléments de type li dans un paragraphe 
// avec la classe important ....), sélectionnez le premier élément de type li 
// (rappelez-vous qu'avec querySelector vous avez récupéré une liste). 
// Puis dépuis cet élément, récupérez l'élément suivant (Celui qui a comme contenu Elément 2)

let liFirst = document.getElementsByTagName("li");
console.log(liFirst[1].textContent);