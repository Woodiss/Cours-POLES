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
        // prépare la requete
        requeteHttp.open("GET", "page2.html", false);
        // envoyer le requete
        requeteHttp.send(null);

        // le résultat a été transmis
        if (requeteHttp.readyState == 4) {
            // si la requete s'est correctement déroulée
            if (requeteHttp.status == 200) {
                // correspond au contenue de page2.html
                // alert(requeteHttp.responseText);
                document.write(requeteHttp.responseText);
            } else {
                alert("La requête ne s'est pas correctement éxécutée.");
            }
        }
    }
}
