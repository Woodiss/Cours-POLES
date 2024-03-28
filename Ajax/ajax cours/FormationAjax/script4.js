
function getRequeteHttp() {
    var requeteHttp;

    if (window.XMLHttpRequest) {//Navigateurs basés sur Mozilla
        requeteHttp = new XMLHttpRequest()
        if (requeteHttp.overrideMimeType) //si ça exige que le type de données utilisé par le serveur soit text/xml
        {
            requeteHttp.overrideMimeType("text/xml");
        }
    } else {
        if (window.ActiveXObject) // C'est internet explorer
        {
            try {
                requeteHttp = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {
                requeteHttp = null;
            }
        }
    }
    return requeteHttp
}



function envoyerRequete()
{
    var requeteHttp = getRequeteHttp();

    if(requeteHttp == null)
    {
        alert("Impossible d'utiliser Ajax sur ce navigateur");
    }
    else
    {
        var nom = document.getElementById("nom").value;
        requeteHttp.open("GET", "script4.php?nom="+nom, false);
        requeteHttp.send(null);

        // la requête est achevée, le résultat a été transmis
        if(requeteHttp.readyState==4)
        {
            // si la requête s'est correctement déroulée
            if(requeteHttp.status==200)
            {
                document.getElementById("reponse").innerHTML = '<span style="color: red;">'+requeteHttp.responseText+'</span>';
            }
            else
            {
                alert("La requête ne s'est pas correctement exécutée.");
            }
        }
    }
}
