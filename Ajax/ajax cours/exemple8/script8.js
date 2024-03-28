function getRequeteHttp() {

    var requeteHttp;

    // vérif si on utilise Mozilla
    if (window.XMLHttpRequest) {
        requeteHttp = new XMLHttpRequest();

        if (requeteHttp.overrideMimeType) {
            requeteHttp.overrideMimeType("text/xml");
        }
    } else {
        //vérif si ont utilise internet explorer
        if (window.ActiveXObject) {
            try {
                requeteHttp = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {
                requeteHttp = null;
            }
        }
    }
    return requeteHttp;

}


function envoyerRequete() {
    var requeteHttp = getRequeteHttp();

    if (requeteHttp == null) {
        alert("impossible d'utilsier ajax sur ce navigateur")
    } else {


        var cat = document.getElementById("cat").value;
        // prépare la requete
        requeteHttp.open("GET", "script8.php?cat_id=" + cat, true); // false = synchrone // true = asynchrone

        requeteHttp.onreadystatechange = function () { recevoirReponce(requeteHttp) }
        // envoyer le requete
        requeteHttp.send(null);

    }
}

function recevoirReponce(requeteHttp) {
    if (requeteHttp.readyState == 4) {
        // si la requete s'est correctement déroulée
        if (requeteHttp.status == 200) {
            // alert(requeteHttp.responseText);

            document.getElementById("nbr-produit").innerHTML = requeteHttp.responseText;
        } else {
            alert("La requête ne s'est pas correctement éxécutée.");
        }
    }
}