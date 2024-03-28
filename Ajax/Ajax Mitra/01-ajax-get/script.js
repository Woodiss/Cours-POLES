/***
 * Statut de la requête Ajax : (readyState)
 * ------------------------------------------
 * 0 - L'objet Ajax a été instancié mais pas encore appelé, il est prêt
 * 1 - On a envoyé la requête (l'objet Ajax)
 * 2 - La requête a été reçue par le serveur
 * 3 - Le serveur traite la requête et commence à envoyer les données
 * 4 - La requête est finie, nous avons reçu la réponse
 * 
 * Statut http : (status)
 * ------------------------------------------
 * - 200 - tout est OK
 * 
 * ajax.onreadystatechange - permet de décomposer les différents états de la requ^te afin de déclancher 
 * notre code une fois la requête finie
 * 
 * ajax.responseText - contient la totalité de la réponse passée à notre objte ajax
 * 
 */


document.getElementById('bouton').addEventListener('click', function() {
    var xhttp = new XMLHttpRequest(); // instanciation de l'objet XMLHttpRequest qui est dans le navigateur

    xhttp.onreadystatechange = function() {
        console.log(xhttp.readyState);
        console.log(xhttp.status);

        if(xhttp.readyState == 4 && xhttp.status == 200) {
            console.log(xhttp.responseText); // on affiche la réponse dans la console

            // document.getElementById('titre').textContent = xhttp.responseText;
            document.getElementById('titre').innerHTML = xhttp.responseText;
        }
    }

    xhttp.open('GET', 'infos.txt', true); // on prépare la requête ajax

    // xhttp.overrideMimeType("text/plain");
    xhttp.send(); // on l'envoie
});