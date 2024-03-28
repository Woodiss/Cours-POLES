setInterval('monAjax()', 5000);
// setInterval() permet de répéter la fonction fournie en premier arguùment selon un timer fourni en 2ème argument (en millisecondes)
// ici la fonction mon Ajax() toutes les 5 secondes

 function monAjax() {
     var fichier = 'ajax.php';

     // instanciation de l'objet ajax avec prise en compte d'internet explorer
     if (window.XMLHttpRequest) {
         var xhttp = new XMLHttpRequest();
     } else {
         // pour internet explorer / edge
         var xhttp = new ActiveXObject("Microsoft.XMLHTTP");
     }

     xhttp.open("POST", fichier, true);
     xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

     xhttp.onreadystatechange = function () {

        if (xhttp.readyState == 4 && xhttp.status == 200) {
            console.log(xhttp.responseText);
            var retour = JSON.parse(xhttp.responseText);
            document.getElementById('resultat').innerHTML = retour.contenu;
       }
    }
    xhttp.send();

 }