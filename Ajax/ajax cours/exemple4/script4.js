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

        var nom = document.getElementById("nom").value;
        // prépare la requete
        requeteHttp.open("GET", "script4.php?nom=" + nom, false); // false = synchrone // true = asynchrone
        // envoyer le requete
        requeteHttp.send(null);

        // le résultat a été transmis
        if (requeteHttp.readyState == 4) {
            // si la requete s'est correctement déroulée
            if (requeteHttp.status == 200) {
                // alert(requeteHttp.responseText);

                document.getElementById("reponse").innerHTML = '<span style="color:red">'+requeteHttp.responseText+'</span>';
            } else {
                alert("La requête ne s'est pas correctement éxécutée.");
            }
        }
    }
}