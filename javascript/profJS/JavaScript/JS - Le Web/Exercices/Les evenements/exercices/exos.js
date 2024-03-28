// Exercice 1

/*
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Compteur de clics</title>
</head>

<body>
    <button id="clic">Cliquez-moi !</button>
    <p>Vous avez cliqué <span id="compteurClics">0</span> fois</p>
    <button id="desactiver">Désactiver le comptage</button>

</body>

</html>
*/ 

/*
*
* Créez un programme qui compte et affiche sur la page le nombre de clics 
* sur le bouton nommé "Cliquez-moi !". 
* Le bouton nommé "desactiver" permet d'arrêter le comptage.
*
*/

// CODE


// Exercice 2

/*
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Mes desserts préférés</title>
</head>

<body>
    <h1>Mes desserts préférés</h1>

    <ul id="desserts">
    </ul>

    <button>Ajouter un dessert</button>

</body>

</html>
*/

/*
*
* Créer un programme qui permet d'ajouter un nouveau dessert à la 
* liste "desserts" lors d'un clic sur le bouton "Ajouter un dessert".
* BONUS: Ajouter la possibilité de modifier un dessert présent dans la liste en cliquant dessus.
*/

// CODE


// Exercice 3

/*
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Quiz interactif</title>
</head>

<body>
    <div id="contenu"></div>

</body>

</html>
*/

// Liste des questions à afficher. Une question est définie par son énoncé et sa réponse
var questions = [
    {
        enonce: "Combien font 2+2 ?",
        reponse: "2+2 = 4"
    },
    {
        enonce: "En quelle année Christophe Colomb a-t-il découvert l'Amérique ?",
        reponse: "1492"
    },
    {
        enonce: "On me trouve 2 fois dans l'année, 1 fois dans la semaine, mais pas du tout dans le jour... Qui suis-je ?",
        reponse: "La lettre N"
    }
];

/*
* Afficher dans le HTML la liste des questions de ce code ainsi qu'un bouton "Afficher la réponse" sous chaque question.
* Puis faites apparaître la réponse associée à chaque question lors d'un clic sur le bouton "Afficher la réponse".
*/