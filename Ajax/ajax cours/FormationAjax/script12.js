
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

function envoyerRequeteRecherteCategories()
{
    var requeteHttp = getRequeteHttp();

    if(requeteHttp == null)
    {
        alert("Impossible d'utiliser Ajax sur ce navigateur");
    }
    else
    {
        var cat = document.getElementById("saisie").value;
        requeteHttp.open("POST", "script12.php", true);
        requeteHttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        requeteHttp.onreadystatechange = function(){recevoirReponseCategorie(requeteHttp)};
        requeteHttp.send("mode=1&cat="+cat);
    }
}

function recevoirReponseCategorie(requeteHttp)
{
    // la requête est achevée, le résultat a été transmis
    if(requeteHttp.readyState==4)
    {
        // si la requête s'est correctement déroulée
        if(requeteHttp.status==200)
        {
            var obj = JSON.parse(requeteHttp.responseText);

            var contenuSelect = "";
            for(var i=0; i<obj.length; i++)
            {
                var categorie = obj[i];
                contenuSelect += '<option value="' + categorie["id"] + '">' + categorie["label"] + '</option>';
            }
            document.getElementById("cat").innerHTML = contenuSelect;
            envoyerRequeteRechercheProduits();
        }
        else
        {
            alert("La requête ne s'est pas correctement exécutée.");
        }
    }
}

function envoyerRequeteRechercheProduits()
{
    var requeteHttp = getRequeteHttp();

    if(requeteHttp == null)
    {
        alert("Impossible d'utiliser Ajax sur ce navigateur");
    }
    else
    {
        var cat = document.getElementById("cat").value;
        requeteHttp.open("POST", "script12.php", true);
        requeteHttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        requeteHttp.onreadystatechange = function(){recevoirReponseProduits(requeteHttp)};
        requeteHttp.send("mode=2&cat="+cat);
    }
}

function recevoirReponseProduits(requeteHttp)
{
    // la requête est achevée, le résultat a été transmis
    if(requeteHttp.readyState==4)
    {
        // si la requête s'est correctement déroulée
        if(requeteHttp.status==200)
        {
            var obj = JSON.parse(requeteHttp.responseText);

            var contenuSelect = "";
            for(var i=0; i<obj.length; i++)
            {
                var produit = obj[i];
                contenuSelect += '<option value="' + produit["id"] + '">' + produit["label"] + '</option>';
            }
            document.getElementById("produits").innerHTML = contenuSelect;
            envoyerRequeteRecherchePrix();
        }
        else
        {
            alert("La requête ne s'est pas correctement exécutée.");
        }
    }
}

function envoyerRequeteRecherchePrix()
{
    var requeteHttp = getRequeteHttp();

    if(requeteHttp == null)
    {
        alert("Impossible d'utiliser Ajax sur ce navigateur");
    }
    else
    {
        var id_produit = document.getElementById("produits").value;
        requeteHttp.open("POST", "script12.php", true);
        requeteHttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        requeteHttp.onreadystatechange = function(){recevoirReponsePrix(requeteHttp)};
        requeteHttp.send("mode=3&id_produit="+id_produit);
    }
}

function recevoirReponsePrix(requeteHttp)
{
    // la requête est achevée, le résultat a été transmis
    if(requeteHttp.readyState==4)
    {
        // si la requête s'est correctement déroulée
        if(requeteHttp.status==200)
        {
            document.getElementById("prix").innerHTML = requeteHttp.responseText;
        }
        else
        {
            alert("La requête ne s'est pas correctement exécutée.");
        }
    }
}