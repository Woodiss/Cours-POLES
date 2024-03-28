
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
        requeteHttp.open("GET", "script4.php?nom="+nom, true);
        requeteHttp.onreadystatechange = recevoirReponse;
        requeteHttp.send(null);

    }
}

function recevoirReponse()
{
    console.log("Réponse reçu.")
}